<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Página Principal')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<!-- Encabezado -->
<header>
    <nav>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="/nosotros">Nosotros</a></li>
            <li><a href="/contacto">Contacto</a></li>
        </ul>
    </nav>
</header>

<!-- Contenido principal -->
<main>
    @yield('content')
</main>

<!-- Pie de página -->
<footer>
    <p>&copy; {{ date('Y') }} Mi Sitio Web. Todos los derechos reservados.</p>
</footer>

<!-- Scripts opcionales -->
@yield('scripts')
</body>
</html>
