<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    
    public function index()
    {
        return view('admin.data.index');
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

    
    public function deleted()
    {
        return view('admin.data.deleted');
    }


    public function duplicated()
    {
        return view('admin.data.duplicated');
    }


    public function new()
    {
        return view('admin.data.new');
    }
}