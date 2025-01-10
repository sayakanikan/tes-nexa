@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<div class="jumbotron">
    <img src="{{ asset('images/jumbotron.jpg') }}" alt="Specialty Coffee">
    <div class="jumbotron-content">
        <h1>SPECIAL <span>COFFEE</span></h1>
        <p>Morbi justo vel diam non leo elementum massa. Molestie ipsum concimentum egestas vitae ut cras aenean enim.</p>
        <div class="mx-auto">
            <a href="#">ORDER NOW</a>
        </div>
    </div>
</div>

{{-- Quote section --}}
<section class="custom-section text-center ">
    <div class="container">
        <p class="custom-text">
            Morbi justo vel diam non leo elementum massa. Molestie ipsum condimentum egestas vitae ut cras aenean enim. 
            Laoreet odio adipiscing auctor scelerisque phasellus nisl faucibus.
        </p>
    </div>
</section>

<!-- Shop Best Coffee -->
<div class="container mt-5" id="shop">
    <div class="d-flex justify-content-between">
        <h2>Shop Best Coffee</h2>
        <div class="d-flex justify-content-between">
            <a href="#" class="me-4">View All</a>
            <a href="#"><i class="bi bi-arrow-left-square-fill me-2"></i></a>
            <a href="#"><i class="bi bi-arrow-right-square-fill"></i></a>
        </div>
    </div>
    <div class="product-container">
        @foreach($products as $product)
            <div class="product-card">
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
                <h5>{{ $product->name }}</h5>
                <p>${{ number_format($product->price, 2) }}</p>
            </div>
        @endforeach
    </div>
</div>

{{-- Testimonial --}}
<div class="row my-5 py-5">
    <div class="col-md-12">
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner text-center">
                @foreach ($testimonials as $index => $testimonial)
                    <div class="carousel-item @if ($index === 0) active @endif">
                        <blockquote class="blockquote">
                            <p class="mb-4 text-muted font-italic">
                                "{{ $testimonial->testimonial }}"
                            </p>
                            <footer class="blockquote-footer">{{ $testimonial->author }}</footer>
                        </blockquote>
                    </div>
                @endforeach
            </div>
        
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

{{-- Categories --}}
<div class="container py-5 my-5">
    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-md-6">
        <div class="row g-3 align-items-center category-card">
          <div class="col-4">
            <img src="{{ asset('images/instant-coffee.jpg') }}" alt="Filter Coffee" class="category-image">
          </div>
          <div class="col-8 category-text">
            <h5>Instant Coffees</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#">SHOP CATEGORY</a>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-6">
        <div class="row g-3 align-items-center category-card">
          <div class="col-4">
            <img src="{{ asset('images/coffee-maker.jpg') }}" alt="Coffee Maker" class="category-image">
          </div>
          <div class="col-8 category-text">
            <h5>Coffee Makers</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#">SHOP CATEGORY</a>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-md-6">
        <div class="row g-3 align-items-center category-card">
          <div class="col-4">
            <img src="{{ asset('images/coffee-accessories.jpg') }}" alt="Coffee Accessories" class="category-image">
          </div>
          <div class="col-8 category-text">
            <h5>Coffee Accessories</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#">SHOP CATEGORY</a>
          </div>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="col-md-6">
        <div class="row g-3 align-items-center category-card">
          <div class="col-4">
            <img src="{{ asset('images/coffee-gift-set.jpg') }}" alt="Coffee Gift Sets" class="category-image">
          </div>
          <div class="col-8 category-text">
            <h5>Coffee Gift Sets</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <a href="#">SHOP CATEGORY</a>
          </div>
        </div>
      </div>
    </div>
  </div>

