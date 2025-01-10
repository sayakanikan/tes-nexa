<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Coffee;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Coffee::all();
        $testimonials = Testimonial::all();
        $newArrivals = Coffee::orderByDesc('created_at')->get();
        $bestSelling = Coffee::orderByDesc('item_sold')->get();
        $blogs = Blog::all();
        return view('home', [
            "products" => $products,
            "testimonials" => $testimonials,
            "newArrivals" => $newArrivals,
            "bestSelling" => $bestSelling,
            "blogs" => $blogs
        ]);
    }
}
