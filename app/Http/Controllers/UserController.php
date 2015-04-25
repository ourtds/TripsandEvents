<?php namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
class UserController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function register()
	{
                           return view('register.register');
	}
        
                    public function registeruser()
	{
                        
	}
        
                    public function login()
	{
                          return view('login.login');
	}
        
                    public function loginuser()
	{
                          
	}

}
