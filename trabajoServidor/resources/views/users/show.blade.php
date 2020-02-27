@extends('layout')

@section('title', "Usuario {$user->id}")

@section('content')
<h1>Usuario #{{ $user->id }}</h1>

<p>Nombre del usuario: {{ $user->name }}</p>
<p>Correo electrónico: {{ $user->email }}</p>
<p>Profesión: {{ $user->profession->title }}</p>

<p>
    <a href="{{ route('users.index') }}">Regresar a la lista de usuarios</a>
</p>
@endsection