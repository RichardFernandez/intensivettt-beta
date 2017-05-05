@extends('admin.template.backend')
@section('title', "Lista de videos")

@section('content')

<a href="{{ route('admin.videos.create') }}" class="btn btn-info">Registrar nuevo video</a>

<!--Buscador de videos-->
{!! Form::open(['route' => 'admin.videos.index','method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
   <div class="input-group">
      {!! Form::text('nombre_insumo', null, ['class' => 'form-control', 'placeholder' => 'Buscar video....', 'aria-describedby' => 'search']) !!}
      <span class="input-group-addon" id="search" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
   	
   </div>
{!! Form::close() !!}
<hr>

     <!-- A partir de aqui empieza el despligue de los datos capturados -->

     <table class="table table-striped">
         <caption>Lista de Videos registrados</caption>
         <thead>
             <tr>
                 <th>No.</th>
                 <th>Nombre del video</th>
                 <th>URL del video</th>
                 <th>Categoria</th>
                 <th>Editar</th>
                 <th>Eliminar</th>
             </tr>
         </thead>
         <tbody>
         @foreach($videos as $video)
             <tr>
                 <td>{{ $video->id }}</td>
                 <td>{{ $video->nombre_video }}</td>
                 <td>{{ $video->url_video }}</td>
                 <td>{{ $video->categoria->nombre_categoria }}</td>
                 <td> <a href="{{ route('admin.videos.edit', $video->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a></td>
                 <td><a href="{{ route('admin.videos.destroy', $video->id) }}" onclick="return confirm('Seguro que deseas eliminar este registro?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a></td>
             </tr>
         @endforeach 
         </tbody>
     </table>
     {!! $videos->render() !!}

@stop