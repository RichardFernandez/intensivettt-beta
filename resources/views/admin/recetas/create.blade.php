@extends('admin.template.backend')

@section('title', 'Crear recetas')

@section('content')

    
   {!! Form::open(['route' => 'admin.recetas.store', 'method' => 'POST', 'files' => true]) !!}    

     <div class="form-group">
        	{!! Form::label('nombre_receta', 'Nombre del platillo') !!}
        	{!! Form::text('nombre_receta', null, ['class' => 'form-control', 'placeholder' => 'Nombre del platillo', 'required']) !!}
     </div>   

     <div class="form-group">
            {!! Form::label('video', 'URL de video') !!}
            {!! Form::text('video', null, ['class' => 'form-control', 'placeholder' => 'Url de video', 'required']) !!}
     </div> 

     <div class="form-group">
     	{!! Form::label('id_insumo', 'Selecciona el insumo') !!}
     	{!! Form::select('id_insumo', $insumos, null, ['class' => 'form-control select-insumo', 'placeholder' => 'Selecciona el insumo', 'required']) !!}
     </div>

      <div class="form-group">
            {!! Form::label('cantidad', 'Cantidad') !!}
            {!! Form::text('cantidad', null, ['class' => 'form-control', 'placeholder' => 'Cantidad', 'required']) !!}
     </div> 

      <div class="form-group">
        {!! Form::label('preparacion', 'Preparación') !!}
        {!! Form::textarea('preparacion', null, ['class' => 'form-control', 'placeholder' => 'Describe el método para la preparación', 'required']) !!}
     </div>

     <div class="form-group">
        {!! Form::label('imagen', 'Imagen del platillo') !!}
        {!! Form::file('imagen') !!}
     </div>


     <div class="form-group">
     	{!! Form::submit('Guardar platillo', ["class" => 'btn btn-primary']) !!}
     </div>

   {!! Form::close() !!}

@stop

@section('js')

<script>
	$('.select-insumo').chosen({

	});
</script>

@stop