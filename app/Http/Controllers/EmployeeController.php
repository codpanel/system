<?php

namespace App\Http\Controllers;

use App\Lists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{

    public function index()
    {
        $lists = Lists::with('employee','deliver')->paginate(10);
        //$lists = Lists::where('mowadafaID',Auth::user()->id)->paginate(10);
        return view('employee.index', ['items' => $lists]);
    }


    public function create()
    {
        return view('employee.create');
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

    public function pending()
    {
        return view('employee.pending');
    }


    public function canceled()
    {
        return view('employee.canceled');
    }


    public function recall()
    {
        return view('employee.recall');
    }


    public function unanswered()
    {
        return view('employee.unanswered');
    }
}