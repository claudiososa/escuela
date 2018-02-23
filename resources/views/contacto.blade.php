@extends('layouts.app')
@section('title')
  Contacto
@endsection
@section('content')
  @forelse ($contacto as $dato)
    <p>Direccion:{{$dato['direccion']}}</p>
    <p>Email:{{$dato['email']}}</p>
    <p>Telefono:{{$dato['telefono']}}</p>
  @empty

  @endforelse
@endsection
