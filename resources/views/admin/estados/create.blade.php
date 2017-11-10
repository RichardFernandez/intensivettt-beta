@extends('admin.template.backend')

@section('title', 'Estado') 

@section('content')

     {{ Form::open(['route' => 'estados.store', 'method' => 'POST']) }}

     <div class="form-group">

       {{ Form::label('nombre_estado', 'Nombre de estado') }}
       {{ Form::text('nombre_estado', null, ['class' => 'form-control', 'placeholder' => 'Nombre del estado', 'required']) }}
     	
     </div>

     <div class="form-group">
     	{{ Form::submit('GUARDAR ESTADO', ['class' => 'btn btn-primary']) }}
     </div>

     {{ form::close() }}

@stop