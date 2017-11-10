@extends('admin.template.backend')
@section('title', "Lista de suplementos")

@section('content')

<a href="{{ route('suplementos.create') }}" class="btn btn-info">Registrar nuevo suplemento</a>

<!--Buscador de suplementos-->
{{ Form::open(['route' => 'suplementos.index','method' => 'GET', 'class' => 'form-inline pull-right']) }}
   <div class="input-group">
      {{ Form::text('nombre_suplemento', null, ['class' => 'form-control mr-sm-2', 'placeholder' => 'Buscar suplemento....']) }}
      <button class="btn btn-info my-2 my-sm-0" type="submit">BUSCAR</button>
   	
   </div>
{{ Form::close() }}
<hr>

     <!-- A partir de aqui empieza el despligue de los datos capturados -->

     <table class="table thead-inverse table-striped">
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
                 <td> <a href="{{ route('suplementos.edit', $suplemento->id) }}" class="btn btn-warning"><span><i class="fa fa-pencil"></i></span></a></td>
                 <td><a href="{{ route('suplementos.destroy', $suplemento->id) }}" onclick="return confirm('Seguro que deseas eliminar este registro?')" class="btn btn-danger"><span><i class="fa fa-times"></i></span></a></td>
             </tr>
         @endforeach 
         </tbody>
     </table>
     {{ $suplementos->render() }}

@stop