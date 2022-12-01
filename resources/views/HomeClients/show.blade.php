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
                </p>
                 <a href="{{asset($product->ruta_image)}}" class="btn btn-primary">Ver Producto</a>
                 <a href="{{asset($product->ruta_image)}}" class="btn btn-primary">Agregar al carro</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

