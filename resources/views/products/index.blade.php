@extends('layouts.app')

@section('content')
    <style>
        :root {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background-color: #f5f5f5;
            color: #111827;
        }

        .page-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 120px 20px 80px;
        }

        header.hero {
            background: linear-gradient(135deg, #0b1e4a, #1f4068);
            border-radius: 24px;
            color: #fff;
            padding: 40px;
            margin-bottom: 40px;
            box-shadow: 0 15px 40px rgba(15, 23, 42, 0.25);
            position: relative;
            z-index: 1;
        }

        header.hero h1 {
            font-size: 2.5rem;
            margin-bottom: 12px;
        }

        header.hero p {
            max-width: 640px;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.8);
        }

        .contenedor {
            margin-top: 40px;
        }

        .grid-productos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .tarjeta {
            background: #ffffff;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 6px 24px rgba(15, 23, 42, 0.08);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .tarjeta:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(15, 23, 42, 0.18);
        }

        .tarjeta img {
            width: 100%;
            height: auto;
            border-radius: 16px;
            margin-bottom: 15px;
        }

        .contenido h2 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .contenido p {
            font-size: 0.95rem;
            color: #4b5563;
            margin-bottom: 8px;
        }

        .precio {
            font-size: 1.3rem;
            font-weight: 700;
            color: #2563eb;
            margin-bottom: 10px;
        }

        .boton {
            display: inline-block;
            background: #2563eb;
            color: #fff;
            padding: 10px 18px;
            border-radius: 10px;
            font-size: 0.9rem;
            text-decoration: none;
            margin-right: 8px;
            transition: background 0.2s ease;
        }

        .boton:hover {
            background: #1d4ed8;
        }

        .activo {
            background-color: #111827;
            color: #fff !important;
        }

        .text-center .btn {
            border-radius: 999px;
        }
    </style>
    <div class="page-wrapper">
        <div class="contenedor">
            <h1 class="display-4 fw-bold text-center mb-4">Productos Disponibles</h1>

            {{-- Filtros de categoría --}}
            <div class="text-center mb-4">
                {{-- Botón TODOS --}}
                <a href="{{ route('products.index') }}"
                    class="btn btn-secondary m-3 {{ !$selectedCategory ? 'activo' : '' }}">
                    Todos
                </a>

                {{-- Botones por categoría --}}
                @foreach ($categories as $category)
                    <a href="{{ route('products.index', ['category' => $category->id]) }}"
                        class="btn btn-secondary m-3 {{ $selectedCategory == $category->id ? 'activo' : '' }}">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>

            <div class="grid-productos mb-4">
                @foreach ($products as $product)
                    <div class="tarjeta">
                        {{-- Imagen — usa un placeholder temporal si no tienes imagen --}}
                        <img src="https://http2.mlstatic.com/D_NQ_NP_877891-MLA88103811437_072025-O.webp"
                            alt="{{ $product->name }}">

                        <div class="contenido">
                            <h2>{{ $product->name }}</h2>

                            {{-- Nombre de la categoría --}}
                            <p>Categoría: {{ $product->category->name ?? 'Sin categoría' }}</p>

                            {{-- Nombre de la marca --}}
                            <p>Marca: {{ $product->brand->name ?? 'Sin marca' }}</p>

                            <p>{{ $product->description }}</p>

                            <p class="precio">$ {{ number_format($product->price) }}</p>
                        </div>

                        <a href="#" class="boton">Ver producto</a>
                        <a href="#" class="boton">Agregar al carrito</a>
                    </div>
                @endforeach
            </div>

            {{ $products->links() }}
        </div>
    </div>

    @include('layouts.footer')
@endsection
