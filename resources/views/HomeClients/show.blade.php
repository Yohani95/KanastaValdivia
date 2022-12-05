@extends('welcome')

@section('content')
@include('layouts.barClients')
<div class="container-fluid">
    <div class="row p-2  white-text">
    @foreach ($products as $product)
    <div class="col-xs-12 col-md-6  col-lg-4 container">
            <p class="h4">{{ $product->name }}</p>
            <hr>
            <div class="card" style="width: 18rem;">
                <img src="{{asset($product->ruta_image)}}" class="card-img-top" width="300px" height="160px">
                <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">
                <div class="form-group">
                            <strong>Categories Id:</strong>
                            {{ $product->category->name }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $product->description }}
                        </div>
                        <div class="form-group">
                            <strong>SKU:</strong>
                             {{ $product->bar_code }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            $ {{ $product->price }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $product->stock }}
                        </div>




                        <!-- cart details -->
<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
                                <div class="wthreecartaits wthreecartaits2 cart cart box_1">
                                    <form action="#" method="post" class="last">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="display" value="1">
                                        <button class="btn w3view-cart" type="submit" name="submit" value="">
                                            <i class="fas fa-cart-arrow-down"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!-- //cart details -->
                </p>
                <form action="{{ route('cart.store') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" class="form-control" value="{{ $product->id }}" id="id" name="id">                            
                    <input type="hidden" class="form-control" value="{{ $product->name }}" id="name" name="name">
                    <input type="hidden" class="form-control" value="{{ $product->price }}" id="price" name="price">
                    <input type="hidden" class="form-control" value="{{ $product->ruta_image }}" id="img" name="img">
                    <input type="hidden" class="form-control" value="{{ $product->bar_code }}" id="slug" name="slug">
                    <input type="hidden" value="1" id="quantity" name="quantity">
                <div class="row " >
                    <div class="col-lg-6"><a href="{{asset($product->ruta_image)}}" class="btn btn-primary text-center btn-sm">Ver Producto</a></div>
                    <div class="col-lg-6">
                        <button type="submit" class="btn btn-outline-success btn-sm">Agregar carrito</button>
                    </div>
                </div>
            </form>
        </div>
        @endforeach
    </div>
</div>
@endsection

