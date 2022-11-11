@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? 'Show Product' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categories Id:</strong>
                            {{ $product->categories_id }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $product->name }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $product->description }}
                        </div>
                        <div class="form-group">
                            <strong>Bar Code:</strong>
                            {{ $product->bar_code }}
                        </div>
                        <div class="form-group">
                            <strong>Price:</strong>
                            {{ $product->price }}
                        </div>
                        <div class="form-group">
                            <strong>Stock:</strong>
                            {{ $product->stock }}
                        </div>
                        <div class="form-group">
                            <strong>Id Sales:</strong>
                            {{ $product->id_Sales }}
                        </div>
                        <div class="form-group">
                            <strong>Id Voucher:</strong>
                            {{ $product->id_voucher }}
                        </div>
                        <div class="form-group">
                            <strong>Ruta Image:</strong>
                            {{ $product->ruta_image }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
