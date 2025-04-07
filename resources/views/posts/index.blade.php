@extends('layouts.app')

@section('title', 'Listado de Posts')

@section('content')
    <h1 class="mb-4">El index</h1>

    <a href="{{ route('posts.create') }}" class="btn btn-primary">
        Crear
    </a>
@endsection
