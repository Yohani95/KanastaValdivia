@extends('welcome')

@section('content')
@include('layouts.barClients')
@include('carrusel.carrusel')
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
                 <a href="{{asset($product->ruta_image)}}" class="btn btn-primary">Ver Producto</a>
                 <br>
                 <br>
                 <a href="{{asset($product->ruta_image)}}" class="btn btn-primary">Agregar al carro</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection