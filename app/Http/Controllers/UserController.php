<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\User;

class UserController extends Controller
{
    public function postSaveUser(Request $request)
    {
    	$request->validate([
    		'firstname' => 'required',
    		'lastname' => 'required',
    		'email' => 'required|email',
    		'password' => 'required'
    	]);

    	$firstname = $request['firstname'];
    	$lastname = $request['lastname'];
    	$email = $request['email'];
    	$password = $request['password'];

    	// $user = new User();
    	// $user->firstname = $firstname;
    	// $user->lastname = $lastname;
    	// $user->email = $email;
    	// $user->password = $password;
    	
    	// if($user->save()) {
    	// 	return redirect()->route('home')->with('success', 'User has saved!');
    	// }
    	 
    	$user = array(
    		'firstname' => $firstname,
    		'lastname' => $lastname,
    		'email' => $email,
    		'password' => $password
    	);

    	// DB::table('users')->insert($user);

    	$user_m = new User();
    	$user_m->save_data($user);


    	// return 'Error occured!';


    }



    public function showUser($id)
    {
    	$user = User::find($id);

    	return view('display-user', ['user' => $user]);

    }
}
