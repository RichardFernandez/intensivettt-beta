@extends('admin.template.backend')

@section('title', 'Lista de Estados') 

@section('content')
     
    <a href="{{route('estados.create')}}" class="btn btn-info">Registrar nuevo estado</a>

    <!--Buscador de estados-->

        {!! Form::open(['route' => 'estados.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) !!}

           <div class="input-group">
               
               {!! Form::text('nombre_estado', null, ['class' => 'form-control mr-sm-2', 'placeholder' => 'Buscar Estado...']) !!}
               <button class="btn btn-info my-2 my-sm-0" type="submit">BUSCAR</button>
           </div>

        {!! Form::close() !!}
        <hr>

     <!-- A partir de aqui empieza el despligue de los datos capturados -->

     <table class="table thead-inverse table-striped">
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
                 <td> <a href="{{ route('estados.edit', $estado->id) }}" class="btn btn-warning"><span><i class="fa fa-pencil"></i></span></a></td>
                 <td><a href="{{ route('estados.destroy', $estado->id) }}" onclick="return confirm('Seguro que deseas eliminar este registro?')" class="btn btn-danger"><span><i class="fa fa-times"></i></span></a></td>
             </tr>
         @endforeach 
         </tbody>
     </table>
     {!! $estados->render() !!}
@stop