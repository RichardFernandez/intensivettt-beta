@extends('admin.template.backend')

@section('title', 'Lista de Categorias') 

@section('content')
     
    <a href="{{route('admin.catvideos.create')}}" class="btn btn-info">Registrar nueva categoria</a>

    <!--Buscador de categorias-->

        {!! Form::open(['route' => 'admin.catvideos.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) !!}

           <div class="input-group">
               
               {!! Form::text('nombre_categoria', null, ['class' => 'form-control mr-sm-2', 'placeholder' => 'Buscar Categoria....']) !!}
               <button class="btn btn-info my-2 my-sm-0" type="submit">BUSCAR</button>
           </div>

        {!! Form::close() !!}
        <hr>

     <!-- A partir de aqui empieza el despligue de los datos capturados -->

     <table class="table thead-inverse table-striped">
         <thead>
             <tr>
                 <th>No.</th>
                 <th>Nombre de categoria</th>
                 <th>Editar</th>
                 <th>Eliminar</th>
             </tr>
         </thead>
         <tbody>
         @foreach($categorias as $categoria)
             <tr>
                 <td>{{ $categoria->id }}</td>
                 <td>{{ $categoria->nombre_categoria }}</td>
                 <td> <a href="{{ route('admin.catvideos.edit', $categoria->id) }}" class="btn btn-warning"><span><i class="fa fa-pencil"></i></span></a></td>
                 <td><a href="{{ route('admin.catvideos.destroy', $categoria->id) }}" onclick="return confirm('Seguro que deseas eliminar este registro?')" class="btn btn-danger"><span><i class="fa fa-times"></i></span></a></td>
             </tr>
         @endforeach 
         </tbody>
     </table>
     {!! $categorias->render() !!}
@stop