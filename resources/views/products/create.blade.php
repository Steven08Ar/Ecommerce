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
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <input type="text" class="form-control" id="productName" name="name"
                                    placeholder="Ej: Laptop Gamer" value="{{ old('name') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="productDescription" class="form-label">Descripción</label>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                                <textarea class="form-control" id="productDescription" rows="4" name="description"
                                    placeholder="Escribe una descripción breve" required>{{ old('description') }}</textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="productPrice" class="form-label">Precio</label>
                                    @error('price')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <input type="number" class="form-control" id="productPrice" name="price"
                                        placeholder="Ej: 3499000" min="0" step="1000" value="{{ old('price') }}"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="productCategory" class="form-label">Categoría</label>
                                    @error('category')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <select class="form-control" id="productCategory" name="category">
                                        <option value="">-- Category --</option>
                                        @foreach ($categories as $item)
                                            <option value="{{ $item->id }}"
                                                {{ old('category') == $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="productBrand" class="form-label">Marca</label>
                                    @error('brand')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <select class="form-control" id="productBrand" name="brand">
                                        <option value="">-- Brand --</option>
                                        @foreach ($brands as $item)
                                            <option value="{{ $item->id }}" {{ old('brand') == $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}
                                            </option>
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
