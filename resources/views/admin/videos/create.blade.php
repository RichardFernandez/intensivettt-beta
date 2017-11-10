@extends('admin.template.backend')

@section('title', 'Agregar video')

@section('content')

    
   {{ Form::open(['route' => 'videos.store', 'method' => 'POST']) }}   

     <div class="form-group">
        	{{ Form::label('nombre_video', 'Nombre del video') }}
        	{{ Form::text('nombre_video', null, ['class' => 'form-control', 'placeholder' => 'Nombre del video', 'required']) }}
     </div>   

     <div class="form-group">
            {{ Form::label('url_video', 'URL del video') }}
            {{ Form::text('url_video', null, ['class' => 'form-control', 'placeholder' => 'URL del video', 'required']) }}
     </div> 

     <div class="form-group">
     	{{ Form::label('id_categoria', 'Selecciona una categoria') }}
     	{{ Form::select('id_categoria', $categorias, null, ['class' => 'form-control select-categoria', 'placeholder' => 'Selecciona una categoria', 'required']) }}
     </div>

     <div class="form-group">
     	{{ Form::submit('Guardar video', ["class" => 'btn btn-primary']) }}
     </div>

   {{ Form::close() }}

@stop

@section('js')

<script>
	$('.select-categoria').chosen({

	});
</script>

@stop