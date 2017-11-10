@extends('admin.template.backend')

@section('title', 'Editar categoria ' . $categoria->nombre_categoria) 

@section('content')
    
     {{ Form::open(['route' => ['catvideos.update', $categoria->id], 'method' => 'PUT']) }}

     <div class="form-group">

       {{ Form::label('nombre_categoria', 'Nombre de categoria') }}
       {{ Form::text('nombre_categoria', $categoria->nombre_categoria, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoria', 'required']) }}
     	
     </div>

     <div class="form-group">
     	{{ Form::submit('GUARDAR CAMBIOS', ['class' => 'btn btn-primary']) }}
     </div>

     {{ form::close() }}

@stop