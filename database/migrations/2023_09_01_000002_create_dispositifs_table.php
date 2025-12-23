// c:\Users\Angelique\CascadeProjects\maisonbejaminsite\database\migrations\2023_09_01_000002_create_dispositifs_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateDispositifsTable extends Migration
{
    /**
     * Exécuter les migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispositifs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('slug')->unique();
            $table->string('couleur', 7)->default('#6967bd');
            $table->text('description')->nullable();
            $table->text('mission')->nullable();
            $table->text('public_cible')->nullable();
            $table->string('image')->nullable();
            $table->boolean('actif')->default(true);
            $table->integer('ordre')->default(0);
            $table->timestamps();
        });
        
        // Insertion des dispositifs par défaut
        DB::table('dispositifs')->insert([
            ['nom' => 'IME-IMPRO', 'slug' => 'ime-impro', 'couleur' => '#24A5C4', 'ordre' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'SESSAD', 'slug' => 'sessad', 'couleur' => '#D30240', 'ordre' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'UEEA', 'slug' => 'ueea', 'couleur' => '#85B125', 'ordre' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'EMASCO', 'slug' => 'emasco', 'couleur' => '#961478', 'ordre' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'UEMA', 'slug' => 'uema', 'couleur' => '#ec6726', 'ordre' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['nom' => 'MAS', 'slug' => 'mas', 'couleur' => '#34B961', 'ordre' => 6, 'created_at' => now(), 'updated_at' => now()]
        ]);
    }

    /**
     * Annuler les migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dispositifs');
    }
}