<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * Les attributs qui peuvent être assignés en masse.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'sujet',
        'message',
        'traite'
    ];

    /**
     * Les attributs qui doivent être convertis.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'traite' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Scope pour récupérer les messages non traités
     */
    public function scopeNonTraite($query)
    {
        return $query->where('traite', false);
    }
    /**
     * Scope pour récupérer les messages traités
     */
    public function scopeTraite($query)
    {
        return $query->where('traite', true);
    }
    /**
     * Scope pour ordonner par date de création décroissante
     */
    public function scopeRecent($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
    /**
     * Marquer le message comme traité
     */
    public function marquerTraite()
    {
        $this->update(['traite' => true]);
    }
    /**
     * Accessor pour le nom complet
     */
    public function getNomCompletAttribute()
    {
        return trim($this->prenom . ' ' . $this->nom);
    }
}
