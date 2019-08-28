<?php

namespace Modules\Employee\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use \Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{ 
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('employee::auth.login');
    }

    // public function login(Request $request)
    // {
    //     dd($request);
    //     return view('employee::auth.login');
    // }

    public function login(Request $request)
    {
        $rememberme = request()->has('remember_me')? true : false;
        if(Auth::guard('employee')->attempt(['username' => request('username'), 'password' => request('password')], $rememberme)){
          Session::flash('flash_massage_type');
          return redirect()->route('cpanel')->withFlashMassage('Login Susscefully');
        }else{
          Session::flash('flash_massage_type', 4);
          return redirect()->back()->withFlashMassage('Password Is\'t Correct');
        }
    }
    
    /**
     * The user has logged out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function loggedOut(Request $request)
    {
        Session::flash('flash_massage_type');
        return redirect()->route('login')->withFlashMassage('Logout Susscefully');
    }
}
