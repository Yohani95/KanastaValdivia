<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class CartController extends Controller
{
    public function shop()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('HomeClients.home')->withTitle('Kanasta | SHOP')
        ->with(['categories' => $categories,'products' => $products]);
    }

    public function cart()  {
        $cartCollection = \Cart::getContent();
        $categories = Category::all();
        //dd($cartCollection);
        return view('HomeClients.cart')->withTitle('Kanasta | CART')->with(['cartCollection' => $cartCollection,'categories' => $categories]);;
    }
    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Item Eliminado');
    }

    public function add(Request $request){
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,
                'slug' => $request->slug
            )
        ));
        $categories = Category::all();
        return redirect()->route('cart.index')->with('success_msg', 'Item Agregado a su Carrito!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Carrito Actualizado');
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Carrito Limpio');
    }

}
