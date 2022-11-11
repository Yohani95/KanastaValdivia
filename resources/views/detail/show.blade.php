@extends('layouts.app')

@section('template_title')
    {{ $detail->name ?? 'Show Detail' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Detail</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('details.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Voucher:</strong>
                            {{ $detail->id_voucher }}
                        </div>
                        <div class="form-group">
                            <strong>Name Product:</strong>
                            {{ $detail->name_product }}
                        </div>
                        <div class="form-group">
                            <strong>Quantity:</strong>
                            {{ $detail->quantity }}
                        </div>
                        <div class="form-group">
                            <strong>Unit Price:</strong>
                            {{ $detail->unit_price }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
