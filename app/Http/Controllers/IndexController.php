<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function About()
    {
        return view('about');
    }
    public function Index()
    {
        return view('index');
    }
    public function Home_02()
    {
        return view('home-02');
    }
    public function Home_03()
    {
        return view('home-03');
    }
    public function Contact()
    {
        return view('contact');
    }
    public function Product()
    {
        return view('product');
    }
    public function Blog()
    {
        return view('blog');
    }
    public function Blog_detail()
    {
        return view('blog-detail');
    }
    public function Shoping_cart()
    {
        return view('shoping-cart');
    }
    public function Product_details()
    {
        return view('product-details');
    }
}
