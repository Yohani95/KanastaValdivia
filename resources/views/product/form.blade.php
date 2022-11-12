<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('categories_id') }}
            {{ Form::select('categories_id',$categories ,$product->categories_id, ['class' => 'form-control' . ($errors->has('categories_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccionar Categoria']) }}
            {!! $errors->first('categories_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $product->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $product->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bar_code') }}
            {{ Form::text('bar_code', $product->bar_code, ['class' => 'form-control' . ($errors->has('bar_code') ? ' is-invalid' : ''), 'placeholder' => 'Bar Code']) }}
            {!! $errors->first('bar_code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('price') }}
            {{ Form::text('price', $product->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('stock') }}
            {{ Form::text('stock', $product->stock, ['class' => 'form-control' . ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
            {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Sales') }}
            {{ Form::select('id_Sales',$sales, $product->id_Sales, ['class' => 'form-control' . ($errors->has('id_Sales') ? ' is-invalid' : ''), 'placeholder' => 'Id Sales']) }}
            {!! $errors->first('id_Sales', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_voucher') }}
            {{ Form::text('id_voucher', $product->id_voucher, ['class' => 'form-control' . ($errors->has('id_voucher') ? ' is-invalid' : ''), 'placeholder' => 'Id Voucher']) }}
            {!! $errors->first('id_voucher', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ruta_image') }}
            {{ Form::text('ruta_image', $product->ruta_image, ['class' => 'form-control' . ($errors->has('ruta_image') ? ' is-invalid' : ''), 'placeholder' => 'Ruta Image']) }}
            {!! $errors->first('ruta_image', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>