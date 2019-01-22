<?php
namespace App\Classes;

use App\MomoLog;

class MomoResponseParser
{

    protected $response;

    public $receiverNumber;
    public $statusCode;
    public $amount;
    public $transactionID;
    public $processingNumber;

    protected $decoded;

    public $success;
    public $message; // will contain the message for the result

    function __construct($response)
    {
        $this->response = $response;
    }

    public function parse()
    {
        //parse the response
        $this->decode();
        $this->extractData();
        $this->parseResult();
    }

    private function decode()
    {
        $result = json_decode($this->response);

        $this->decoded = $result;
    }

    private function extractData()
    {
        $decoded = $this->decoded;

        //now get the fields from the momo response
        $amount = $decoded->{'Amount'};
        $receiverNumber = $decoded->{'ReceiverNumber'};
        $statusCode = $decoded->{'StatusCode'};
        $transactionID = $decoded->{'TransactionID'};
        $processingNumber = $decoded->{'ProcessingNumber'};

        //now put them in the variable
        $this->amount = $amount;
        $this->receiverNumber = $receiverNumber;
        $this->statuscode = $statusCode;
        $this->transactionID = $transactionID;
        $this->processingNumber = $processingNumber;
    }

    private function parseResult()
    {
        //get the status code
        $code = $this->statusCode;

        if($code == "01")
        {
            $this->success = "true";
            $this->message = "Payment Successful";
        }
        elseif($code == "515")
        {
            $this->success = "false";
            $this->message = "This number does not have a mobile money account";
        }
        elseif($code == "529")
        {
            $this->success = "false";
            $this->message = "You don't have enough money in your account. Please recharge";
        }
        elseif($code == "100")
        {
            $this->success = "false";
            $this->message = "Transaction Failed. ";
        }
        else{
            $this->success = "false";
            $this->message = "Unknown Response";
        }
    }

    public function LogResult($user, $number, $tutCode, $momoEmail)
    {
        $log = new MomoLog;

        $log->tut_code = $tutCode;
        $log->user_id = $user->user_id;
        $log->amount = $this->amount;
        $log->user_number = $number;
        $log->receiver_number = $this->receiverNumber;
        $log->momo_email = $momoEmail;
        $log->status_code = $this->statusCode;
        $log->transaction_id = $this->transactionID;
        $log->processing_number = $this->processingNumber;
        $log->raw_response = $this->response;

        //save the log
        $log->save();
    }
}

 ?>
