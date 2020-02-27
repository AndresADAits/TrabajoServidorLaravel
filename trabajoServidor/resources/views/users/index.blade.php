@extends('layout')

@section('title', 'Usuarios')

@section('content')
<div class="d-flex justify-content-between align-items-end mb-3">
    <h1 class="pb-1">{{ $title }}</h1>
    <p>
        <br><br>
        @if (\Auth::user()->role_id === 1)
        <a href="{{ route('users.create') }}" class="btn btn-success">Nuevo usuario</a>
        @endif
    </p>
</div>

@if ($users->isNotEmpty())
<table class="table table-striped table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <form action="{{ route('users.destroy', $user) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('users.show', $user) }}" class="btn btn-link"><span
                            class="oi oi-eye text-dark"></span></a>
                    @if (\Auth::user()->role_id === 1)
                    <a href="{{ route('users.edit', $user) }}" class="btn btn-link"><span
                            class="oi oi-pencil text-warning"></span></a>

                    <button type="submit" class="btn btn-link"><span class="oi oi-trash text-danger"></span></button>
                    @endif
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<p>No hay usuarios registrados.</p>
@endif
@endsection

@section('sidebar')
@parent
@endsection