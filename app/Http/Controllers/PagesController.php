<?php

namespace App\Http\Controllers;

use App\Cities;
use Illuminate\Http\Request;

class PagesController extends Controller
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


    public function destroy($id)
    {
        //
    }

    public function cities()
    {
        $cities = Cities::paginate(10);
        return view('admin.pages.cities', ['cities' => $cities]);
    }

    public function cash()
    {
        return view('admin.pages.cash');
    }

    public function revenue()
    {
        return view('admin.pages.revenue');
    }

    public function search()
    {
        return view('admin.pages.search');
    }

    public function double()
    {
        return view('admin.pages.double');
    }

    public function reception()
    {
        return view('admin.pages.reception');
    }


    public function suivi()
    {
        return view('admin.pages.suivi');
    }

    public function allorders()
    {
        return view('admin.pages.all-lists');
    }
}