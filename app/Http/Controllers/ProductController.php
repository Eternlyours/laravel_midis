<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', 
        [
            'products' => $products
        ]);
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request, Product $product) {
        $data = $request->validate([
            'title'=>'string|required|max:255|min:1',
            'description'=>'string|required',
            'price'=>'decimal:0,2|required'
        ]);
        $product->create($data);
        return redirect()->route('products.index');
    }

    public function delete(Product $product) {
        $product->delete();
        return redirect()->back();
    }

    public function show(Product $product) {
        return view('products.show' , compact('product'));
    }
}
