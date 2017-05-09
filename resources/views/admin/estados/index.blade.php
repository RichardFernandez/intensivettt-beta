@extends('admin.template.backend')

@section('title', 'Lista de Estados') 

@section('content')
     
    <a href="{{route('admin.estados.create')}}" class="btn btn-info">Registrar nuevo estado</a>

    <!--Buscador de estados-->

        {!! Form::open(['route' => 'admin.estados.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}

           <div class="input-group">
               
               {!! Form::text('nombre_estado', null, ['class' => 'form-control', 'placeholder' => 'Buscar Estado...', 'aria-describedby' => 'search']) !!}
               <span class="input-group-addon" id="search" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
           </div>

        {!! Form::close() !!}
        <hr>

     <!-- A partir de aqui empieza el despligue de los datos capturados -->

     <table class="table table-striped">
         <caption>Lista de estados registrados</caption>
         <thead>
             <tr>
                 <th>No.</th>
                 <th>Nombre de estado</th>
                 <th>Editar</th>
                 <th>Eliminar</th>
             </tr>
         </thead>
         <tbody>
         @foreach($estados as $estado)
             <tr>
                 <td>{{ $estado->id }}</td>
                 <td>{{ $estado->nombre_estado }}</td>
                 <td> <a href="{{ route('admin.estados.edit', $estado->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a></td>
                 <td><a href="{{ route('admin.estados.destroy', $estado->id) }}" onclick="return confirm('Seguro que deseas eliminar este registro?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a></td>
             </tr>
         @endforeach 
         </tbody>
     </table>
     {!! $estados->render() !!}
@stop