@extends('admin.template.backend')

@section('tittle', 'Alta de trabajadores')

@section('content')

 <div class="empleados-form-container">

       {{-- Aqui inicia el formulario de captura para los nuevos empleados --}}

      {{ Form::open(['route' => 'admin.empleados.store', 'method' => 'POST', 'files' => true]) }}

        <div class="form-group row">
        	{{ Form::label('nombre_empleado', "Nombre/s*", ['class' => 'col-2 col-form-label']) }}
            <div class="col-7">
                {{ Form::text('nombre_empleado', null, ['class' => 'form-control', 'placeholder' => 'Nombre del trabajador', 'required']) }}
            </div>
        </div>

        <div class="form-group row">
        	{{ Form::label('apellidos', 'Apellidos*', ['class' => 'col-2 col-form-label']) }}
            <div class="col-7">
                {{ Form::text('apellidos', null, ['class' => 'form-control', 'placeholder' => 'Apellidos', 'required']) }}
            </div>
        	
        </div>
        
        <div class="form-group row">
            {{ Form::label('email', 'Correo electrónico*', ['class' => 'col-2 col-form-label']) }}
            <div class="col-7">
               {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Correo electrónico', 'required']) }} 
            </div>   
        </div>
        
        <div class="form-grou row">
        	{{ Form::label('password', 'Contraseña*', ['class' => 'col-2 col-form-label']) }}
            <div class="col-7">
        	    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => '**********', 'required']) }}
            </div>
        </div>

        <div class="form-group row">
            {{ Form::label('rol', 'Permisos*', ['class' => 'col-2 col-form-label']) }}
            <div class="col-7">
               {{ Form::select('rol', ['administrador' => 'Administrador', 'editor' => 'Editor'], null, ['class' => 'form-control', 'placeholder' => 'Selecciona tipo de permisos', 'required']) }} 
            </div>   
        </div>

        <div class="form-group row">
        	{{ Form::label('telefono', 'Teléfono', ['class' => 'col-2 col-form-label']) }}
            <div class="col-7">
        	   {{ Form::tel('telefono', null, ['class' => 'form-control', 'placeholder' => 'Teléfono']) }}
            </div>
        </div>

        <div class="form-group row">
            {{ Form::label('direccion', 'Dirección', ['class' => 'col-2 col-form-label']) }}
            <div class="col-7">
               {{ Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'Dirección']) }}
            </div>
        </div>

        <div class="form-group row">
            {{ Form::label('ciudad', 'Ciudad', ['class' => 'col-2 col-form-label']) }}
            <div class="col-7">
              {{ Form::text('ciudad', null, ['class' => 'form-control', 'placeholder' => 'Ciudad']) }}
            </div>  
        </div>

        <div class="form-group row">
        	{{ Form::label('estado_id', 'Estado', ['class' => 'col-2 col-form-label']) }}
            <div class="col-7">
                {{ Form::select('estado_id',$estados, null, ['class' => 'form-control', 'placeholder' => 'Selecciona el estado']) }}
            </div>
        </div>

        <div class="form-group row">
            {{  Form::label('foto_empleado', 'Selecciona una foto', ['class' => 'col-2 col-form-label']) }}
            {{ Form::file('foto_empleado') }}
        </div>

        <h4>Social</h4>
        <hr>

        <div class="form-group row">
            {{ Form::label('facebook', 'Facebook', ['class' => 'col-2 col-form-label']) }}
            <div class="col-7">
              {{ Form::text('facebook', null, ['class' => 'form-control', 'placeholder' => 'Facebook']) }}
            </div>  
        </div>

        <div class="form-group row">
            {{ Form::label('instagram', 'Instagram', ['class' => 'col-2 col-form-label']) }}
            <div class="col-7">
              {{ Form::text('instagram', null, ['class' => 'form-control', 'placeholder' => 'Instagram']) }}
            </div>  
        </div>

        <div class="form-group row">
            {{ Form::label('twitter', 'Twitter', ['class' => 'col-2 col-form-label']) }}
            <div class="col-7">
              {{ Form::text('twitter', null, ['class' => 'form-control', 'placeholder' => 'Twitter']) }}
            </div>  
        </div>

        <div class="form-group row">
            <div class="col-4 offset-7">
              {{ Form::submit('Registrar trabajador',['class' => 'btn btn-primary']) }}
            </div>  
        </div>
       

      {{ Form::close() }}
  </div>

@stop