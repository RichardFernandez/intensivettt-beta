@extends('admin.template.backend')

@section('title', 'Agregar suplemento')

@section('content')

    
   {!! Form::open(['route' => 'admin.suplementos.store', 'method' => 'POST', 'files' => true]) !!}    

     <div class="form-group">
        	{!! Form::label('nombre_suplemento', 'Nombre del suplemento') !!}
        	{!! Form::text('nombre_suplemento', null, ['class' => 'form-control', 'placeholder' => 'Nombre del suplemento', 'required']) !!}
     </div>   

     <div class="form-group">
            {!! Form::label('tipo_suplemento', 'Tipo de suplemento') !!}
            {!! Form::select('tipo_suplemento', ['Proteina' => 'Proteina', 'multivitaminico' => 'Multivitaminico', 'termogenico' => 'Termogénico', 'pre-entrenamiento' => 'Pre-entrenamiento', 'l-carnitina' => 'L-Carnitina', 'glutamina' => 'Glutamina', 'creatina' => 'Creatina', 'aminoacidos' => 'Aminoacidos', 'complejo-b' => 'Complejo B', 'vitamina-c' => 'Vitamina C', 'CLA' => 'CLA', 'calcio' => 'Calcio', 'potasio' => 'Potasio'], null, ['class' => 'form-control', 'placeholder' => 'Selecciona el tipo', 'required']) !!}
     </div> 

     <div class="form-group">
            {!! Form::label('presentacion', 'Presentación') !!}
            {!! Form::select('presentacion', ['barra' => 'Barra', 'polvo' => 'Polvo', 'liquido' => 'Liquido ', 'tabletas' => 'Tabletas', 'preparado' => 'Preparado'], null, array('multiple' => true), ['class' => 'form-control', 'placeholder' => 'Selecciona la presentación', 'required']) !!}
     </div> 

     <div class="form-group">
     	{!! Form::label('id_marca', 'Selecciona la marca') !!}
     	{!! Form::select('id_marca', $marcas, null, ['class' => 'form-control select-marca', 'placeholder' => 'Selecciona la marca', 'required']) !!}
     </div>

    <div class="form-group">
        {!! Form::label('imagen', 'Imagen del producto') !!}
        {!! Form::file('imagen') !!}
    </div>
    
     <div class="form-group">
     	{!! Form::submit('Guardar suplemento', ["class" => 'btn btn-primary']) !!}
     </div>

   {!! Form::close() !!}

@stop

@section('js')

<script>
	$('.select-marca').chosen({

	});
</script>

@stop