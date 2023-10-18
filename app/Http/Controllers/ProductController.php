<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Display a list of all products
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Show detailed information about a product
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    // Show the product creation form
    public function create()
    {
        return view('products.create');
    }

    // Store a newly created product in the database
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->save();

        return redirect('/')->with('success', 'Product added successfully');
    }

    // Show the product editing form
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    // Update a product in the database
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->save();

        return redirect('/')->with('success', 'Product updated successfully');
    }

    // Delete a product from the database
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/')->with('success', 'Product deleted successfully');
    }
}
