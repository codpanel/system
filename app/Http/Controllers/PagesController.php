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
        return view('admin.auth.cities', ['cities' => $cities]);
    }

    public function cash()
    {
        return view('admin.auth.cash');
    }

    public function revenue()
    {
        return view('admin.auth.revenue');
    }

    public function search()
    {
        return view('admin.auth.search');
    }

    public function double()
    {
        return view('admin.auth.double');
    }

    public function statistiques()
    {
        return view('admin.auth.statistiques');
    }

    public function statistiques_delivers()
    {
    }

    public function statistiques_employees()
    {
    }

    public function reception()
    {
        return view('admin.auth.reception');
    }
}