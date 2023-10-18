@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Edit Product</h1>
    <div class="card">
        <div class="card-body">
            <form method="post" action="{{ route('products.update', $product->id) }}">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" class="form-control" rows="4" required>{{ $product->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" name="price" class="form-control" value="{{ $product->price }}" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Update Product</button>
            </form>
        </div>
    </div>
</div>
@endsection
