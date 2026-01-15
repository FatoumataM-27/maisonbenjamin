<?php
if (!defined('LARAVEL_START')) {
    die('Accès direct interdit.');
}

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestDatabaseController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DispositifController;
use App\Http\Controllers\ContactController;

// Page d'accueil
use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index'])->name('home');

// L'association
Route::get('/association', function () {
    return view('association.index');
})->name('association.index');

// Sous-pages de l'association
Route::get('/notre-histoire', function () {
    return view('association.histoire');
})->name('association.histoire');

Route::get('/nos-valeurs', function () {
    return view('association.valeurs');
})->name('association.valeurs');

// Nos services
Route::get('/services', function () {
    return view('services.index');
})->name('services.index');

// Services individuels
Route::get('/services/ime-impro', function () {
    return view('services.ime-impro');
})->name('services.ime-impro');

Route::get('/services/sessad', function () {
    return view('services.sessad');
})->name('services.sessad');

Route::get('/services/picors', function () {
    return view('services.picors');
})->name('services.picors');

// Dispositifs PICORS
Route::get('/services/picors/ueea', function () {
    return view('services.dispositifs.ueea');
})->name('services.ueea');

Route::get('/services/picors/uema', function () {
    return view('services.dispositifs.uema');
})->name('services.uema');

Route::get('/services/picors/emasco', function () {
    return view('services.dispositifs.emasco');
})->name('services.emasco');

// MAS - Maison d'Accueil Spécialisée
Route::get('/services/mas', function () {
    return view('services.mas');
})->name('services.mas');

// Activités
use App\Http\Controllers\ActivityController;
Route::get('/activites', [ActivityController::class, 'index'])->name('activites.index');

// Galerie
use App\Http\Controllers\GalleryController;
Route::get('/galerie', [GalleryController::class, 'index'])->name('galerie.index');

// Nous soutenir
Route::get('/nous-soutenir', function () {
    return view('soutien.index');
})->name('soutien.index');

Route::get('/devenir-membre', function () {
    return view('soutien.devenir-membre');
})->name('soutien.devenir-membre');

Route::get('/faire-un-don', function () {
    return view('soutien.faire-un-don');
})->name('soutien.faire-un-don');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Routes historiques (redirections pour maintenir la compatibilité)
Route::get('/qui-sommes-nous/histoire', function () {
    return redirect('/association');
});

Route::get('/qui-sommes-nous/valeurs', function () {
    return redirect('/association');
});

Route::get('/structures/ime-impro', function () {
    return redirect('/services/ime-impro');
});

Route::get('/structures/sessad', function () {
    return redirect('/services/sessad');
});

// Routes pour les dispositifs (maintenir pour compatibilité)
Route::get('/dispositifs', [DispositifController::class, 'index'])->name('dispositifs.index');
Route::get('/dispositifs/ueea', [DispositifController::class, 'ueea'])->name('services.ueea.direct');
Route::get('/dispositifs/uema', [DispositifController::class, 'uema'])->name('services.uema.direct');
Route::get('/dispositifs/emasco', [DispositifController::class, 'emasco'])->name('services.emasco.direct');
Route::get('/dispositifs/{slug}', [DispositifController::class, 'show'])->name('dispositifs.show');

// Routes d'authentification
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/create-default-admin', [AuthController::class, 'createDefaultAdmin'])->name('create-default-admin');

// Routes temporaires pour le développement (uniquement en mode local)
if (app()->environment('local')) {
    // Route temporaire pour promouvoir un utilisateur en admin
    Route::get('/make-admin/{email}', function ($email) {
        $user = \App\Models\User::where('email', $email)->first();
        if (!$user) {
            return "Utilisateur avec l'email '$email' non trouvé.";
        }
        
        $user->is_admin = true;
        $user->save();
        
        return "L'utilisateur '$email' est maintenant administrateur. <a href='/login'>Se connecter</a>";
    })->where('email', '.*');

    // Route de setup automatique
    Route::get('/setup-admin', function () {
        try {
            // Créer la table users si elle n'existe pas
            if (!Schema::hasTable('users')) {
                Schema::create('users', function ($table) {
                    $table->id();
                    $table->string('name');
                    $table->string('email')->unique();
                    $table->timestamp('email_verified_at')->nullable();
                    $table->string('password');
                    $table->boolean('is_admin')->default(false);
                    $table->rememberToken();
                    $table->timestamps();
                });
            }

            // Ajouter la colonne is_admin si elle n'existe pas
            if (!Schema::hasColumn('users', 'is_admin')) {
                Schema::table('users', function ($table) {
                    $table->boolean('is_admin')->default(false);
                });
            }

            // Supprimer l'admin existant s'il existe
            \App\Models\User::where('email', 'admin@maisonbenjamin.org')->delete();

            // Créer l'administrateur
            $admin = \App\Models\User::create([
                'name' => 'Administrateur',
                'email' => 'admin@maisonbenjamin.org',
                'password' => \Hash::make('admin123'),
                'is_admin' => true,
                'email_verified_at' => now(),
            ]);

            // Connecter automatiquement l'admin
            Auth::login($admin);

            return redirect()->route('admin.dashboard')->with('success', 'Admin créé et connecté automatiquement !');
            
        } catch (Exception $e) {
            return "Erreur: " . $e->getMessage();
        }
    });
}

// Routes Administration (protégées)
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/contacts', [App\Http\Controllers\AdminController::class, 'contacts'])->name('contacts');
    Route::get('/contact/{contact}', [App\Http\Controllers\AdminController::class, 'voirContact'])->name('contact.voir');
    Route::post('/contact/{contact}/marquer-traite', [App\Http\Controllers\AdminController::class, 'marquerTraite'])->name('contact.marquer-traite');
    Route::get('/dispositifs', [App\Http\Controllers\AdminController::class, 'dispositifs'])->name('dispositifs');
    Route::post('/dispositif/{dispositif}/toggle', [App\Http\Controllers\AdminController::class, 'toggleDispositif'])->name('dispositif.toggle');
});

// Route pour tester la connexion à la base de données
Route::get('/test-database', [TestDatabaseController::class, 'testConnection']);
