@extends('layouts.app')

@section('content')

<div class="container">
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
              <tr>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->lastname }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->mobile }}</td>
                  <td>{{ $user->telephone }}</td>
                  <td>{{ $user->identification }}</td>
                  <td>{{ $user->role }}</td>
              </tr>
          </tbody>
    </table>
  </div>
    <div class="col-sm-12">
        @if(Auth::user()->role == "admin")
            <a class="btn btn-dark" href="{{ route('userShow') }}" role="button">Ver Usuarios Registrados</a>
        @endif
    </div>
</div>

@endsection
