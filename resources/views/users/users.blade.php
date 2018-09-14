@extends('layout')

@section('title')
    Lista de Usuarios - EjLaravel1
@endsection

@section('content')
<p> <h1> {{ $title }} </h1></p>

  @foreach ($users as $user)
  <li>{{ $user }}</li>
  @endforeach
@endsection
