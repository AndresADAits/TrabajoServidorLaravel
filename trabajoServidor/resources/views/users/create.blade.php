@extends('layout')

@section('title', "Crear usuario")

@section('content')
<div class="card">
    <br>
    <br>
    <h4 class="card-header">Crear usuario</h4>
    <div class="card-body">

        @if ($errors->any())
        <div class="alert alert-danger">
            <h6>Por favor corrige los errores debajo:</h6>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ url('usuarios') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Ricardo Cabrera"
                    value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="a.ricardocabrera@adaits.es"
                    value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" name="password" id="password"
                    placeholder="Debe tener más de 6 caracteres">
            </div>

            <!--Profesión-->

            <div class="form-group">
                <label for="profession_id">Profesión:</label>
                <select name="profession_id" id="profession_id" class="form-control">
                @foreach ($profession_id as $profession_id)
                    <option value="{{ $profession_id['id'] }}">{{ $profession_id['title'] }}</option>
                @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Crear usuario</button>
            <a href="{{ route('users.index') }}" class="btn btn-link">Regresar a la lista de usuarios</a>
        </form>
    </div>
</div>
@endsection