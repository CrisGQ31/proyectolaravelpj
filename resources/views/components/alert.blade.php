<div>
    <h2>Este es mi componente de Alert</h2>
    <h3>Tipo de alerta: {{ $type }}</h3>
    <h3>Nombre: {{ $name }}</h3>
    @foreach ($languages('Python') as $item)
        <h4>{{ $item }}</h4>
    @endforeach
    <h4>{{ $language }}</h4>
</div>
