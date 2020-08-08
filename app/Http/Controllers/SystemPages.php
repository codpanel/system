<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SystemPages extends Controller
{
    

    public $dashboard = '/dashboard';
    public $deliver = '/deliver';
    public $employee = '/employee';
    public $login = '/system';

    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function attempt(Request $request)
    {

        $rules = [
            'user_login'   => 'required|email',
            'pass_login' => 'required|min:1'
        ];

        $messages = [
            'user_login.required'    => trans("email.required"),
            'user_login.email'       => trans("email.email"),
            'pass_login.required' => trans("password.required"),
        ];

        $request->validate($rules, $messages);


        if (Auth::guard()->attempt(['email' => $request->user_login, 'password' => $request->pass_login]) && Auth::user()->role == 'admin') {
            return redirect()->intended($this->dashboard);
        }
        if (Auth::guard()->attempt(['email' => $request->user_login, 'password' => $request->pass_login]) && Auth::user()->role == 'deliver') {
            return redirect()->intended($this->deliver);
        }
        if (Auth::guard()->attempt(['email' => $request->user_login, 'password' => $request->pass_login]) && Auth::user()->role == 'employee') {
            return redirect()->intended($this->employee);
        }
        
        return back()->withInput($request->only('user_login', 'remember'))->with('error',trans('user.wrong.auth'));
    }

    public function logout(){
        Auth::logout();
        return redirect()->intended($this->login);
    }
}