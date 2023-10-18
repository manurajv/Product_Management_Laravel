@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">{{ $product->name }}</h1>
    <div class="card">
        <div class="card-body">
            <p class="card-text">Description: {{ $product->description }}</p>
            <p class="card-text">Price: ${{ $product->price }}</p>

            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Update</a>
            
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
            </form>

            <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
@endsection
