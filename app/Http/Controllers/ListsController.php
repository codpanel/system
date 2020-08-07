<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListsController extends Controller
{
    
    public function index(Request $request)
    {
        return view('admin.pages.home');
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

    
    public function destroy($id)
    {
        //
    }

    public function createForm()
    {
        return view('admin.pages.create-lists');
    }

    public function transform()
    {
        return view('admin.pages.transform');
    }

    public function confirmation()
    {
        return view('admin.pages.confirmation');
    }

    public function suivi()
    {
        return view('admin.pages.');
    }

    public function stock()
    {
        return view('admin.stockGeneral.stock');
    }
}