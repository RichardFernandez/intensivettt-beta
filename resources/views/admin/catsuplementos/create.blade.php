@extends('admin.template.backend')

@section('title', 'Agregar marca')

@section('content')

    
   {!! Form::open(['route' => 'admin.catsuplementos.store', 'method' => 'POST', 'files' => true]) !!}    

     <div class="form-group">
        	{!! Form::label('nombre_marca', 'Nombre de marca') !!}
        	{!! Form::text('nombre_marca', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la marca', 'required']) !!}
     </div>   

     <div class="form-group">
     	{!! Form::label('imagen', 'Logo de la marca') !!}
     	{!! Form::file('imagen') !!}
     </div>

     <div class="form-group">
     	{!! Form::submit('Guardar marca', ["class" => 'btn btn-primary']) !!}
     </div>

   {!! Form::close() !!}

@stop
