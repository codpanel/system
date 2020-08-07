<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $name = $request->route()->getName();

        if ($name == 'lists') {
            $Routename = view('admin.auth.lists');
        } elseif ($name == 'suivi') {
            $Routename = view('admin.suivi.index');
        } elseif ($name == 'Sentlists') {
            $Routename = view('admin.auth.sentlists');
        }
        return $Routename;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function createForm()
    {
        return view('admin.auth.create-lists');
    }

    public function transform()
    {
        return view('admin.auth.transform');
    }

    public function confirmation()
    {
        return view('admin.auth.confirmation');
    }

    public function suivi()
    {
        return view('admin.auth.');
    }

    public function stock()
    {
        return view('admin.stockGeneral.stock');
    }
}