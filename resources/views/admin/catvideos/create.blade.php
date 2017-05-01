@extends('admin.template.backend')

@section('title', 'Crear Categoria')

@section('content')

 @if(count($errors) > 0)
    
    <div>
    	<ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
    	</ul>
    </div>

 @endif

 {!! Form::open(['route' => 'admin.catvideos.store', 'method' => 'POST']) !!}
     <div class="form-group">

        {!! Form::label('nombre_categoria', 'Nombre de la categoría') !!}
        {!! Form::text('nombre_categoria', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoría', 'required']) !!}
     	
     </div>

     <div class="form-group">

        {!! Form::submit('GUARDAR CATEGORíA', ['class' => 'btn btn-primary']) !!}
     	
     </div>
 {!! Form::close() !!}

@stop