<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Producto</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9fafb;
            color: #111827;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .form-container {
            background: #fff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            max-width: 500px;
            width: 100%;
        }

        .form-container h1 {
            text-align: center;
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #1f2937;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 0.95rem;
            font-weight: 600;
            color: #374151;
        }

        input,
        textarea,
        select {
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #d1d5db;
            font-size: 0.95rem;
            width: 100%;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2);
        }

        .btn {
            background: #2563eb;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .btn:hover {
            background: #1d4ed8;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h1>Agregar Producto</h1>
        <form action="#" method="post">
            <div>
                <label for="nombre">Nombre del producto</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ej: Laptop Gamer" required>
            </div>

            <div>
                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" placeholder="Ej: 3500000" required>
            </div>

            <div>
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" placeholder="Escribe una breve descripción..." required></textarea>
            </div>

            <div>
                <label for="imagen">URL de Imagen</label>
                <input type="url" id="imagen" name="imagen" placeholder="Pega aquí el link de la imagen"
                    required>
            </div>

            <div>
                <label for="categoria">Categoría</label>
                <select id="categoria" name="categoria" required>
                    <option value="">Seleccione una categoría</option>
                    <option value="laptop">Laptop</option>
                    <option value="smartphone">Smartphone</option>
                    <option value="auriculares">Auriculares</option>
                    <option value="smartwatch">Smartwatch</option>
                    <option value="otros">Otros</option>
                </select>
            </div>

            <div>
                <label for="marca">Marca</label>
                <input type="text" id="marca" name="marca" placeholder="Ej: ASUS, Apple, Sony..." required>
            </div>

            <button type="submit" class="btn">Guardar Producto</button>
        </form>
    </div>

</body>

</html>
