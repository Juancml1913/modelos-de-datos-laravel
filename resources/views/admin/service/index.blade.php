@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card">
  <div class="card-header">
    Gestión de servicios
  </div>
  <div class="card-body">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Editar</th>
          <th scope="col">Borrar</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($viewData["services"] as $service)
        <tr>
          <td>{{ $service->id }}</td>
          <td>{{ $service->nombre }}</td>
          <td>Edit</td>
          <td>Delete</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
