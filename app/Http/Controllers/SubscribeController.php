<?php

namespace App\Http\Controllers;

use App\User;
use App\Book;
use App\MyBook;
use App\Tutorial;
use App\MyTutorial;
use App\SiteSettings;
use App\Classes\MomoProcessor;
use App\Classes\MomoResponseParser;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function tutorial(Request $request)
    {
    	//get the files from post
    	$tutCode = $request->code;
    	$user_id = $request->user;
    	$number = $request->number;

    	//get the tutorial
    	$tutorial = $this->getTutorial($tutCode);
    	$user = $this->getUser($user_id);

    	$tutor = User::find($tutorial->teacher_id);

    	$amount = $tutorial->price;
    	$momoEmail = $this->getMomoEmail();

        //make sure the person has not subscribed to this tutorial
        $myTut = MyTutorial::where('user_id', '=', $user_id)
                            ->where('tut_code', '=', $tutCode)
                            ->get();
        if(count($myTut) > 0)
        {
            //the person has already subscribed to this course
            $response = [
                'status' => 'true',
                'message' => 'You have already subscribed to this tutorial'
            ];

            return json_encode($response);
        }

    	//now process the momo
    	//process the momo
        $momo = new MomoProcessor($amount, $number, $momoEmail);
        $response = $momo->getResponse();

        //parse the response
        $parser = new MomoResponseParser($response);
        $parser->parse();
        $parser->LogResult($user, $number, $tutorial->code, $momoEmail);

        //if this was successful then subscribe the person
        if($parser->success == "true")
        {
            $myTut = new MyTutorial;

            $myTut->user_id = $user->user_id;
            $myTut->tut_code = $tutorial->code;
            $myTut->date = date("d/m/Y");
            $muTut->mysql_date = date("Y-m-d");

            $myTut->save();
        }

        $response = [
    		'status' => $parser->success,
    		'message' => $parser->message
    	];


    	return json_encode($response);
    }

    public function book(Request $request)
    {
        $bookID = $request->book;
        $number = $request->number;
        $user_id = $request->user;

        $user = $this->getUser($user_id);
        $book = Book::find($bookID);

        $amount = $book->amount;
        $momoEmail = $this->getMomoEmail();

        //make sure the user is not subscribing twice
        $myBooks = MyBook::where('user_id', '=', $user->user_id)
                            ->where('book_id', '=', $bookID)
                            ->get();

        if(count($myBooks) > 0)
        {
            //the person has already subscribed to this course
            $response = [
                'status' => 'true',
                'message' => 'You have already bought this book'
            ];

            return json_encode($response);
        }

        //start the momo processing here
        //now process the momo
        //process the momo
        $momo = new MomoProcessor($amount, $number, $momoEmail);
        $response = $momo->getResponse();

        //parse the response
        $parser = new MomoResponseParser($response);
        $parser->parse();
        $parser->LogResult($user, $number, $tutorial->code, $momoEmail);

        //if this was successful then subscribe the person
        if($parser->status == "true")
        {
            $myBooks = new myBook;
            $myTut->user_id = $user->user_id;
            $myTut->book_id = $book->id;
            $myTut->date = date("d/m/Y");
            $muTut->mysql_date = date("Y-m-d");

            $myTut->save();
        }

        $response = [
            'status' => $parser->status,
            'message' => $parser->message
        ];


        return json_encode($response);
    }



    private function getUser($user_id)
    {
    	return User::where('user_id', '=', $user_id)->first();
    }

    private function getTutorial($code)
    {
    	return Tutorial::where('code', '=', $code)->first();
    }

    private function getMomoEmail()
    {
    	return SiteSettings::find('1')->momo_email;
    }
}
