@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-12">
      <form class="navbar navbar-form" method="GET" role="search" >
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Busqueda" name="search">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
      </form>
    </div>

    <div class="table-responsive-sm">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th>Telefono</th>
                    <th>Id</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody>
        @foreach( $users as $user )
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->mobile }}</td>
                    <td>{{ $user->telephone }}</td>
                    <td>{{ $user->identification }}</td>
                    <td>{{ $user->role }}</td>
                </tr>
        @endforeach
            </tbody>
      </table>
    </div>
</div>

@endsection
