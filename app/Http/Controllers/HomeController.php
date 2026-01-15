<?php

namespace App\Http\Controllers;

use App\Models\WordPressPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Affiche la page d'accueil
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $latestPosts = [];
        
        try {
            // Tenter de récupérer les derniers articles WordPress via le scope
            $latestPosts = WordPressPost::published()
                ->orderBy('post_date', 'desc')
                ->limit(3)
                ->get(['ID', 'post_title', 'post_excerpt', 'post_date', 'post_name']);
        } catch (\Exception $e) {
            // En cas d'erreur de base de données, continuer sans articles
            // Cela permet au site de fonctionner même sans base de données
        }
        
        return view('home', compact('latestPosts'));
    }
}
