<?php

namespace App\Http\Controllers;

use App\Lists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeliverController extends Controller
{
    
    public function index()
    {
        $lists = Lists::with('deliver')->paginate(10);
        //$lists = Lists::where('mowadafaID',Auth::user()->id)->paginate(10);
        return view('deliver.index', ['delivers' => $lists]);
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
        return view('deliver.index');
    }

    public function delivered()
    {
        return view('deliver.delivered');
    }


    public function canceled()
    {
        return view('deliver.canceled');
    }


    public function recall()
    {
        return view('deliver.recall');
    }


    public function unanswered()
    {
        return view('deliver.unanswered');
    }

}