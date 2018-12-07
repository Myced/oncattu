<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class MyRegisterController extends Controller
{

    const DEFAULT_AVATAR = 'uploads/users/avatars/user.png';

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|string|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'email' => 'required|string|email|max:255|unique:users',
            'tel1' => 'required|unique:users'
        ]);

        //once validation is complete, store the user account
        $user = new User;

        $user_id = $this->generateUserId();

        $user->user_id = $user_id;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password  = Hash::make($request->password);
        $user->email = $request->email;
        $user->location = $request->location;
        $user->tel1 = $request->tel1;
        $user->tel2 = $request->tel2;
        $user->sex = $request->gender;
        //upload photo;
        $photoObject = $request->profile;

        if(!empty($photoObject))
        {
            //generate a name for it;
            $photoName = time() . $photoObject->getClientOriginalName();

            $destination = 'uploads/users/avatars/';

            $photoObject->move($destination, $photoName);

            $user->avatar = $destination . $photoName;
        }
        else {
            $user->avatar = SELF::DEFAULT_AVATAR;
        }

        $user->save();

        session()->flash('success', 'Account Created');

        return back();
    }

    public function generateUserId()
    {
        $constant = "OCT" . date('ym') . 'U';

        $last_id = User::all()->pluck('id')->last();

        $id = $last_id + 1;
        $uid = '';

        if($id  < 10)
        {
            $uid = '000' . $id;
        }
        elseif($id < 100)
        {
            $uid  = '00' . $id;
        }
        elseif($id < 1000)
        {
            $uid = '0' . $id;
        }
        else {
            $uid = $id;
        }

        $user_id = $constant . $uid;

        //check that this user id does not exist
        $user = User::where('user_id', '=', $user_id)->get();

        if(count($user) > 0)
        {
            $uid .= rand(0, 100);
            $user_id = $constant . $uid;
        }

        return $user_id;
    }

    public function createTutor()
    {
        return view('create_tutor');
    }

    public function storeTutor(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|string|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'email' => 'required|string|email|max:255|unique:users',
            'tel1' => 'required|unique:users'
        ]);

        //once validation is complete, store the user account
        $user = new User;

        $user_id = $this->generateTutorID();

        $user->user_id = $user_id;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->password  = Hash::make($request->password);
        $user->email = $request->email;
        $user->location = $request->location;
        $user->tel1 = $request->tel1;
        $user->tel2 = $request->tel2;
        $user->sex = $request->gender;

        //tutor specific settings
        $user->type = "tutor";
        $user->prep_head = $request->prep_head;
        $user->prep_name = $request->prep_name;
        $user->tutor_type = $request->tutor_type;

        //upload photo;
        $photoObject = $request->profile;

        if(!empty($photoObject))
        {
            //generate a name for it;
            $photoName = time() . $photoObject->getClientOriginalName();

            $destination = 'uploads/users/avatars/';

            $photoObject->move($destination, $photoName);

            $user->avatar = $destination . $photoName;
        }
        else {
            $user->avatar = SELF::DEFAULT_AVATAR;
        }

        $user->save();

        session()->flash('success', 'Account Created');

        return back();
    }

    public function generateTutorID()
    {
        $constant = "OCT" . date('ym') . 'T';

        $last_id = User::all()->pluck('id')->last();

        $id = $last_id + 1;
        $uid = '';

        if($id  < 10)
        {
            $uid = '000' . $id;
        }
        elseif($id < 100)
        {
            $uid  = '00' . $id;
        }
        elseif($id < 1000)
        {
            $uid = '0' . $id;
        }
        else {
            $uid = $id;
        }

        $user_id = $constant . $uid;

        //check that this user id does not exist
        $user = User::where('user_id', '=', $user_id)->get();

        if(count($user) > 0)
        {
            $uid .= rand(0, 100);
            $user_id = $constant . $uid;
        }

        return $user_id;
    }
}
