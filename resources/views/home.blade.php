@extends('layouts.app')

@section('content')
    <style>
        /* --- Estilos Específicos del Dashboard --- */
        .dashboard-container {
            padding: 40px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .welcome-header h1 {
            font-size: 2.5rem;
            font-weight: 600;
            color: #333;
        }

        .welcome-header p {
            font-size: 1.1rem;
            color: #666;
            margin-top: 5px;
            margin-bottom: 40px;
        }

        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .card {
            background-color: #fff;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-decoration: none;
            color: inherit;
            border: none;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
        }



        .card .icon {
            width: 50px;
            height: 50px;
            color: #007bff;
            margin-bottom: 15px;
        }

        .card h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .card p {
            color: #777;
            font-size: 0.95rem;
            line-height: 1.5;
        }
    </style>

    <div class="dashboard-container">

        <div class="welcome-header">
            <h1>¡Hola, {{ Auth::user()->name }}!</h1>
            <p>Bienvenido a tu panel. Desde aquí puedes gestionar los productos de la tienda.</p>
        </div>

        <div class="dashboard-cards">

            <a href="{{ route('products.index') }}" class="card">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 6.75h7.5M8.25 12h7.5m-7.5 5.25h7.5M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 3.75A1.5 1.5 0 014.5 2.25h15A1.5 1.5 0 0121 3.75v16.5A1.5 1.5 0 0119.5 21.75h-15A1.5 1.5 0 013 20.25V3.75z" />
                    </svg>
                </div>
                <h3>Lista de Productos</h3>
                <p>Explora y administra todos los productos disponibles.</p>
            </a>

            <a href="{{ route('products.detail', ['id' => 1, 'category' => 'ejemplo']) }}" class="card">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </div>
                <h3>Detalle del Producto</h3>
                <p>Busca productos y mira toda su información detallada.</p>
            </a>

            <a href="{{ route('admin.products.create') }}" class="card">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3>Crear Nuevo Producto</h3>
                <p>Agrega un nuevo artículo al catálogo de la tienda.</p>
            </a>

        </div>
    </div>

    @include('layouts.footer')
@endsection
