@extends('layouts.app')

@section('content')

<div class="container">
    Nombre:         {{ $user->name }}
    Apellido:       {{ $user->lastname }}
    Email:          {{ $user->email }}
    Celular:        {{ $user->mobile }}
    Telefono:       {{ $user->telephone }}
    Identificación: {{ $user->identification }}

    @auth
        <a class="btn btn-dark" href="{{ url('/user/show') }}" role="button">Ver Usuarios Registrados</a>
    @endauth
</div>

@endsection
