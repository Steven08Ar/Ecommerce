<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recuperar Contraseña - {{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* --- Reseteo y Estilos Base --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }

        /* --- Contenedor Principal --- */
        .forgot-card {
            background-color: #fff;
            padding: 50px 60px;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 550px;
            width: 90%;
        }

        /* --- Icono Superior --- */
        .forgot-card .icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
            color: #007bff;
        }



        /* --- Textos --- */
        .forgot-card h1 {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .forgot-card p {
            color: #666;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        /* --- Alerta de Éxito --- */
        .alert-success {
            background-color: #d1e7dd;
            color: #0f5132;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid #badbcc;
            text-align: left;
        }

        /* --- Formulario y Inputs --- */
        .forgot-card form {
            text-align: left;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #555;
        }

        .input-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            transition: border-color 0.3s ease;
        }

        .input-group input:focus {
            outline: none;
            border-color: #007bff;
        }

        /* --- Botón Principal --- */
        .submit-btn {
            width: 100%;
            padding: 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            margin-top: 15px;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }

        /* --- Enlace para volver --- */
        .back-to-login {
            margin-top: 30px;
            font-size: 0.9rem;
            color: #666;
        }

        .back-to-login a {
            color: #007bff;
            text-decoration: none;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <div class="forgot-card">

        <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
        </svg>

        <h1>¿Olvidaste tu contraseña?</h1>
        <p>No te preocupes. Ingresa tu correo electrónico y te enviaremos un enlace para que puedas crear una nueva.</p>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="input-group">
                <label for="email">Correo Electrónico</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <button type="submit" class="submit-btn">
                Enviar Enlace de Reseteo
            </button>
        </form>

        <div class="back-to-login">
            ¿Ya recordaste tu contraseña? <a href="{{ route('login') }}">Iniciar Sesión</a>
        </div>
    </div>

</body>

</html>
