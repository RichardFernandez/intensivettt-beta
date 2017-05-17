@extends('admin.template.backend')
@section('title', "Lista de suplementos")

@section('content')

<a href="{{ route('admin.suplementos.create') }}" class="btn btn-info">Registrar nuevo suplemento</a>

<!--Buscador de suplementos-->
{!! Form::open(['route' => 'admin.suplementos.index','method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
   <div class="input-group">
      {!! Form::text('nombre_suplemento', null, ['class' => 'form-control', 'placeholder' => 'Buscar suplemento....', 'aria-describedby' => 'search']) !!}
      <span class="input-group-addon" id="search" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
   	
   </div>
{!! Form::close() !!}
<hr>

     <!-- A partir de aqui empieza el despligue de los datos capturados -->

     <table class="table table-striped">
         <caption>Lista de Suplementos registrados</caption>
         <thead>
             <tr>
                 <th>No.</th>
                 <th>Nombre del Suplemento</th>
                 <th>Tipo de suplemento</th>
                 <th>Presentación</th>
                 <th>Marca</th>
                 <th>Imagen del producto</th>
                 <th>Editar</th>
                 <th>Eliminar</th>
             </tr>
         </thead>
         <tbody>
         @foreach($suplementos as $suplemento)
             <tr>
                 <td>{{ $suplemento->id }}</td>
                 <td>{{ $suplemento->nombre_suplemento }}</td>
                 <td>{{ $suplemento->tipo_suplemento }}</td>  
                 <td>{{ $suplemento->presentacion }}</td>
                 <td>{{ $suplemento->marca->nombre_marca }}</td> 
                 <td><img src="{{ '/images/suplementos/'.$suplemento->imagen }}" width="50"></td>
                 <td> <a href="{{ route('admin.suplementos.edit', $suplemento->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a></td>
                 <td><a href="{{ route('admin.suplementos.destroy', $suplemento->id) }}" onclick="return confirm('Seguro que deseas eliminar este registro?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a></td>
             </tr>
         @endforeach 
         </tbody>
     </table>
     {!! $suplementos->render() !!}

@stop