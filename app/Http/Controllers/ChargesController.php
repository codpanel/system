<?php

namespace App\Http\Controllers;

use App\Charges;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChargesController extends Controller
{
    
    public function index()
    {
        $charges = Charges::paginate(10);
        $sumval = Charges::whereNull('paied_at')->sum('value');
   
        return view('admin.auth.charges', ['charges' => $charges,'sumval' => $sumval]);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $charges = new Charges;
        
        $charges->name = $request->name;
        $charges->value = $request->value;

        $charges->save();

        return Redirect()->route('dashboard.charges')->with('success', 'تم اضافة المستخدم بنجاح');
    }

    
    public function paied($id,Request $request){

        $charges = Charges::find($id);

        $charges->paied_at= Carbon::now();

        $charges->save();

        return Redirect()->route('dashboard.charges')->with('success', 'تم تعديل المستخدم بنجاح');
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }


}