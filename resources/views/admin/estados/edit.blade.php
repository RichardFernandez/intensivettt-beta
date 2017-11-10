@extends('admin.template.backend')

@section('title', 'Editar estado ' . $estado->nombre_estado) 

@section('content')
    
     {{ Form::open(['route' => ['estados.update', $estado->id], 'method' => 'PUT']) }}

     <div class="form-group">

       {{ Form::label('nombre_estado', 'Nombre de medida') }}
       {{ Form::text('nombre_estado', $estado->nombre_estado, ['class' => 'form-control', 'placeholder' => 'Nombre del estado', 'required']) }}
      
     </div>

     <div class="form-group">
      {{ Form::submit('GUARDAR CAMBIOS', ['class' => 'btn btn-primary']) }}
     </div>

     {{ form::close() }}

@stop