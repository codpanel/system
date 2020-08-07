<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function index(Request $request)
    {
        $users = User::paginate(10);
        $count = DB::table('users')->count();
        return view('admin.users.index', ['users' => $users, 'count' => $count]);
    }


    public function create(Request $request)
    {
        return view('admin.users.create');
    }


    public function store(Request $request)
    {

        $rules = [
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:3',
            'username'     => 'required|string|min:4',
            'phone'    => 'required',
        ];

        $messages = [
            'email.required'    => trans("email.required"),
            'email.email'       => trans("email.unique"),
            'email.unique'      => trans("name.required"),
            'password.required' => trans("password.required"),
            'password.min'      => trans("password.min"),
            'username.required'     => trans("name.required"),
            'phone.required'    => trans("phone.required"),
        ];

        $request->validate($rules, $messages);



        $user = new User;

        if ($request->role == 'employee') {
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->phone = $request->phone;
            $user->role = 'employee';
        }
        if ($request->role == 'deliver') {
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->phone = $request->phone;
            $user->deliver_price = $request->deliver_price;
            $user->role = 'deliver';
        }
        if ($request->role == 'admin') {
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->phone = $request->phone;
            $user->role = 'admin';
        }
        if ($request->role == 'data') {
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->phone = $request->phone;
            $user->role = 'data';
        }

        if ($request->role == 'suivi') {
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->phone = $request->phone;
            $user->role = 'suivi';
        }

        $user->save();

        return Redirect()->route('dashboard.users')->with('success', 'تم اضافة المستخدم بنجاح');
    }


    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.users.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->username     = $request->username;
        $user->email    = $request->email;
        $user->phone    = $request->phone;
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return Redirect()->route('dashboard.users')->with('success', 'تم تعديل المستخدم بنجاح');
    }
}