@extends('admin.template.backend')

@section('title', 'Editar insumo')

@section('content')

  <div class="form-frases-edit-container">

     {{ Form::open(['route' => ['frases.update', $frase->id], 'method' => 'PUT']) }}

       <div class="row">
       	<div class="col-6">
       		<div class="for-group">
       			{{ Form::label('frase', 'Frase') }}
       			{{ Form::textarea('frase', $frase->frase, ['class' => 'form-control', 'placeholder' => 'Captura la frase', 'required']) }}
       		</div>
       	</div>
       	<div class="col-6">
       		<div class="col-6">
       			<div class="form-group">
       				{{ Form::label('autor', 'Autor') }}
       				{{ Form::text('autor', $frase->autor, ['class' => 'form-control', 'placeholder' => 'Autor']) }}
       			</div>
       			<div class="form-group">
       				{{ Form::submit('Guardar cambios', ['class' => 'btn btn-primary']) }}
       			</div>

       		</div>
       	</div>

       	
       </div>

     {{ Form::close() }}
  	
  </div>


@endsection