<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activities = [
            [
                'nom' => 'Vie relationnelle, affective et sexuelle',
                'description' => 'Ateliers et accompagnement sur la vie relationnelle, affective et sexuelle',
                'categorie' => 'Socialisation',
                'places_disponibles' => 15
            ],
            [
                'nom' => 'Jardin et sensoriel',
                'description' => 'Activités de jardinage et d\'éveil sensoriel',
                'categorie' => 'Nature',
                'places_disponibles' => 12
            ],
            [
                'nom' => 'Habiletés sociales',
                'description' => 'Développement des compétences sociales et relationnelles',
                'categorie' => 'Socialisation',
                'places_disponibles' => 10
            ],
            [
                'nom' => 'Musicothérapie',
                'description' => 'Utilisation de la musique comme outil thérapeutique',
                'categorie' => 'Thérapie',
                'places_disponibles' => 8
            ],
            [
                'nom' => 'Groupe langage',
                'description' => 'Ateliers de développement du langage et de la communication',
                'categorie' => 'Communication',
                'places_disponibles' => 10
            ],
            [
                'nom' => 'Voyage culinaire',
                'description' => 'Atelier cuisine produisant environ 30 repas par session',
                'categorie' => 'Cuisine',
                'places_disponibles' => 6
            ],
            [
                'nom' => 'Conditionnement',
                'description' => 'Ateliers de conditionnement et d\'emballage',
                'categorie' => 'Professionnel',
                'places_disponibles' => 10
            ],
            [
                'nom' => 'Expression corporelle',
                'description' => 'Ateliers d\'expression par le corps et le mouvement',
                'categorie' => 'Art',
                'places_disponibles' => 12
            ],
            [
                'nom' => 'Arts plastiques',
                'description' => 'Ateliers de création artistique',
                'categorie' => 'Art',
                'places_disponibles' => 15
            ],
            [
                'nom' => 'Bien-être',
                'description' => 'Ateliers dédiés au bien-être et à la détente',
                'categorie' => 'Santé',
                'places_disponibles' => 10
            ],
            [
                'nom' => 'Yoga',
                'description' => 'Séances de yoga adaptées',
                'categorie' => 'Santé',
                'places_disponibles' => 12
            ],
            [
                'nom' => 'Courses (préparation atelier cuisine)',
                'description' => 'Sessions de courses pour préparer les ateliers cuisine',
                'categorie' => 'Cuisine',
                'places_disponibles' => 4
            ],
            [
                'nom' => 'Ludothèque',
                'description' => 'Espace de jeux et d\'activités ludiques',
                'categorie' => 'Loisirs',
                'places_disponibles' => 15
            ],
            [
                'nom' => 'Médiation animale',
                'description' => 'Ateliers de médiation avec des animaux',
                'categorie' => 'Thérapie',
                'places_disponibles' => 6
            ],
            [
                'nom' => 'Musique',
                'description' => 'Ateliers musicaux et découverte des instruments',
                'categorie' => 'Art',
                'places_disponibles' => 10
            ],
            [
                'nom' => 'Théâtre',
                'description' => 'Ateliers de pratique théâtrale',
                'categorie' => 'Art',
                'places_disponibles' => 12
            ],
            [
                'nom' => 'Travaux manuels',
                'description' => 'Ateliers de bricolage et création manuelle',
                'categorie' => 'Création',
                'places_disponibles' => 10
            ],
            [
                'nom' => 'Cuisine des chefs',
                'description' => 'Atelier cuisine accompagné par la cheffe étoilée Ghislaine Arabian',
                'categorie' => 'Cuisine',
                'places_disponibles' => 6
            ],
            [
                'nom' => 'Kaléidoscope',
                'description' => 'Atelier arts et décoration des locaux',
                'categorie' => 'Art',
                'places_disponibles' => 12
            ],
            [
                'nom' => 'Paris au fil de l\'eau',
                'description' => 'Découverte de Paris et de ses canaux',
                'categorie' => 'Sortie',
                'places_disponibles' => 8
            ],
            [
                'nom' => 'Blanchisserie',
                'description' => 'Atelier d\'apprentissage des techniques de blanchisserie',
                'categorie' => 'Professionnel',
                'places_disponibles' => 6
            ]
        ];

        foreach ($activities as $activity) {
            \App\Models\Activity::create($activity);
        }
    }
}
