<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <style>
        /* Estilos generales para el cuerpo para que el contenido no quede pegado arriba */
        body {
            padding-top: 70px;
        }

        nav {
            background: #fff;
            border-bottom: 1px solid #e5e7eb;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            /* Cambiado a fixed para que siempre esté visible */
            top: 0;
            width: 100%;
            z-index: 10;
            box-sizing: border-box;
            /* Asegura que el padding no afecte el ancho total */
        }

        .logo {
            font-weight: bold;
            font-size: 1.4rem;
            color: #2563eb;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 25px;
            align-items: center;
            /* Alinea verticalmente los items */
        }

        .nav-links a {
            text-decoration: none;
            color: #374151;
            font-weight: 500;
            transition: color 0.2s ease;
        }

        .nav-links a:hover {
            color: #2563eb;
        }

        /* Estilo para el nombre de usuario y el botón de logout */
        .user-info span {
            margin-right: 15px;
            color: #374151;
            font-weight: bold;
        }

        .logout-button {
            background: none;
            border: none;
            color: #ef4444;
            font-weight: 500;
            cursor: pointer;
            padding: 0;
            font-size: inherit;
            /* Hereda el tamaño de fuente de los otros links */
            font-family: inherit;
            /* Hereda la fuente */
        }

        .logout-button:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav>
            <a href="{{ url('/') }}" class="logo">Mi Tienda Tech</a>

            <div class="nav-links">
                <a href="{{ route('products.index') }}">Admin</a>
                <a href="{{ route('products.index') }}">Productos</a>
                <a href="{{ route('products.create') }}">Agregar Producto</a>

                @guest
                    {{-- Si el usuario es un invitado, muestra Login y Register --}}
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                @else
                    {{-- Si el usuario ha iniciado sesión, muestra su nombre y el botón de Logout --}}
                    <div class="user-info">
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="logout-button">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                @endguest

            </div>
        </nav>
        <main class="py-4" style="padding: 20px 40px;">
            @yield('content')
        </main>
    </div>
</body>

</html>
