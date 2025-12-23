<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StructureController extends Controller
{
    /**
     * Affiche la page de l'IME IMPRO Norbert Dana
     *
     * @return \Illuminate\View\View
     */
    public function imeImpro()
    {
        return view('structures.ime-impro');
    }

    /**
     * Affiche la page du SESSAD Evelyne et Salomon Madar
     *
     * @return \Illuminate\View\View
     */
    public function sessad()
    {
        return view('structures.sessad');
    }
}
