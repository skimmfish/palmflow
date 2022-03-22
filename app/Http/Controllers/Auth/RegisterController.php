<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/logout';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
	 
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|min:4 | max:12',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|max:12 | confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
*/
     
    protected function create(array $data)
    {
        User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
			'active'=>0,
			'is_admin'=>0
			
        ]);

		//logout the user first before redirecting
	//	Auth::logout();    

	return redirect()->route('logout')->with('message','You have been successfully registered, please check your e-mail');
}


/**
this function stores a new user instance in the users table
*/

public function store(Request $request){
			
					$rules = [
					'username' => 'required|min:4|max:12',
					'required|string|email|max:255|unique:users',
					'password' => 'required | min:6 | max:20',
					];


					//this customizes the messages to be displayed to users
					$messages = [
					'required' => 'Please provide an event :attribute',
					'name.required' => 'We need to know your full name!',
					'username.min' => 'YOur username should have at least 4 characters',
					'username.max' => 'Event names cannot be longer than 12 characters',
					
					];

		//initializing the validator variable to hold responses returned from the facade method calls
		$validator = Validator::make($request->all(), $rules, $messages)->validate();
	
	
	$user = new User;
	$user->username = $request->username;
	$user->password = bcrypt($request->password);
	$user->email = $request->email;
	$user->active = 0;
	$user->is_admin = false;
	
	$user->save();
	
	
	return redirect()->route('auth.login');
	
}


}
