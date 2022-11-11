@extends('layouts.app')

@section('template_title')
    {{ $voucher->name ?? 'Show Voucher' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Voucher</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('vouchers.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $voucher->total }}
                        </div>
                        <div class="form-group">
                            <strong>Id Rut:</strong>
                            {{ $voucher->id_rut }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
