<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', $voucher->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_rut') }}
            {{ Form::text('id_rut', $voucher->id_rut, ['class' => 'form-control' . ($errors->has('id_rut') ? ' is-invalid' : ''), 'placeholder' => 'Id Rut']) }}
            {!! $errors->first('id_rut', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>