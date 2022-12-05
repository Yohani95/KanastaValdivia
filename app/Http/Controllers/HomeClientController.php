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
        $categories = Category::all();
        return view('HomeClients.home', compact('products','categories'))
            ->with('i', (request()->input('page', 1) - 1) * $products->perPage());
    }

    public function show(Request $request)
    {
        
        // return $request::all();
        // $result=$request->input('buscar');
        // dd($result);
        // $request->validate([
        //     'buscarProducto' =>'required'
        // ]);
        // dd($request->input('buscarProducto'));
        // $result=$request->name;
        // $products = Product::where('name','like','%'.$result.'%');
        // //dd($products->get());
        // return redirect('HomeClients.show', compact('products'));
    }
    public function indexShow(Request $request)
    {

        $products = Product::paginate()->where('name','like',$request->name);
        return view('HomeClients.show', compact('products'));
    }
}
