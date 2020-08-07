<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SystemPages extends Controller
{
    

    public $dashboard = '/dashboard';
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


        $this->validate($request, [
            'user_login'   => 'required|email',
            'pass_login' => 'required|min:1'
        ]);

        if (Auth::guard()->attempt(['email' => $request->user_login, 'password' => $request->pass_login])) {
            return redirect()->intended($this->dashboard);
        }
        
        return back()->withInput($request->only('email', 'remember'))->with('error',trans('user.wrong.auth'));
    }

    public function logout(){
        Auth::logout();
        return redirect()->intended($this->login);
    }
}
