@extends('admin.template.backend')

@section('title', 'Lista de Insumos') 

@section('content')
     
    <a href="{{route('admin.insumos.create')}}" class="btn btn-info">Registrar nuevo insumo</a>

    <!--Buscador de insumos-->

        {!! Form::open(['route' => 'admin.insumos.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}

           <div class="input-group">
               
               {!! Form::text('nombre_insumo', null, ['class' => 'form-control', 'placeholder' => 'Buscar insumo....', 'aria-describedby' => 'search']) !!}
               <span class="input-group-addon" id="search" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
           </div>

        {!! Form::close() !!}
        <hr>

     <!-- A partir de aqui empieza el despligue de los datos capturados -->

     <table class="table table-striped">
         <caption>Lista de Insumos registrados</caption>
         <thead>
             <tr>
                 <th>No.</th>
                 <th>Nombre de insumo</th>
                 <th>Tipo de medida</th>
                 <th>Editar</th>
                 <th>Eliminar</th>
             </tr>
         </thead>
         <tbody>
         @foreach($insumos as $insumo)
             <tr>
                 <td>{{ $insumo->id }}</td>
                 <td>{{ $insumo->nombre_insumo }}</td>
                 <td>{{ $insumo->id_medida }}</td>
                 <td> <a href="{{ route('admin.insumos.edit', $insumo->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a></td>
                 <td><a href="{{ route('admin.insumos.destroy', $insumo->id) }}" onclick="return confirm('Seguro que deseas eliminar este registro?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a></td>
             </tr>
         @endforeach 
         </tbody>
     </table>
     {!! $insumos->render() !!}
@stop