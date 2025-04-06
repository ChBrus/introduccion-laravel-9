<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Web Laravel</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/png">
</head>
<body>
    <h1>Proyecto Web Laravel</h1>
    <nav>
        <ul>
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('blog') }}">Blog</a>
            </li>
        </ul>
    </nav>
    <hr>
    @yield('content')
</body>
</html>