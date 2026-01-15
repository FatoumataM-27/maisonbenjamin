<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Affiche la page galerie.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $videos = [
            [
                'title' => 'Amir',
                'url' => asset('media/videos/activites/amir.mp4'),
                'description' => 'Activité musicale avec Amir.'
            ],
            [
                'title' => 'Et pourquoi pas',
                'url' => asset('media/videos/activites/et-pourquoi-pas.mp4'),
                'description' => 'Projet "Et pourquoi pas".'
            ],
            [
                'title' => 'Kayak',
                'url' => asset('media/videos/activites/kayak-modif.mp4'),
                'description' => 'Sortie en kayak.'
            ],
            [
                'title' => 'Patrick Bruel',
                'url' => asset('media/videos/activites/patrick-bruel.mp4'),
                'description' => 'Moment musical avec Patrick Bruel.'
            ],
        ];

        return view('galerie', compact('videos'));
    }
}
