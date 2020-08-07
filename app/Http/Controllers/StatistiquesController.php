<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatistiquesController extends Controller
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

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function statistiques()
    {
        return view('admin.statistiques.index');
    }

    public function statistiques_delivers()
    {
        return view('admin.statistiques.delivers');
    }

    public function statistiques_employees()
    {
        return view('admin.statistiques.employees');
    }
}
