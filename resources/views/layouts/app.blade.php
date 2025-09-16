<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Tecnológicos</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background: #fff;
            color: #111827;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Navbar */
        nav {
            background: #fff;
            border-bottom: 1px solid #e5e7eb;
            padding: 20px;
            text-align: center;
            font-weight: bold;
            font-size: 1.2rem;
        }

        /* Header */
        header {
            text-align: center;
            padding: 50px 20px 30px;
        }

        header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1rem;
            color: #6b7280;
        }

        /* Productos */
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 40px 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            justify-items: center;
        }

        .card {
            background: #f9fafb;
            border-radius: 20px;
            padding: 20px;
            text-align: center;
            width: 100%;
            max-width: 320px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        }

        .card img {
            width: 100%;
            max-width: 250px;
            height: auto;
            border-radius: 15px;
            margin-bottom: 15px;
        }

        .badges {
            margin-bottom: 10px;
        }

        .badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            background: #f3f4f6;
            color: #374151;
            font-size: 0.8rem;
            margin: 0 5px 5px 0;
        }

        .nombre {
            font-size: 1.2rem;
            font-weight: 600;
            margin: 10px 0;
        }

        .descripcion {
            font-size: 0.9rem;
            color: #4b5563;
            margin-bottom: 15px;
        }

        .price {
            font-size: 1.4rem;
            font-weight: bold;
            color: #2563eb;
            margin-bottom: 15px;
        }

        .btn {
            display: inline-block;
            background: #2563eb;
            color: #fff;
            padding: 10px 20px;
            border-radius: 10px;
            font-size: 0.95rem;
            text-decoration: none;
            transition: background 0.2s ease;
        }

        .btn:hover {
            background: #1d4ed8;
        }

        /* Footer */
        footer {
            margin-top: auto;
            background: #fff;
            border-top: 1px solid #e5e7eb;
            padding: 20px;
            text-align: center;
            font-size: 0.9rem;
            color: #6b7280;
        }
    </style>
</head>

<body>

    <body>
        @include('layouts.navbar')

        @yield('content')

        @include('layouts.footer')
    </body>

</body>

</html>
