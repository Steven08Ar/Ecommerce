<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Producto</title>
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
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
        }

        .product-image {
            flex: 1 1 45%;
            display: flex;
            justify-content: center;
        }

        .product-image img {
            width: 100%;
            max-width: 450px;
            border-radius: 20px;
        }

        .product-info {
            flex: 1 1 45%;
        }

        .product-info h2 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .product-info p {
            font-size: 1rem;
            color: #4b5563;
            margin-bottom: 15px;
        }

        .badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            background: #f3f4f6;
            color: #374151;
            font-size: 0.85rem;
            margin-right: 10px;
        }

        .price {
            font-size: 1.6rem;
            font-weight: bold;
            color: #2563eb;
            margin: 20px 0;
        }

        .btn {
            display: inline-block;
            background: #2563eb;
            color: #fff;
            padding: 12px 25px;
            border-radius: 10px;
            font-size: 1rem;
            text-decoration: none;
            transition: background 0.2s ease;
        }

        .btn:hover {
            background: #1d4ed8;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <header>
        <!-- Aquí va el nombre dinámico -->
        <h1>{{ $producto->nombre ?? 'iPhone 16' }}</h1>
        <p>Detalle del producto</p>
    </header>

    <main class="container">
        <!-- Imagen -->
        <div class="product-image">
            <img src="{{ $producto->imagen ?? 'https://co.tiendasishop.com/cdn/shop/files/IMG-14858961.jpg?v=1726245838&width=823' }}"
                alt="{{ $producto->nombre ?? 'iPhone 16' }}">
        </div>

        <!-- Información -->
        <div class="product-info">
            <!-- Marca y Categoría -->
            <div>
                <span class="badge">Marca: {{ $producto->marca ?? 'Apple' }}</span>
                <span class="badge">Categoría: {{ $category }}</span>
            </div>

            <!-- Nombre -->
            <h2>{{ $producto->nombre ?? 'iPhone 16' }}</h2>

            <!-- Descripción -->
            <p>{{ $producto->descripcion ?? 'Un smartphone de última generación con gran potencia y diseño elegante.' }}
            </p>

            <!-- Precio -->
            <div class="price">${{ $producto->precio ?? '699' }}</div>

            <!-- Botón comprar -->
            <a href="#" class="btn">Comprar</a>
        </div>
    </main>

</body>

</html>
