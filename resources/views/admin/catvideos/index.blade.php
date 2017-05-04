@extends('admin.template.backend')

@section('title', 'Lista de Categorias') 

@section('content')
     
    <a href="{{route('admin.catvideos.create')}}" class="btn btn-info">Registrar nueva categoria</a>

    <!--Buscador de categorias-->

        {!! Form::open(['route' => 'admin.catvideos.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}

           <div class="input-group">
               
               {!! Form::text('nombre_categoria', null, ['class' => 'form-control', 'placeholder' => 'Buscar Categoria....', 'aria-describedby' => 'search']) !!}
               <span class="input-group-addon" id="search" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
           </div>

        {!! Form::close() !!}
        <hr>

     <!-- A partir de aqui empieza el despligue de los datos capturados -->

     <table class="table table-striped">
         <caption>Lista de categorias registradas</caption>
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
                 <td> <a href="{{ route('admin.catvideos.edit', $categoria->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span></a></td>
                 <td><a href="{{ route('admin.catvideos.destroy', $categoria->id) }}" onclick="return confirm('Seguro que deseas eliminar este registro?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a></td>
             </tr>
         @endforeach 
         </tbody>
     </table>
     {!! $categorias->render() !!}
@stop