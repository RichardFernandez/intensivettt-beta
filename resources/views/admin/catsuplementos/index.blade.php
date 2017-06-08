@extends('admin.template.backend')

@section('title', 'Lista de categorias de suplementos') 

@section('content')
     
    <a href="{{route('admin.catsuplementos.create')}}" class="btn btn-info">Registrar nueva marca</a>

     <!--Buscador de categorias-->

        {!! Form::open(['route' => 'admin.catsuplementos.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) !!}

           <div class="input-group">
               
               {!! Form::text('nombre_marca', null, ['class' => 'form-control mr-sm-2', 'placeholder' => 'Buscar Categoria....']) !!}
               <button class="btn btn-info my-2 my-sm-0" type="submit">BUSCAR</button>
           </div>

        {!! Form::close() !!}
        <hr>

     <!-- A partir de aqui empieza el despligue de los datos capturados -->

     <table class="table thead-inverse table-striped">
         <thead>
             <tr>
                 <th>No.</th>
                 <th>Nombre de marca</th>
                 <th>Logo</th>
                 <th>Editar</th>
                 <th>Eliminar</th>
             </tr>
         </thead>
         <tbody>
         @foreach($categorias as $categoria)
             <tr>
                 <td>{{ $categoria->id }}</td>
                 <td>{{ $categoria->nombre_marca }}</td>
                 <td><img src="{{ '/images/catsuplementos/'.$categoria->imagen }}" width="50"></td>
                 <td> <a href="{{ route('admin.catsuplementos.edit', $categoria->id) }}" class="btn btn-warning"><span ><i class="fa fa-pencil"></i></span></a></td>
                 <td><a href="{{ route('admin.catsuplementos.destroy', $categoria->id) }}" onclick="return confirm('Seguro que deseas eliminar este registro?')" class="btn btn-danger"><span><i class="fa fa-times"></i></span></a></td>
             </tr>
         @endforeach 
         </tbody>
     </table>
     {!! $categorias->render() !!}
@stop