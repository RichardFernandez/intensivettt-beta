@extends('admin.template.backend')

@section('title', 'Colaboradores de Intensivettt')

@section('content')
   {{-- bucador de trabajadores --}}
   <div class="search-container">
   	   {{ Form::open(['route' => 'admin.empleados.index', 'nethod' => 'GET', 'class' => 'form-inline pull-right']) }}
            <div class="input-group">
            	{{ Form::text('nombre_empleado', null, ['class' => 'form-control mr-sm-2', 'placeholder' => 'Nombre empleado...']) }}
            	<button class="btn btn-info my-2 my-sm-0" type="submit">Buscar empleado</button>
            </div>
   	   {{ Form::close() }}
   </div>

   <div class="add-container">
   	 <a href="{{route('admin.empleados.create')}}" class="btn btn-info" title="">Registrar nuevo empleado</a>
   </div>

   <div class="table-container">
   	  <table class="table table-striped">
   	  	<thead class="thead-inverse">
   	  		<tr>
   	  			<th>No. Registro</th>
   	  			<th>Nombre Completo</th>
   	  			<th>Correo</th>
   	  			<th>Teléfono</th>
   	  			<th>Rol</th>
   	  			<th>Ver</th>
   	  			<th>Editar</th>
   	  			<th>Eliminar</th>
   	  		</tr>
   	  	</thead>
   	  	<tbody>
   	  	   @foreach($empleados as $empleado)
   	  		<tr>
   	  			<td>{{ $empleado->id }}</td>
   	  			<td>{{ $empleado->nombre_empleado }} {{$empleado->apellidos  }}</td>
   	  			<td>{{ $empleado->email }}</td>
   	  			<td>{{ $empleado->telefono }}</td>
   	  			<td>{{ $empleado->rol }}</td>
   	  			<td><a href="{{ route('admin.empleados.edit', $empleado->id) }}" class="btn btn-info"><span><i class="fa fa-id-card-o" aria-hidden="true"></i></span></a></td>
   	  			<td><a href="{{ route('admin.empleados.edit', $empleado->id) }}" class="btn btn-warning"><span><i class="fa fa-pencil"></i></span></a></td>
   	  			<td><a href="{{ route('admin.empleados.destroy', $empleado->id) }}" onclick="return confirm('Seguro que deseas eliminar a este colaborador?')" class="btn btn-danger"><span><i class="fa fa-times"></i></span></a></td>
   	  		</tr>
   	  	   @endforeach
   	  	</tbody>
   	  </table>
   	  {{ $empleados->links() }}
   </div>
  

@endsection