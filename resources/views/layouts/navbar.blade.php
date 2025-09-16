<nav>
    <a href="{{ route('products.index') }}" class="logo">Mi Tienda Tech</a>
    <div class="nav-links">
        <a href="{{ route('products.index') }}">Productos</a>
        <a href="{{ route('products.create') }}">Agregar Producto</a>
        <a href="{{ route('products.detail', ['id' => 1, 'category' => 'laptops']) }}">Detalle ejemplo</a>
    </div>
</nav>

<style>
    nav {
        background: #fff;
        border-bottom: 1px solid #e5e7eb;
        padding: 15px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: sticky;
        top: 0;
        z-index: 10;
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
</style>
