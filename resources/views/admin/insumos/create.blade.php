@extends('admin.template.backend')

@section('title', 'Agregar insumos')

@section('content')

    
   {!! Form::open(['route' => 'admin.insumos.store', 'method' => 'POST']) !!}    

     <div class="form-group">
        	{!! Form::label('nombre_insumo', 'Nombre de insumo') !!}
        	{!! Form::text('nombre_insumo', null, ['class' => 'form-control', 'placeholder' => 'Nombre de insumo', 'required']) !!}
     </div>   

     <div class="form-group">
     	{!! Form::label('id_medida', 'Selecciona una medida') !!}
     	{!! Form::select('id_medida', $medidas, null, ['class' => 'form-control select-medida', 'placeholder' => 'Selecciona una medida', 'required']) !!}
     </div>

     <div class="form-group">
     	{!! Form::submit('Guardar insumo', ["class" => 'btn btn-primary']) !!}
     </div>

   {!! Form::close() !!}

@stop

@section('js')

<script>
	$('.select-medida').chosen({

	});
</script>

@stop