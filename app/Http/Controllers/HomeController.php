<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;

class HomeController extends Controller
{
    public function index() {
        $title = "Sustentável Show";
        $description = "O Sustentável Show é o evento de sustentabilidade mais completo do Brasil. 
        Confira o guia de empresas e serviços sustentáveis e as últimas notícias.";

        SEO::setTitle($title);
        SEO::setDescription($description);

        return view('home.index', compact('title', 'description'));
    }
}
