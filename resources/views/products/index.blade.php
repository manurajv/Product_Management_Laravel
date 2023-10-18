@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">All Products</h1>

    <div class="mb-4">
        <ul class="list-group">
            @foreach ($products as $product)
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>{{ $product->name }}</span>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">See More</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    <a href="{{ route('products.create') }}" class="btn btn-success">Add Product</a>

    @if (session('success'))
        <div class="alert alert-success mt-4">
            {{ session('success') }}
        </div>
    @endif
</div>
@endsection
