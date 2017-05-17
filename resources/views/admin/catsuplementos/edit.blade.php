@extends('admin.template.backend')

@section('title', 'Editar marcas de suplementos')

@section('content')

    
   {!! Form::open(['route' => ['admin.catsuplementos.update', $categoria->id], 'method' => 'PUT']) !!}    

     <div class="form-group">
        	{!! Form::label('nombre_marca', 'Nombre de la marca') !!}
        	{!! Form::text('nombre_marca', $categoria->nombre_marca, ['class' => 'form-control', 'placeholder' => 'Nombre de marca', 'required']) !!}
     </div>   

     <div class="form-group">
            {!! Form::label('imagen', 'Imagen') !!}
            {!! Form::file('imagen') !!}
     </div>  


     <div class="form-group">
     	{!! Form::submit('Guardar cambios', ["class" => 'btn btn-primary']) !!}
     </div>

   {!! Form::close() !!}

@stop
