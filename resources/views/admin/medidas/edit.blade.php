@extends('admin.template.backend')

@section('title', 'Editar medida ' . $medida->nombre_medida) 

@section('content')
    
     {!! Form::open(['route' => ['admin.medidas.update', $medida->id], 'method' => 'PUT']) !!}

     <div class="form-group">

       {!! Form::label('nombre_medida', 'Nombre de medida') !!}
       {!! Form::text('nombre_medida', $medida->nombre_medida, ['class' => 'form-control', 'placeholder' => 'Nombre de la medida', 'required']) !!}
     	
     </div>

     <div class="form-group">
     	{!! Form::submit('GUARDAR CAMBIOS', ['class' => 'btn btn-primary']) !!}
     </div>

     {!! form::close() !!}

@stop