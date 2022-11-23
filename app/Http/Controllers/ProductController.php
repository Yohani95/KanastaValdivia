<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Sale;
use Illuminate\Http\Request;
use \Illuminate\Http\Post;

/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate();
        return view('product.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * $products->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        $categories = Category::pluck('name','id');
        $sales= Sale::pluck('name','id');
        return view('product.create', compact('product','categories','sales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        request()->validate(Product::$rules);
        $product=new Product();
        if($request->hasfile('ruta_image')){
            $file=$request->file('ruta_image');
            $destinationPath='images/products/';
            $filename=time().'-' . $file->getClientOriginalName();
            $file->move($destinationPath,$filename);
        }
        $product->name=$request->name;
        $product->categories_id=$request->categories_id;
        $product->description=$request->description;
        $product->bar_code=$request->bar_code;
        $product->price=$request->price;
        $product->stock=$request->stock;
        $product->id_sales=$request->id_Sales;
        $product->id_voucher=$request-> id_voucher;
        $product->ruta_image=$destinationPath.$filename;
        $product->save();

        return redirect()->route('products.index')
            ->with('success', 'Producto creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::pluck('name','id');
        $sales= Sale::pluck('name','id');
        return view('product.edit', compact('product','categories','sales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        request()->validate(Product::$rules);
        if($request->hasfile('ruta_image')){
            $file=$request->file('ruta_image');
            $destinationPath='images/products/';
            $filename=time().'-' . $file->getClientOriginalName();
            $file->move($destinationPath,$filename);
        }
        $product->name=$request->name;
        $product->categories_id=$request->categories_id;
        $product->description=$request->description;
        $product->bar_code=$request->bar_code;
        $product->price=$request->price;
        $product->stock=$request->stock;
        $product->id_sales=$request->id_Sales;
        $product->id_voucher=$request-> id_voucher;
        $product->ruta_image=$destinationPath.$filename;
        $product->update();
        return redirect()->route('products.index')
            ->with('success', 'Producto actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();

        return redirect()->route('products.index')
            ->with('success', 'Producto eliminado');
    }
}
