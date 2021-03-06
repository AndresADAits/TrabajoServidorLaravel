@extends('layout')
@section('content')
<div class="row">
    <section class="content">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="pull-left">
                        <h3>Lista Moviles</h3>
                    </div>
                    @if (\Auth::user()->role_id === 1)
                    <div class="pull-right">
                        <div class="btn-group">
                            <a href="{{ route('movil.create') }}" class="btn btn-info">Añadir Movil</a>
                        </div>
                    </div>
                    @endif
                    <div class="table-container">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                                <th>Modelo</th>
                                <th>Marca</th>
                                <th>Rom</th>
                                <th>Ram</th>
                                <th>Bateria</th>
                                <th>Precio</th>
                                @if (\Auth::user()->role_id === 1)
                                <th>Editar</th>
                                <th>Eliminar</th>
                                @endif
                            </thead>
                            <tbody>
                                @if($moviles->count())
                                @foreach($moviles as $movil)
                                <tr>
                                    <td>{{$movil->modelo}}</td>
                                    <td>{{$movil->marca}}</td>
                                    <td>{{$movil->rom}}</td>
                                    <td>{{$movil->ram}}</td>
                                    <td>{{$movil->bateria}}</td>
                                    <td>{{$movil->precio}}</td>
                                    @if (\Auth::user()->role_id === 1)
                                    <td><a class="btn btn-warning btn-lg"
                                            href="{{action('MovilController@edit', $movil->id)}}"><span
                                                class="glyphicon glyphicon-pencil"></span></a></td>
                                    <td>
                                        <form action="{{action('MovilController@destroy', $movil->id)}}" method="post">
                                            {{csrf_field()}}
                                            <input name="_method" type="hidden" value="DELETE">

                                            <button class="btn btn-danger btn-lg" type="submit"><span
                                                    class="glyphicon glyphicon-trash"></span></button>

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
                {{ $moviles->links() }}
            </div>
        </div>
    </section>

    @endsection