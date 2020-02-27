@extends('layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Portatiles</h3></div>
          @if (\Auth::user()->role_id === 1)
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('portatil.create') }}" class="btn btn-info" >Añadir Portatil</a>
            </div>
          </div>
          @endif
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Nombre</th>
               <th>Marca</th>
               <th>Ram</th>
               <th>T Gráfica</th>
               <th>Precio</th>
               @if (\Auth::user()->role_id === 1)
               <th>Editar</th>
               <th>Eliminar</th>
               @endif
             </thead>
             <tbody>
              @if($portatiles->count())  
              @foreach($portatiles as $portatil)  
              <tr>
                <td>{{$portatil->nombre}}</td>
                <td>{{$portatil->marca}}</td>
                <td>{{$portatil->ram}}</td>
                <td>{{$portatil->tgrafica}}</td>
                <td>{{$portatil->precio}}</td>
                @if (\Auth::user()->role_id === 1)
                <td><a class="btn btn-primary btn-xs" href="{{action('PortatilesController@edit', $portatil->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('PortatilesController@destroy', $portatil->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">

                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
                 @endif
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
    
    </div>
  </div>
</section>

@endsection