@extends('layouts.app')
@section('title')
  Autoridades
@endsection
@section('content')
    @forelse ($autoridades as $autoridad)
      <p>Director: {{$autoridad['director']}}</p>
      <p>Vicedirectora: {{$autoridad['vicedirector']}}</p>
      <p>Secretario: {{$autoridad['secretario']}}</p>
    @empty
      <p>Disculpa, esta seccion esta en construccion</p>
    @endforelse


@endsection
