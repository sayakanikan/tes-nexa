<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beanie Coffee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNavLeft">
                <div class="navbar-nav me-auto">
                    <a class="nav-link" href="/">Home</a>
                    <a class="nav-link" href="#shop">Shop</a>
                    <a class="nav-link" href="#blog">Blog</a>
                    <a class="nav-link" href="#contact">Pages</a>
                </div>
            </div>
    
            <a class="navbar-brand mx-auto" href="#">
                <img src="{{ asset('images/header.png') }}" alt="BEANIE" class="logo">
            </a>
    
            <div class="navbar-nav ms-auto">
                <form class="d-flex search-form" role="search">
                    <input class="form-control" type="search" placeholder="Search here..." aria-label="Search">
                </form>
                <a class="nav-link" href="#"><i class="bi bi-heart"></i></a>
                <a class="nav-link" href="#"><i class="bi bi-cart"> (0)</i></a>
            </div>
        </div>
    </nav>
    

    <!-- Content -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2025 Beanie Coffee. All rights reserved.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
