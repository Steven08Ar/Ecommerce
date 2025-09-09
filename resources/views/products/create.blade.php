@extends('layouts.app')

@section('content')
    <h1>Create New Product</h1>
    <form action="/products" method="POST">
        @csrf
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" required>
        <br>
        <button type="submit">Create Product</button>
    </form>
@endsection
