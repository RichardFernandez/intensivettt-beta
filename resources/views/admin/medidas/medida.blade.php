@extends('admin.template.backend')

@section('title', 'Medidas') 

@section('content')
    
    @if(count($errors) > 0)

    <div class="alert alert-danger" role="alert">
        <ul>
        
           @foreach($errors->all() as $error)
             <li>{{ $error }}</li>
           @endforeach
        </ul>
    </div>
    @endif

     {!! Form::open(['route' => 'admin.medidas.store', 'method' => 'POST']) !!}

     <div class="form-group">

       {!! Form::label('nombre_medida', 'Nombre de medida') !!}
       {!! Form::text('nombre_medida', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la medida', 'required']) !!}
     	
     </div>

     <div class="form-group">
     	{!! Form::submit('GUARDAR MEDIDA', ['class' => 'btn btn-primary']) !!}
     </div>

     {!! form::close() !!}

@stop