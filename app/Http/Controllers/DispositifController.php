<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dispositif;
use App\Services\CacheService;

class DispositifController extends Controller
{
    /**
     * Affiche la liste de tous les dispositifs
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $dispositifs = CacheService::getDispositifs();
        return view('dispositifs.index', compact('dispositifs'));
    }

    /**
     * Affiche un dispositif spécifique par son slug
     *
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        $dispositif = Dispositif::where('slug', $slug)->where('actif', true)->firstOrFail();
        
        // On essaye de trouver une vue spécifique au slug, sinon on utilise une vue générique
        $viewName = "dispositifs.{$slug}";
        
        if (view()->exists($viewName)) {
            return view($viewName, compact('dispositif'));
        }

        return view('dispositifs.show', compact('dispositif'));
    }

    /**
     * Affiche la page de l'UEEA Cesbron
     *
     * @return \Illuminate\View\View
     */
    public function ueea()
    {
        $dispositif = Dispositif::where('slug', 'ueea')->first();
        return view('dispositifs.ueea', compact('dispositif'));
    }

    /**
     * Affiche la page de l'UEMA Joseph de Maistre
     *
     * @return \Illuminate\View\View
     */
    public function uema()
    {
        $dispositif = Dispositif::where('slug', 'uema')->first();
        return view('dispositifs.uema', compact('dispositif'));
    }

    /**
     * Affiche la page de l'EMASCO PARIS-EST
     *
     * @return \Illuminate\View\View
     */
    public function emasco()
    {
        $dispositif = Dispositif::where('slug', 'emasco')->first();
        return view('dispositifs.emasco', compact('dispositif'));
    }
}
