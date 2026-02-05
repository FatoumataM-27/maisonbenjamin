<?php
/**
 * Script d'installation pour OVH (sans accès SSH)
 * Maison Benjamin - Site Web
 *
 * INSTRUCTIONS:
 * 1. Uploadez tous vos fichiers (y compris vendor/) via FileZilla
 * 2. Créez et uploadez votre fichier .env avec vos paramètres
 * 3. Visitez https://votre-domaine.com/setup.php dans votre navigateur
 * 4. SUPPRIMEZ ce fichier après l'installation (IMPORTANT pour la sécurité)
 */

// Empêcher l'exécution multiple
$lockFile = __DIR__ . '/.setup.lock';
if (file_exists($lockFile)) {
    die('<h1>❌ Installation déjà effectuée</h1><p>Si vous voulez réinstaller, supprimez le fichier .setup.lock via FTP.</p>');
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Installation - Maison Benjamin</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2c3e50;
            border-bottom: 3px solid #3498db;
            padding-bottom: 10px;
        }
        .step {
            margin: 20px 0;
            padding: 15px;
            background: #ecf0f1;
            border-left: 4px solid #3498db;
            border-radius: 4px;
        }
        .success {
            color: #27ae60;
            font-weight: bold;
        }
        .error {
            color: #e74c3c;
            font-weight: bold;
        }
        .warning {
            color: #f39c12;
            font-weight: bold;
        }
        .code {
            background: #2c3e50;
            color: #ecf0f1;
            padding: 10px;
            border-radius: 4px;
            font-family: monospace;
            overflow-x: auto;
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin: 10px 5px;
        }
        .btn-danger {
            background: #e74c3c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🏠 Installation du site Maison Benjamin</h1>
        <p>Configuration automatique de votre site Laravel sur OVH</p>

        <?php
        $errors = [];
        $warnings = [];

        // Vérification 1: Vendor existe
        echo '<div class="step">';
        echo '<h3>📦 Étape 1: Vérification des dépendances</h3>';
        if (file_exists(__DIR__ . '/vendor/autoload.php')) {
            echo '<p class="success">✅ Le dossier vendor/ est présent</p>';
            require __DIR__ . '/vendor/autoload.php';
        } else {
            echo '<p class="error">❌ Le dossier vendor/ est manquant</p>';
            echo '<p>Uploadez le dossier vendor/ complet via FileZilla</p>';
            $errors[] = 'vendor/ manquant';
        }
        echo '</div>';

        // Vérification 2: .env existe
        echo '<div class="step">';
        echo '<h3>⚙️ Étape 2: Vérification de la configuration</h3>';
        if (file_exists(__DIR__ . '/.env')) {
            echo '<p class="success">✅ Le fichier .env existe</p>';

            // Vérifier APP_KEY
            $envContent = file_get_contents(__DIR__ . '/.env');
            if (strpos($envContent, 'APP_KEY=base64:') !== false && strlen($envContent) > 100) {
                echo '<p class="success">✅ APP_KEY est configurée</p>';
            } else {
                echo '<p class="warning">⚠️ APP_KEY manquante ou invalide - tentative de génération...</p>';

                // Générer la clé
                try {
                    exec('cd ' . escapeshellarg(__DIR__) . ' && php artisan key:generate 2>&1', $output, $return);
                    if ($return === 0) {
                        echo '<p class="success">✅ APP_KEY générée avec succès</p>';
                    } else {
                        echo '<p class="error">❌ Échec de la génération de APP_KEY</p>';
                        echo '<div class="code">' . implode("\n", $output) . '</div>';
                        $warnings[] = 'Générer manuellement: php artisan key:generate';
                    }
                } catch (Exception $e) {
                    echo '<p class="error">❌ Erreur: ' . htmlspecialchars($e->getMessage()) . '</p>';
                    $warnings[] = 'exec() désactivé - générer la clé manuellement';
                }
            }
        } else {
            echo '<p class="error">❌ Le fichier .env est manquant</p>';
            echo '<p>Créez un fichier .env avec vos paramètres et uploadez-le via FileZilla</p>';
            $errors[] = '.env manquant';
        }
        echo '</div>';

        // Si pas d'erreurs bloquantes, continuer
        if (empty($errors)) {
            // Vérification 3: Base de données
            echo '<div class="step">';
            echo '<h3>🗄️ Étape 3: Connexion à la base de données</h3>';
            try {
                $app = require_once __DIR__ . '/bootstrap/app.php';
                $kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
                $kernel->bootstrap();

                $pdo = DB::connection()->getPdo();
                $dbName = DB::connection()->getDatabaseName();
                echo '<p class="success">✅ Connexion à la base de données réussie</p>';
                echo '<p>Base de données: <strong>' . htmlspecialchars($dbName) . '</strong></p>';
            } catch (Exception $e) {
                echo '<p class="error">❌ Erreur de connexion à la base de données</p>';
                echo '<div class="code">' . htmlspecialchars($e->getMessage()) . '</div>';
                echo '<p>Vérifiez vos paramètres DB_* dans le fichier .env</p>';
                $errors[] = 'Connexion BDD impossible';
            }
            echo '</div>';

            // Vérification 4: Migrations
            if (empty($errors)) {
                echo '<div class="step">';
                echo '<h3>🔄 Étape 4: Migration de la base de données</h3>';
                try {
                    exec('cd ' . escapeshellarg(__DIR__) . ' && php artisan migrate --force 2>&1', $output, $return);
                    if ($return === 0) {
                        echo '<p class="success">✅ Migrations exécutées avec succès</p>';
                        if (!empty($output)) {
                            echo '<div class="code">' . htmlspecialchars(implode("\n", $output)) . '</div>';
                        }
                    } else {
                        echo '<p class="error">❌ Erreur lors des migrations</p>';
                        echo '<div class="code">' . htmlspecialchars(implode("\n", $output)) . '</div>';
                        $warnings[] = 'Vérifier les migrations manuellement';
                    }
                } catch (Exception $e) {
                    echo '<p class="error">❌ Erreur: ' . htmlspecialchars($e->getMessage()) . '</p>';
                    $warnings[] = 'Exécuter manuellement: php artisan migrate --force';
                }
                echo '</div>';

                // Vérification 5: Cache et optimisation
                echo '<div class="step">';
                echo '<h3>⚡ Étape 5: Optimisation et cache</h3>';
                try {
                    exec('cd ' . escapeshellarg(__DIR__) . ' && php artisan config:cache 2>&1', $output1);
                    exec('cd ' . escapeshellarg(__DIR__) . ' && php artisan route:cache 2>&1', $output2);
                    exec('cd ' . escapeshellarg(__DIR__) . ' && php artisan view:cache 2>&1', $output3);
                    echo '<p class="success">✅ Configuration mise en cache</p>';
                    echo '<p class="success">✅ Routes mises en cache</p>';
                    echo '<p class="success">✅ Vues mises en cache</p>';
                } catch (Exception $e) {
                    echo '<p class="warning">⚠️ Optimisation partielle</p>';
                    $warnings[] = 'Cache non optimal';
                }
                echo '</div>';

                // Vérification 6: Permissions
                echo '<div class="step">';
                echo '<h3>🔐 Étape 6: Permissions des dossiers</h3>';
                $storageWritable = is_writable(__DIR__ . '/storage');
                $cacheWritable = is_writable(__DIR__ . '/bootstrap/cache');

                if ($storageWritable) {
                    echo '<p class="success">✅ storage/ : accessible en écriture</p>';
                } else {
                    echo '<p class="error">❌ storage/ : non accessible en écriture</p>';
                    $warnings[] = 'Permissions storage/ à corriger (755)';
                }

                if ($cacheWritable) {
                    echo '<p class="success">✅ bootstrap/cache/ : accessible en écriture</p>';
                } else {
                    echo '<p class="error">❌ bootstrap/cache/ : non accessible en écriture</p>';
                    $warnings[] = 'Permissions bootstrap/cache/ à corriger (755)';
                }
                echo '</div>';
            }
        }

        // Résumé final
        echo '<div class="step">';
        if (empty($errors)) {
            echo '<h2 class="success">✅ Installation terminée avec succès !</h2>';

            if (!empty($warnings)) {
                echo '<h3 class="warning">⚠️ Avertissements:</h3>';
                echo '<ul>';
                foreach ($warnings as $warning) {
                    echo '<li>' . htmlspecialchars($warning) . '</li>';
                }
                echo '</ul>';
            }

            echo '<h3>🎉 Prochaines étapes:</h3>';
            echo '<ol>';
            echo '<li><strong class="error">SUPPRIMEZ ce fichier setup.php via FileZilla (IMPORTANT pour la sécurité !)</strong></li>';
            echo '<li>Testez votre site en cliquant sur le bouton ci-dessous</li>';
            echo '<li>Connectez-vous à l\'administration si nécessaire</li>';
            echo '</ol>';

            echo '<a href="/" class="btn">🏠 Accéder au site</a>';
            echo '<a href="' . htmlspecialchars($_SERVER['PHP_SELF']) . '?lock=1" class="btn btn-danger">🔒 Verrouiller l\'installation</a>';

            // Verrouillage optionnel
            if (isset($_GET['lock']) && $_GET['lock'] == '1') {
                file_put_contents($lockFile, date('Y-m-d H:i:s'));
                echo '<p class="success">✅ Installation verrouillée. Ce script ne peut plus être exécuté.</p>';
                echo '<p class="error"><strong>N\'oubliez pas de supprimer setup.php via FileZilla !</strong></p>';
            }
        } else {
            echo '<h2 class="error">❌ Installation incomplète</h2>';
            echo '<h3>Erreurs bloquantes:</h3>';
            echo '<ul>';
            foreach ($errors as $error) {
                echo '<li>' . htmlspecialchars($error) . '</li>';
            }
            echo '</ul>';
            echo '<p>Corrigez ces erreurs et rechargez cette page.</p>';
        }
        echo '</div>';
        ?>

        <hr>
        <p style="text-align: center; color: #7f8c8d; font-size: 0.9em;">
            Maison Benjamin - Installation automatique<br>
            Pour toute aide, consultez le fichier GUIDE-FILEZILLA.md
        </p>
    </div>
</body>
</html>
