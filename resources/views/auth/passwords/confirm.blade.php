<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirmar Contraseña - {{ config('app.name', 'Laravel') }}</title>
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
        .confirm-card {
            background-color: #fff;
            padding: 50px 60px;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 550px;
            width: 90%;
        }



        /* --- Icono Superior --- */
        .confirm-card .icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
            color: #007bff;
        }

        /* --- Textos --- */
        .confirm-card h1 {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .confirm-card p {
            color: #666;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        /* --- Formulario y Inputs --- */
        .confirm-card form {
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

        /* --- Enlace para recuperar contraseña --- */
        .forgot-password-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            font-size: 0.9rem;
        }

        .forgot-password-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: 500;
        }
    </style>
</head>

<body>

    <div class="confirm-card">

        <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.602-3.751m-.225-4.012a12.024 12.024 0 00-8.775-2.175c-2.676.364-5.144 1.769-6.812 3.663" />
        </svg>

        <h1>Confirmar Contraseña</h1>
        <p>Por tu seguridad, por favor vuelve a ingresar tu contraseña para continuar.</p>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="input-group">
                <label for="password">Contraseña</label>
                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password"
                    required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <button type="submit" class="submit-btn">
                Confirmar Contraseña
            </button>

            @if (Route::has('password.request'))
                <div class="forgot-password-link">
                    <a href="{{ route('password.request') }}">
                        ¿Olvidaste tu contraseña?
                    </a>
                </div>
            @endif
        </form>
    </div>

</body>

</html>
