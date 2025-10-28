<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('../public/css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* --- Estilos Generales y del Layout --- */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f4f8;
            color: #333;
            margin-top: 75px;
            /* Espacio para el navbar fijo */
        }

        /* --- ESTILOS DEL NUEVO NAVBAR OSCURO --- */
        nav {
            background-color: #111827;
            /* Fondo oscuro del footer */
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            box-sizing: border-box;
            border-bottom: 1px solid #374151;
            /* Borde sutil */
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-weight: bold;
            font-size: 1.4rem;
            color: #007bff;
            /* Mantenemos el azul para que resalte */
            text-decoration: none;
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: scale(1.05);
            /* Efecto sutil al pasar el mouse */
        }

        .nav-links {
            display: flex;
            gap: 30px;
            /* Un poco más de espacio */
            align-items: center;
        }

        /* --- ANIMACIÓN EN ENLACES DEL NAVBAR --- */
        .nav-links a {
            text-decoration: none;
            color: #d1d5db;
            /* Texto gris claro */
            font-weight: 500;
            position: relative;
            padding-bottom: 5px;
            transition: color 0.3s ease;
        }

        /* La línea animada debajo de los enlaces */
        .nav-links a::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #007bff;
            /* Línea de acento azul */
            transform: scaleX(0);
            /* Inicia invisible */
            transform-origin: bottom right;
            transition: transform 0.3s ease-out;
        }

        .nav-links a:hover {
            color: #ffffff;
            /* El texto se vuelve blanco */
        }

        .nav-links a:hover::after {
            transform: scaleX(1);
            /* La línea aparece de derecha a izquierda */
            transform-origin: bottom left;
        }

        /* --- Estilos del Usuario y Logout --- */
        .user-info {
            display: flex;
            align-items: center;
        }

        .user-info span {
            margin-right: 20px;
            color: #ffffff;
            font-weight: 600;
        }

        /* El enlace de logout no debe tener la animación azul */
        .logout-link::after {
            background-color: #ef4444;
            /* Línea roja para logout */
        }

        .logout-link {
            color: #f87171;
            /* Rojo claro para que sea visible */
        }

        .logout-link:hover {
            color: #ef4444;
            /* Rojo más intenso al pasar el mouse */
        }

        /* --- Contenedor de botones de autenticación --- */
        .auth-buttons {
            display: flex;
            gap: 15px;
            background-color: #ffffff00;
            /* gris oscuro del navbar */
            padding: 8px 16px;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }

        /* --- Estilo base de los botones --- */
        .btn-auth {
            padding: 8px 18px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        /* --- Botón de Login --- */
        .login-btn {
            background-color: #2563eb;
            /* azul intenso */
            color: #fff;
            border: 1px solid #2563eb;
        }

        .login-btn:hover {
            background-color: #1e40af;
            /* azul más oscuro */
            transform: translateY(-2px);
        }

        /* --- Botón de Register --- */
        .register-btn {
            background-color: transparent;
            color: #ffffff;
            border: 1px solid #4b5563;
        }

        .register-btn:hover {
            background-color: #374151;
            color: #fff;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <div id="app">
        <nav>
            <a href="{{ url('/home') }}" class="logo">Mi Tienda Tech</a>

            <div class="nav-links">
                <a href="{{ route('products.index') }}">Productos</a>
                <a href="{{ route('admin.index') }}">Admin</a>
                @guest
                    <div class="auth-buttons">
                        <a href="{{ route('login') }}" class="btn-auth login-btn">Login</a>
                        <a href="{{ route('register') }}" class="btn-auth register-btn">Register</a>
                    </div>
                @else
                    <div class="user-info">
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="logout-link">
                            Cerrar Sesión
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                @endguest
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        {{-- Aquí puedes incluir tu footer si lo tienes en un archivo separado --}}
        {{-- @include('layouts.footer') --}}
    </div>
</body>

</html>
