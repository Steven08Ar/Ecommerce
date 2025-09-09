<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce</title>
</head>

<body>
    <h1>Create New Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required>
        <br>
        <button type="submit">Create Product</button>
    </form>
</body>

</html>

</body>

</html>
