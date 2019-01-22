<?php

namespace App\Http\Controllers;

use App\User;
use App\Functions;
use App\BookingFee;
use App\BookingCount;
use App\AssignedRoute;
use App\Classes\MomoProcessor;
use App\Classes\MomoResponseParser;
use Illuminate\Http\Request;

class PaymentProcessor extends Controller
{
    public function momo(Request $request)
    {
        $number = $request->number;
        $userCode = $request->user;

        $user = $this->getUser($userCode);

        $booking = BookingCount::where('code', '=', $request->code)->first();

        if($request->type == "fee")
        {
            $amount = Functions::getBookingFee();
            $momoEmail = Functions::getMomoEmail();
        }
        else {
            $amount = $booking->total;

            //get the momo email to be sent to
            $momoEmail = $booking->agency_id;

        }

        if(empty($momoEmail))
        {
            //make it a default email
            $momoEmail = "tncedric@gmail.com";
        }

        //process the momo
        $momo = new MomoProcessor($amount, $number, $momoEmail);
        $response = $momo->getResponse();

        //parse the response
        $parser = new MomoResponseParser($response);
        $parser->parse();
        $parser->LogResult($user, $number, $booking->agency_id);

        //if this a booking fee payment the log if successful
        if($request->type == "fee")
        {
            if($parser->success == "true")
            {
                $bookingFee = new BookingFee;

                $bookingFee->agency_id = $booking->agency_id;
                $bookingFee->user_id = $user->user_id;
                $bookingFee->amount = $amount;
                $bookingFee->booking_count_code = $request->code;
                $bookingFee->mysql_date = date("Y-m-d");

                $bookingFee->save();
            }
        }

        $result = [
            "status" => $parser->success,
            "message" => $parser->message
        ];

        return json_encode($result);
    }

    public function orange(Request $request)
    {
        return $request->number;
    }

    public function visa(Request $request)
    {
        return $request->number;
    }

    private function getUser($code)
    {
        return User::where('user_id', '=', $code)->first();
    }
}
