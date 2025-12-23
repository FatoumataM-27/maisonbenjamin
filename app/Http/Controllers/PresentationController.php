<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresentationController extends Controller
{
    /**
     * Affiche la page d'histoire de l'association
     *
     * @return \Illuminate\View\View
     */
    public function histoire()
    {
        return view('presentation.histoire');
    }

    /**
     * Affiche la page des valeurs de l'association
     *
     * @return \Illuminate\View\View
     */
    public function valeurs()
    {
        return view('presentation.valeurs');
    }
}
