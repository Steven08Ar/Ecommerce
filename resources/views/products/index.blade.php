@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listado de Productos</title>
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
            }

            header {
                text-align: center;
                padding: 40px 20px;
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

            .container {
                max-width: 1200px;
                margin: auto;
                padding: 20px;
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
                gap: 30px;
            }

            .card {
                background: #f9fafb;
                border-radius: 20px;
                padding: 20px;
                text-align: center;
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
        </style>
    </head>

    <body>

        <header>
            <h1>Productos Tecnológicos</h1>
            <p>Explora nuestra selección de tecnología de última generación</p>
        </header>

        <main class="container">

            <!-- Producto -->
            <div class="card">
                <img src="https://www.asus.com/media/Odin/Websites/global/ProductLine/20200824120814.jpg" alt="Laptop Gamer">
                <div class="badges">
                    <span class="badge">Marca: ASUS</span>
                    <span class="badge">Categoría: Laptop</span>
                </div>
                <h2 class="nombre">Laptop Gamer</h2>
                <p class="descripcion">Potente laptop con procesador Intel i7, 16GB RAM y tarjeta gráfica RTX 3060.</p>
                <div class="price">$4.500.000</div>
                <a href="#" class="btn">Comprar</a>
            </div>

            <!-- Producto -->
            <div class="card">
                <img src="https://media.falabella.com/falabellaCO/130280408_01/w=800,h=800,fit=pad"
                    alt="Auriculares Bluetooth">
                <div class="badges">
                    <span class="badge">Marca: Sony</span>
                    <span class="badge">Categoría: Audio</span>
                </div>
                <h2 class="nombre">Auriculares Bluetooth</h2>
                <p class="descripcion">Auriculares inalámbricos con cancelación de ruido y hasta 30 horas de batería.</p>
                <div class="price">$450.000</div>
                <a href="#" class="btn">Comprar</a>
            </div>

            <!-- Producto -->
            <div class="card">
                <img src="https://www.losdistribuidores.com/wp-content/uploads/2024/02/samsung-galaxy-s24-ultra-negro.webp"
                    alt="Smartphone 5G">
                <div class="badges">
                    <span class="badge">Marca: Samsung</span>
                    <span class="badge">Categoría: Smartphone</span>
                </div>
                <h2 class="nombre">Smartphone 5G</h2>
                <p class="descripcion">Pantalla AMOLED de 6.7", 8GB RAM y 128GB almacenamiento, listo para 5G.</p>
                <div class="price">$3.200.000</div>
                <a href="#" class="btn">Comprar</a>
            </div>

            <!-- Producto -->
            <div class="card">
                <img src="https://garminb2cco.vtexassets.com/assets/vtex.file-manager-graphql/images/0cd81c9f-7f54-42dd-b4f3-cd4422c03002___76566aeca24aa7cb160ba1c0ab7710a8.png"
                    alt="Smartwatch Deportivo">
                <div class="badges">
                    <span class="badge">Marca: Garmin</span>
                    <span class="badge">Categoría: Wearable</span>
                </div>
                <h2 class="nombre">Smartwatch Deportivo</h2>
                <p class="descripcion">Reloj inteligente con GPS, monitor de ritmo cardiaco y resistencia al agua.</p>
                <div class="price">$950.000</div>
                <a href="#" class="btn">Comprar</a>
            </div>

        </main>

    </body>

    </html>
@endsection
