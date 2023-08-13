<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('product.index', compact('products'));
    }
    public function create()
    {
        return view('product.create');
    }
    public function store(Request $request)
    { 
        
        $validated = $request->validate([
            'name' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
       Product::create([
            'name' => $request->input('name'),
            'qty' => $request->input('qty'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
        ]);
        

        return redirect()->route('product.index')->with('success', 'Product created successfully!');
    }
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('product.edit', compact('products'));
    }
    public function update($id, Request $request)
    {
        $product = Product::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        $product->update([
            'name' => $request->input('name'),
            'qty' => $request->input('qty'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
        ]);
        return redirect()->route('product.index')->with('success', 'Product updated successfully!');
    }
    public function destory($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully!');
    }
}
