<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;

class HomeController extends Controller
{
    public function index() {
        $title = "Sustentável Show";
        $description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
        when an unknown printer took a galley of type and scrambled it to make a type specimen book.";

        SEO::setTitle($title);
        SEO::setDescription($description);

        return view('home.index', compact('title', 'description'));
    }
}
