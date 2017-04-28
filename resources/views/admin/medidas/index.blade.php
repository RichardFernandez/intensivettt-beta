@extends('admin.template.backend')

@section('title', 'Lista de Medidas') 

@section('content')
     
    <a href="{{route('admin.medidas.create')}}" class="btn btn-info">Registrar nueva medida</a>

     <!-- A partir de aqui empieza el despligue de los datos capturados -->

     <table class="table table-striped">
         <caption>Lista de medidas registradas</caption>
         <thead>
             <tr>
                 <th>No.</th>
                 <th>Nombre de medida</th>
                 <th>Editar</th>
                 <th>Eliminar</th>
             </tr>
         </thead>
         <tbody>
         @foreach($medidas as $medida)
             <tr>
                 <td>{{ $medida->id }}</td>
                 <td>{{ $medida->nombre_medida }}</td>
                 <td> <a href="" class="btn btn-warning">Editar</a></td>
                 <td><a href="" class="btn btn-danger">X</a></td>
             </tr>
         @endforeach 
         </tbody>
     </table>
     {!! $medidas->render() !!}
@stop