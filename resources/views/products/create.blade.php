@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg">
                    <div class="card-header pb-0">
                        <h6 class="mb-0">Agregar nuevo producto</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.products.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="productName" class="form-label">Nombre del producto</label>
                                <input type="text" class="form-control" id="productName" name="productName"
                                    placeholder="Ej: Laptop Gamer" required>
                            </div>
                            <div class="mb-3">
                                <label for="productDescription" class="form-label">Descripción</label>
                                <textarea class="form-control" id="productDescription" name="productDescription"
                                    rows="4" placeholder="Escribe una descripción breve" required></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="productPrice" class="form-label">Precio</label>
                                    <input type="number" class="form-control" id="productPrice" name="productPrice"
                                        placeholder="Ej: 3499000" min="0" step="1000" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="productCategory" class="form-label">Categoría</label>
                                    <select class="form-select" id="productCategory" name="category" required>
                                        <option value="">Seleccione una categoría</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="productBrand" class="form-label">Marca</label>
                                    <select class="form-select" id="productBrand" name="productBrand" required>
                                        <option value="">Seleccione una marca</option>
                                        @foreach ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="productImage" class="form-label">URL de la imagen</label>
                                    <input type="text" class="form-control" id="productImage">
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn bg-gradient-primary">Guardar producto</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
