<?php

namespace App\Http\Controllers;

use App\Models\WordPressPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestDatabaseController extends Controller
{
    /**
     * Teste la connexion à la base de données et affiche les informations.
     *
     * @return \Illuminate\Http\Response
     */
    public function testConnection()
    {
        $results = [];
        
        try {
            // Test de connexion à la base de données
            $results['connection'] = DB::connection()->getPdo() ? true : false;
            $results['database_name'] = DB::connection()->getDatabaseName();
            
            // Récupérer les tables disponibles
            $tables = DB::select('SHOW TABLES');
            $tableList = [];
            
            foreach ($tables as $table) {
                $tableName = reset($table);
                $tableList[] = $tableName;
                
                // Compter les enregistrements pour chaque table
                $count = DB::table($tableName)->count();
                $results['tables'][$tableName] = $count;
            }
            
            // Tester le modèle WordPressPost
            try {
                $posts = WordPressPost::where('post_type', 'post')
                    ->where('post_status', 'publish')
                    ->limit(5)
                    ->get(['ID', 'post_title', 'post_date']);
                
                $results['posts'] = $posts->toArray();
            } catch (\Exception $e) {
                $results['posts_error'] = $e->getMessage();
            }
            
            return view('test-database', ['results' => $results]);
            
        } catch (\Exception $e) {
            return view('test-database', [
                'error' => $e->getMessage()
            ]);
        }
    }
}
