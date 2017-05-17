@extends('admin.template.backend')

@section('tittle', 'Alta de administradores')

@section('content')

   {{-- Aqui inicia el formulario de captura para los nuevos administradores --}}

  {!! Form::open(['route' => 'admin.admins.store', 'method' => 'POST', 'files' => true]) !!}

    <div class="form-group">
    	{!! Form::label('nombre_admin', "Nombre/s") !!}
    	{!! Form::text('nombre_admin', null, ['class' => 'form-control', 'placeholder' => 'Nombre del administrador', 'required']) !!}
    </div>

    <div class="form-group">
    	{!! Form::label('apellidos', 'Apellidos') !!}
    	{!! Form::text('apellidos, null', ['class' => 'form-control', 'placeholder' => 'Apellidos', 'required']) !!}
    </div>

    <div class="form-group">
    	{!! Form::label('usuario', 'Nombre de usuario') !!}
    	{!! Form::text('usuario', null, ['class' => 'form-control', 'placeholder' => 'Nombre de usuario', 'required']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('password', 'Contraseña') !!}
    	{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '**********', 'required']) !!}
    </div>

    <div class="form-group">
    	{!! Form::label('email', 'Correo electronico') !!}
    	{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Correo electronico', 'required']) !!}
    </div>

    <div class="form-group">
    	{!! Form::label('telefono', 'Teléfono') !!}
    	{!! Form::tel('telefono', null, ['class' => 'form-control', 'placeholder' => 'Teléfono', 'required']) !!}
    </div>

    <div class="form-group">
    	{!! Form::label('estado', 'Estado') !!}
    	{!! Form::select('estado', null, ['class' => 'form-control', 'placeholder' => 'Selecciona tu estado', 'required']) !!}
    </div>

    <div class="form-group">
    	{!! Form::label('ciudad', 'Ciudad') !!}
    	{!! Form::text('ciudad', null, ['class' => 'form-control', 'placeholder' => 'Nombre de tu ciudad', 'required']) !!}
    </div>

    <div class="form-group">
    	{!!  Form::label('imagen', 'Selcciona una foto') !!}
    	{!! Form::files('imagen') !!}
    </div>


   

  {!! Form::close() !!}

@stop