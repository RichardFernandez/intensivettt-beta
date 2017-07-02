@extends('admin.template.backend')
@section('title', 'Lista de frases')

@section('content')

  <div class="frases-container">
   
   <div class="boton-container">
   	 <a href="{{ route('admin.frases.create') }}" class="btn btn-info">Registrar nueva frase</a>
   </div>

    <div class="table-container">
    	<table class="table table-striped">
    		<thead class="thead-inverse">
    			<tr>
    				<th>No. registro</th>
    				<th>Frase</th>
    				<th>Autor</th>
    				<th>Editar</th>
    				<th>Eliminar</th>
    			</tr>
    		</thead>
    		<tbody>
    		    @foreach($frases as $frase)
    			<tr>
    				<td>{{ $frase->id }}</td>
    				<td>{{ $frase->frase }}</td>
    				<td>{{ $frase->autor }}</td>
    				<td><a href="{{ route('admin.frases.edit', $frase->id) }}" class="btn btn-warning"><span><i class="fa fa-pencil"></i></span></a></td>
    				<td><a href="{{ route('admin.frases.destroy', $frase->id) }}" onclick="return confirm('Seguro que deseas eliminar este registro?')" class="btn btn-danger"><span><i class="fa fa-times"></i></span></a></td>
    			</tr>
    			
    			@endforeach
    		</tbody>
    	</table>
    	{{ $frases->links() }}
    </div>
  	
  </div>

@endsection