<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeliversController extends Controller
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

    public function pending()
    {
        return view('admin.delivers.pending');
    }

    public function delivered()
    {
        return view('admin.delivers.delivered');
    }


    public function canceled()
    {
        return view('admin.delivers.canceled');
    }


    public function recall()
    {
        return view('admin.delivers.recall');
    }


    public function unanswered()
    {
        return view('admin.delivers.unanswered');
    }
}
