@extends('admin.template.backend')

@section('title', 'Editar video')

@section('content')

    
   {{ Form::open(['route' => ['videos.update', $video->id], 'method' => 'PUT']) }}    

     <div class="form-group">
        	{{ Form::label('nombre_video', 'Nombre de video') }}
        	{{ Form::text('nombre_video', $video->nombre_video, ['class' => 'form-control', 'placeholder' => 'Nombre de video', 'required']) }}
     </div>   

     <div class="form-group">
            {{ Form::label('url_video', 'URL de video') }}
            {{ Form::text('url_video', $video->url_video, ['class' => 'form-control', 'placeholder' => 'URL de video', 'required']) }}
     </div>  

     <div class="form-group">
     	{{ Form::label('id_categoria', 'Selecciona una categoria') }}
     	{{ Form::select('id_categoria', $categorias, $video->categoria->id, ['class' => 'form-control select-medida', 'placeholder' => 'Selecciona una categoria', 'required']) }}
     </div>

     <div class="form-group">
     	{{ Form::submit('Guardar cambios', ["class" => 'btn btn-primary']) }}
     </div>

   {{ Form::close() }}

@stop

@section('js')

<script>
	$('.select-medida').chosen({

	});
</script>

@stop