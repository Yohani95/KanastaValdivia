@extends('layouts.app')

@section('template_title')
    {{ $sale->name ?? 'Show Sale' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Tienda</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sales.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $sale->name }}
                        </div>
                        <div class="form-group">
                            <strong>Direcction:</strong>
                            {{ $sale->direcction }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $sale->phone }}
                            <strong>Phone:</strong>
                            {{ $sale->phone }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