{{-- New Arrivals & Best selling --}}
<div class="row">
    <div class="col-md-6">
        <h2 class="mb-4">New Arrivals</h2>
        <div class="d-flex flex-column">
            @foreach ($newArrivals as $item)
                <div class="card mb-2">
                    <div class="card-body d-flex justify-content-between">
                        <div class="d-flex">
                            <img src="{{ asset('images/'.$item->image) }}" width="50px" height="50px" style="border-radius: 50%;" class="me-2 mt-1" alt="Product">
                            <div class="d-flex flex-column">
                                <h5>{{ $item->name }}</h5>
                                <p>Items Sold: {{ $item->item_sold }}</p>
                            </div>
                        </div>
                        <div>{{ $item->price }}</div>
                    </div>
                </div>
            @endforeach
            <a href="#">VIEW ALL</a>
        </div>
    </div>
    <div class="col-md-6">
        <h2 class="mb-4">Best Selling</h2>
        <div class="d-flex flex-column">
            @foreach ($bestSelling as $item)
                <div class="card mb-2">
                    <div class="card-body d-flex justify-content-between">
                        <div class="d-flex">
                            <img src="{{ asset('images/'.$item->image) }}" width="50px" height="50px" style="border-radius: 50%;" class="me-2 mt-1" alt="Product">
                            <div class="d-flex flex-column">
                                <h5>{{ $item->name }}</h5>
                                <p>Items Sold: {{ $item->item_sold }}</p>
                            </div>
                        </div>
                        <div>{{ $item->price }}</div>
                    </div>
                </div>
            @endforeach
            <a href="#">VIEW ALL</a>
        </div>
    </div>
</div>

{{-- Subscribe --}}
<section class="custom-section text-center ">
    <div class="container">
        <p class="custom-text" style="color: #b38b59; font-weight: bold">
            SUBSCRIBE US
        </p>
        <p>Subscribe to our news letter to get our new updates</p>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Write your email address" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">SUBSCRIBE</button>
        </div>
    </div>
</section>

{{-- Blog --}}
<div class="row" id="blog">
    <div class="col-md-12 d-flex justify-content-between">
        <h2>READ OUR BLOGS</h2>
        <a href="#">READ BLOG POSTS</a>
    </div>
</div>
<div class="row mb-5">
    @foreach ($blogs as $item)
    <div class="col-md-4 mt-4">
        <a href="#" class="blog-href">
            <div class="card">
                <img src="{{ asset('images/'.$item->image) }}" class="card-img-top" alt="Blog Img">
                <div class="card-body">
                <h5 class="card-title">{{ $item->title }}</h5>
                <p class="card-text">{{ $item->description }}</p>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>

{{-- Follow our instagram --}}
<div class="row instagram-section">
    <div class="col-md-12">
        <h2 class="text-center">FOLLOW OUR INSTAGRAM #BEANIE</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <img src="{{ asset('/images/insta-1.jpg') }}" alt="Insta Post" width="200px" style="border-radius: 8px">
    </div>
    <div class="col-md-2">
        <img src="{{ asset('/images/insta-2.jpg') }}" alt="Insta Post" width="200px" style="border-radius: 8px">
    </div>
    <div class="col-md-2">
        <img src="{{ asset('/images/insta-3.jpg') }}" alt="Insta Post" width="200px" style="border-radius: 8px">
    </div>
    <div class="col-md-2">
        <img src="{{ asset('/images/insta-4.jpg') }}" alt="Insta Post" width="200px" style="border-radius: 8px">
    </div>
    <div class="col-md-2">
        <img src="{{ asset('/images/insta-5.jpg') }}" alt="Insta Post" width="200px" style="border-radius: 8px">
    </div>
    <div class="col-md-2">
        <img src="{{ asset('/images/insta-6.jpg') }}" alt="Insta Post" width="200px" style="border-radius: 8px">
    </div>
</div>

{{-- Footer --}}
<div class="row footer-list">
    <div class="col-md-3">
        <p><a href="#">Home</a></p>
        <p><a href="#">About</a></p>
        <p><a href="#shop">Shop</a></p>
    </div>
    <div class="col-md-3">
        <p><a href="#categories">Categories</a></p>
        <p><a href="#blog">Blog</a></p>
        <p><a href="#contact">Contact</a></p>
    </div>
    <div class="col-md-3">
        <p class="text-disabled">Terms & Condition</p>
        <p class="text-disabled">Services</p>
        <p class="text-disabled">Privacy Policy</p>
    </div>
    <div class="col-md-3">
        <p>Jl. Gajah Mada no.23 Semarang</p>
        <p>beaniecoffee@gmail.com</p>
        <p>0821738419293</p>
    </div>
</div>

@endsection
