<?php

namespace App\Http\Controllers;

use App\Cities;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    
    public function index()
    {
        $cities = Cities::paginate(10);
        return view('admin.auth.cities', ['cities' => $cities]);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $citie = new Cities;

        
        $citie->name = $request->city_name;
        $citie->reference = $request->reference;
        $citie->user_id = $request->user_id;
        

        $citie->save();

        return Redirect()->route('dashboard.pages.cities')->with('success', 'تم اضافة المستخدم بنجاح');
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
}