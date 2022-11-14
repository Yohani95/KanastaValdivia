@extends('layouts.app')

@section('template_title')
    Detail
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalle') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('details.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Voucher</th>
										<th>Nombre Producto</th>
										<th>Quantity</th>
										<th>Precio Unitario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($details as $detail)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detail->id_voucher }}</td>
											<td>{{ $detail->name_product }}</td>
											<td>{{ $detail->quantity }}</td>
											<td>{{ $detail->unit_price }}</td>

                                            <td>
                                                <form action="{{ route('details.destroy',$detail->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('details.show',$detail->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('details.edit',$detail->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $details->links() !!}
            </div>
        </div>
    </div>
@endsection
