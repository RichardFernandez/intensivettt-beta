@extends('admin.template.backend')
@section('title', "Lista de videos")

@section('content')

<a href="{{ route('admin.videos.create') }}" class="btn btn-info">Registrar nuevo video</a>

<!--Buscador de videos-->
{!! Form::open(['route' => 'admin.videos.index','method' => 'GET', 'class' => 'form-inline pull-right']) !!}
   <div class="input-group">
      {!! Form::text('nombre_insumo', null, ['class' => 'form-control mr-sm-2', 'placeholder' => 'Buscar video....']) !!}
      <button class="btn btn-info my-2 my-sm-0" type="submit">BUSCAR</button>
   	
   </div>
{!! Form::close() !!}
<hr>

     <!-- A partir de aqui empieza el despligue de los datos capturados -->

     <table class="table thead-inverse table-striped">
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
                 <td> <a href="{{ route('admin.videos.edit', $video->id) }}" class="btn btn-warning"><span><i class="fa fa-pencil"></i></span></a></td>
                 <td><a href="{{ route('admin.videos.destroy', $video->id) }}" onclick="return confirm('Seguro que deseas eliminar este registro?')" class="btn btn-danger"><span><i class="fa fa-times"></i></span></a></td>
             </tr>
         @endforeach 
         </tbody>
     </table>
     {!! $videos->render() !!}

@stop