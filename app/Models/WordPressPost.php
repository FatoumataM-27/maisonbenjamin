<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Ce modèle est utilisé pour lire les articles depuis une table WordPress existante.
 * La table est supposée s'appeler 'wp_posts' par défaut ou configurée via WP_TABLE_PREFIX.
 */
class WordPressPost extends Model
{
    /**
     * La table associée au modèle.
     *
     * @var string
     */
    protected $table = 'wp_posts';

    /**
     * La clé primaire associée à la table.
     *
     * @var string
     */
    protected $primaryKey = 'ID';

    /**
     * Indique si le modèle doit être horodaté par Eloquent.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Les attributs qui doivent être convertis.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'post_date' => 'datetime',
    ];

    /**
     * Scope pour récupérer uniquement les articles publiés.
     */
    public function scopePublished($query)
    {
        return $query->where('post_status', 'publish')
                     ->where('post_type', 'post');
    }
}
