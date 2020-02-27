@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Menú</div>

                <div class="panel-body text-center">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h4 class="m-5"> Estas dentro de la aplicación </h4>
                    <br>
                    <div class="m-5">
                        <a class="btn btn-info" href="{{route('users.index')}}">Ir a la lista de Usuarios</a>
                    </div>
                    <br>
                    <div class="m-5">
                        <a class="btn btn-info" href="{{route('movil.index')}}">Ir a la lista de Libros</a>
                    </div>
                    <br>
                    <div class="m-5">
                        <a class="btn btn-info" href="{{route('portatil.index')}}">Ir a la lista de Pedidos</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection