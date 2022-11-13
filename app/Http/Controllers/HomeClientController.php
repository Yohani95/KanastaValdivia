<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Sale;

class HomeClientController extends Controller
{
    public function index()
    {
        $products = Product::paginate();
        return view('HomeClients.home', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * $products->perPage());
    }

    public function show(Request $request)
    {
        return $request::all();
        $result=$request->input('buscar');
        dd($result);
        $request->validate([
            'buscarProducto' =>'required'
        ]);
        dd($request->input('buscarProducto'));
        $product = Product::wherein($request);

        return view('show', compact('product'));
    }
}
