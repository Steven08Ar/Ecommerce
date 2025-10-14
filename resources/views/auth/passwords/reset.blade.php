<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restablecer Contraseña - {{ config('app.name', 'Laravel') }}</title>
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
        .reset-card {
            background-color: #fff;
            padding: 50px 60px;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 550px;
            width: 90%;
        }



        /* --- Icono Superior --- */
        .reset-card .icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
            color: #007bff;
        }

        /* --- Textos --- */
        .reset-card h1 {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .reset-card p {
            color: #666;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        /* --- Formulario y Inputs --- */
        .reset-card form {
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
    </style>
</head>

<body>

    <div class="reset-card">

        <svg class="icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H4.5a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
        </svg>

        <h1>Restablecer Contraseña</h1>
        <p>Ingresa tu correo y tu nueva contraseña para recuperar el acceso a tu cuenta.</p>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="input-group">
                <label for="email">Correo Electrónico</label>
                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                    value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="input-group">
                <label for="password">Nueva Contraseña</label>
                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password"
                    required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="input-group">
                <label for="password-confirm">Confirmar Nueva Contraseña</label>
                <input id="password-confirm" type="password" name="password_confirmation" required
                    autocomplete="new-password">
            </div>

            <button type="submit" class="submit-btn">
                Restablecer Contraseña
            </button>
        </form>
    </div>

</body>

</html>
