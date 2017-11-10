@extends('admin.template.backend')
@section('title', 'Captura de frases')

@section('content')
 
   <div class="form-frases-container">

      {{ Form::open(['route' => 'frases.store', 'method' => 'POST']) }}

        <div class="row">
        	<div class="col-6">
        		<div class="for-group">
        			{{ Form::label('frase', 'Frase') }}
        			{{ Form::textarea('frase', null, ['class' => 'form-control', 'placeholder' => 'Captura la frase', 'required']) }}
        		</div>
        	</div>
        	<div class="col-6">
        		<div class="col-6">
        			<div class="form-group">
        				{{ Form::label('autor', 'Autor') }}
        				{{ Form::text('autor', null, ['class' => 'form-control', 'placeholder' => 'Autor']) }}
        			</div>
        			<div class="form-group">
        				{{ Form::submit('Guardar frase', ['class' => 'btn btn-primary']) }}
        			</div>

        		</div>
        	</div>

        	
        </div>

      {{ Form::close() }}
   	
   </div>

@endsection