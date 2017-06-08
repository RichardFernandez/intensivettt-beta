@extends('admin.template.backend')

@section('title', 'Lista de Insumos') 

@section('content')
     
    <a href="{{route('admin.insumos.create')}}" class="btn btn-info">Registrar nuevo insumo</a>

    <!--Buscador de insumos-->

        {!! Form::open(['route' => 'admin.insumos.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) !!}

           <div class="input-group">
               
               {!! Form::text('nombre_insumo', null, ['class' => 'form-control mr-sm-2', 'placeholder' => 'Buscar insumo....']) !!}
               <button class="btn btn-info my-2 my-sm-0" type="submit">BUSCAR</button>
           </div>

        {!! Form::close() !!}
        <hr>

     <!-- A partir de aqui empieza el despligue de los datos capturados -->

     <table class="table thead-inverse table-striped">
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
                 <td>{{ $insumo->medida->nombre_medida }}</td>
                 <td> <a href="{{ route('admin.insumos.edit', $insumo->id) }}" class="btn btn-warning"><span><i class="fa fa-pencil"></i></span></a></td>
                 <td><a href="{{ route('admin.insumos.destroy', $insumo->id) }}" onclick="return confirm('Seguro que deseas eliminar este registro?')" class="btn btn-danger"><span><i class="fa fa-times"></i></span></a></td>
             </tr>
         @endforeach 
         </tbody>
     </table>
     {!! $insumos->render() !!}
@stop