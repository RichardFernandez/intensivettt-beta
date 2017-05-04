@extends('admin.template.backend')

@section('title', 'Editar insumo')

@section('content')

    
   {!! Form::open(['route' => ['admin.insumos.update', $insumo->id], 'method' => 'PUT']) !!}    

     <div class="form-group">
        	{!! Form::label('nombre_insumo', 'Nombre de insumo') !!}
        	{!! Form::text('nombre_insumo', $insumo->nombre_insumo, ['class' => 'form-control', 'placeholder' => 'Nombre de insumo', 'required']) !!}
     </div>   

     <div class="form-group">
     	{!! Form::label('id_medida', 'Selecciona una medida') !!}
     	{!! Form::select('id_medida', $medidas, $insumo->medida->id, ['class' => 'form-control select-medida', 'placeholder' => 'Selecciona una medida', 'required']) !!}
     </div>

     <div class="form-group">
     	{!! Form::submit('Guardar cambios', ["class" => 'btn btn-primary']) !!}
     </div>

   {!! Form::close() !!}

@stop

@section('js')

<script>
	$('.select-medida').chosen({

	});
</script>

@stop