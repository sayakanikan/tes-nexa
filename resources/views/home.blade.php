@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<div class="hero-section">
    <h1>Special Coffee</h1>
    <p>Discover the best specialty coffee crafted just for you.</p>
    <a href="#" class="btn">Order Now</a>
</div>

<!-- Shop Best Coffee -->
<div class="container mt-5">
    <h2 class="text-center">Shop Best Coffee</h2>
    <div class="product-container">
        @foreach($products as $product)
            <div class="product-card">
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
                <h5>{{ $product->name }}</h5>
                <p>${{ number_format($product->price, 2) }}</p>
                <a href="#" class="btn">Order Now</a>
            </div>
        @endforeach
    </div>
</div>

@endsection
