<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Données statiques temporaires en attendant la résolution de la BDD
        $activities = collect([
            [
                'id' => 1,
                'nom' => 'Ateliers créatifs',
                'description' => 'Ateliers d\'art-thérapie, musique, et expressions artistiques',
                'categorie' => 'Ateliers',
                'actif' => true
            ],
            [
                'id' => 2,
                'nom' => 'Sports adaptés',
                'description' => 'Activités sportives adaptées aux besoins spécifiques',
                'categorie' => 'Sports',
                'actif' => true
            ],
            [
                'id' => 3,
                'nom' => 'Sorties culturelles',
                'description' => 'Visites de musées, théâtre, et événements culturels',
                'categorie' => 'Sorties',
                'actif' => true
            ],
            [
                'id' => 4,
                'nom' => 'Activités éducatives',
                'description' => 'Soutien scolaire et apprentissages personnalisés',
                'categorie' => 'Éducation',
                'actif' => true
            ]
        ])->groupBy('categorie');

        return view('activites.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
