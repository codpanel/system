<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    
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

    
    public function pending()
    {
        return view('admin.employees.pending');
    }


    public function canceled()
    {
        return view('admin.employees.canceled');
    }


    public function recall()
    {
        return view('admin.employees.recall');
    }


    public function unanswered()
    {
        return view('admin.employees.unanswered');
    }
}