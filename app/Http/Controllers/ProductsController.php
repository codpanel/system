<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.products.index', ['products' => $products]);
    }

    
    public function create()
    {
        return view('admin.products.create');
    }

    
    public function store(Request $request)
    {
        $product = new Product;
        
        $product->name = $request->name;
        $product->reference = $request->reference;
        $product->prix_jmla = $request->prix_jmla;

        $product->save();

        return Redirect()->route('dashboard.products')->with('success', 'تم اضافة المستخدم بنجاح');
    }

    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $product = Product::find($id);

        return view('admin.products.edit', compact('product'));
    }

    
    public function update($id,Request $request)
    {
        $product = Product::find($id);
        
        $product->name = $request->name;
        $product->reference = $request->reference;
        $product->prix_jmla = $request->prix_jmla;

        $product->save();

        return Redirect()->route('dashboard.products')->with('success', 'تم اضافة المستخدم بنجاح');
    }

    
    public function destroy($id)
    {
        //
    }
}