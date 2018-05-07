@extends('layouts.app')

@section('content')

<div class="container">
    @foreach( $users as $user )
        {{ $user->name }}
        {{ $user->lastname }}
        {{ $user->email }}
        {{ $user->mobile }}
        {{ $user->telephone }}
        {{ $user->identification }}
        {{ $user->role }}
    @endforeach
</div>

@endsection
