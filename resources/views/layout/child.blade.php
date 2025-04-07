@extends('layout.app')
@section('title', 'Nosotros')
@section('content')
    <h1>Nosotros</h1>
    <p>Conoce más sobre nosotros...</p>
    <h2>Mi nombre es {{$name}}</h2>
    @component('components.alert', ['type' => 'danger'])
        @slot('title')
            Alerta
        @endslot
        <strong>¡Alerta!</strong> Algo no está bien.
    @endcomponent
@endsection
