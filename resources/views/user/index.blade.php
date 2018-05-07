@extends('layouts.app')

@section('content')

<div class="container">
    Nombre:         {{ $user->name }}<br>
    Apellido:       {{ $user->lastname }}<br>
    Email:          {{ $user->email }}<br>
    Celular:        {{ $user->mobile }}<br>
    Telefono:       {{ $user->telephone }}<br>
    Identificación: {{ $user->identification }}<br>

    @if(Auth::user()->role == "admin")
        <a class="btn btn-dark" href="{{ url('/user/show') }}" role="button">Ver Usuarios Registrados</a>
    @endif
</div>

@endsection
