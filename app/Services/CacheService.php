<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use App\Models\Dispositif;
use App\Models\Contact;

class CacheService
{
    /**
     * Durée de cache par défaut (en minutes)
     */
    const DEFAULT_TTL = 60;

    /**
     * Récupérer les dispositifs avec cache
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getDispositifs()
    {
        return Cache::remember('dispositifs.actifs', self::DEFAULT_TTL, function () {
            return Dispositif::actif()->ordered()->get();
        });
    }

    /**
     * Récupérer les statistiques avec cache
     *
     * @return array
     */
    public static function getStats()
    {
        return Cache::remember('admin.stats', 30, function () {
            return [
                'messages_non_traites' => Contact::nonTraite()->count(),
                'messages_total' => Contact::count(),
                'dispositifs_actifs' => Dispositif::actif()->count(),
            ];
        });
    }

    /**
     * Invalider le cache des dispositifs
     */
    public static function clearDispositifsCache()
    {
        Cache::forget('dispositifs.actifs');
    }

    /**
     * Invalider le cache des statistiques
     */
    public static function clearStatsCache()
    {
        Cache::forget('admin.stats');
    }

    /**
     * Invalider tout le cache
     */
    public static function clearAllCache()
    {
        Cache::flush();
    }
}
