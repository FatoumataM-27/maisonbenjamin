# Liste Complète des Fichiers à Uploader sur OVH

## 📂 Structure du Projet Laravel - Maison Benjamin

---

## ✅ FICHIERS RACINE

```
✓ .htaccess                    (Redirection vers /public)
✓ .ovhconfig                   (Configuration PHP 8.2)
✓ artisan                      (CLI Laravel)
✓ composer.json                (Dépendances PHP)
✓ composer.lock                (Versions exactes des dépendances)
```

---

## 📁 DOSSIER : `app/`

### `app/Console/`
```
✓ app/Console/Kernel.php
```

### `app/Exceptions/`
```
✓ app/Exceptions/Handler.php
```

### `app/Http/Controllers/`
```
✓ app/Http/Controllers/ActivityController.php
✓ app/Http/Controllers/AdminController.php
✓ app/Http/Controllers/AuthController.php
✓ app/Http/Controllers/ContactController.php
✓ app/Http/Controllers/Controller.php
✓ app/Http/Controllers/DispositifController.php
✓ app/Http/Controllers/GalleryController.php
✓ app/Http/Controllers/HomeController.php
✓ app/Http/Controllers/PresentationController.php
✓ app/Http/Controllers/StructureController.php
✓ app/Http/Controllers/TestDatabaseController.php
```

### `app/Http/Middleware/`
```
✓ app/Http/Middleware/AdminMiddleware.php
✓ app/Http/Middleware/Authenticate.php
✓ app/Http/Middleware/EncryptCookies.php
✓ app/Http/Middleware/PreventRequestsDuringMaintenance.php
✓ app/Http/Middleware/RedirectIfAuthenticated.php
✓ app/Http/Middleware/TrimStrings.php
✓ app/Http/Middleware/TrustProxies.php
✓ app/Http/Middleware/ValidateSignature.php
✓ app/Http/Middleware/VerifyCsrfToken.php
```

### `app/Http/Requests/`
```
✓ app/Http/Requests/ContactRequest.php
```

### `app/Http/`
```
✓ app/Http/Kernel.php
```

### `app/Mail/`
```
✓ app/Mail/ContactFormMail.php
```

### `app/Models/`
```
✓ app/Models/Activity.php
✓ app/Models/Contact.php
✓ app/Models/Dispositif.php
✓ app/Models/User.php
✓ app/Models/WordPressPost.php
```

### `app/Providers/`
```
✓ app/Providers/AppServiceProvider.php
✓ app/Providers/AuthServiceProvider.php
✓ app/Providers/EventServiceProvider.php
✓ app/Providers/RouteServiceProvider.php
```

### `app/Services/`
```
✓ app/Services/CacheService.php
```

---

## 📁 DOSSIER : `bootstrap/`

```
✓ bootstrap/app.php
✓ bootstrap/cache/.gitignore   (Créer le dossier cache vide)
```

**Note** : Les fichiers `bootstrap/cache/*.php` ne doivent PAS être uploadés (générés automatiquement)

---

## 📁 DOSSIER : `config/`

```
✓ config/app.php
✓ config/auth.php
✓ config/cache.php
✓ config/database.php
✓ config/filesystems.php
✓ config/logging.php
✓ config/mail.php
✓ config/queue.php
✓ config/services.php
✓ config/session.php
✓ config/view.php
```

---

## 📁 DOSSIER : `database/`

### `database/migrations/`
```
✓ database/migrations/2023_09_01_000001_create_users_table.php
✓ database/migrations/2023_09_01_000002_create_dispositifs_table.php
✓ database/migrations/2023_09_01_000003_create_contacts_table.php
✓ database/migrations/2023_09_01_000004_add_is_admin_to_users_table.php
✓ database/migrations/2025_12_11_121956_create_activities_table.php
✓ database/migrations/2025_12_18_125632_create_activities_table.php
```

### `database/seeders/`
```
✓ database/seeders/ActivitiesTableSeeder.php
```

**❌ NE PAS UPLOADER** :
```
✗ database/database.sqlite     (Base de données locale)
```

---

## 📁 DOSSIER : `public/`

### Fichiers racine de public/
```
✓ public/index.php             (Point d'entrée principal)
✓ public/.htaccess
✓ public/favicon.ico
✓ public/robots.txt
```

### `public/css/`
```
✓ public/css/app.css
✓ Tous les fichiers CSS compilés
```

### `public/js/`
```
✓ public/js/app.js
✓ Tous les fichiers JS compilés
```

### `public/images/`
```
✓ Toutes les images du site
✓ public/images/logo-white.png
✓ public/images/hero-bg.jpg
✓ public/images/dispositifs/*.jpg
✓ public/images/dispositifs/partners/*.jpg
✓ public/images/videos/*.mp4
```

### `public/build/` (si utilisation de Vite)
```
✓ public/build/manifest.json
✓ public/build/assets/*
```

---

## 📁 DOSSIER : `resources/`

### `resources/views/`
```
✓ Tous les fichiers .blade.php
✓ resources/views/layouts/
✓ resources/views/admin/
✓ resources/views/auth/
✓ resources/views/contact/
✓ resources/views/dispositifs/
✓ resources/views/gallery/
✓ resources/views/home/
✓ resources/views/presentation/
✓ resources/views/structure/
```

### `resources/css/`
```
✓ Tous les fichiers CSS sources
```

### `resources/js/`
```
✓ Tous les fichiers JS sources
```

---

## 📁 DOSSIER : `routes/`

```
✓ routes/web.php
✓ routes/api.php
✓ routes/console.php
✓ routes/channels.php
```

---

## 📁 DOSSIER : `storage/`

**IMPORTANT** : Uploader la STRUCTURE vide (pas les fichiers temporaires)

```
✓ storage/app/.gitignore
✓ storage/app/public/.gitignore
✓ storage/framework/.gitignore
✓ storage/framework/cache/.gitignore
✓ storage/framework/sessions/.gitignore
✓ storage/framework/views/.gitignore
✓ storage/logs/.gitignore
```

**❌ NE PAS UPLOADER** :
```
✗ storage/logs/*.log           (Logs locaux)
✗ storage/framework/cache/*    (Cache temporaire)
✗ storage/framework/sessions/* (Sessions locales)
✗ storage/framework/views/*    (Vues compilées)
```

---

## ❌ DOSSIERS/FICHIERS À NE JAMAIS UPLOADER

### Dépendances
```
✗ node_modules/                (Pas nécessaire en production)
```

### ⚠️ CAS PARTICULIER : vendor/

**Deux scénarios selon votre hébergement :**

| Accès SSH disponible | Action |
|---------------------|--------|
| ✅ OUI (hébergement Pro/VPS) | ✗ Ne pas uploader, régénérer avec `composer install` |
| ❌ NON (hébergement mutualisé OVH) | ✅ **UPLOADER vendor/ complet** (~15 000 fichiers) |

**Votre cas : Hébergement OVH mutualisé SANS SSH**
➡️ ✅ **VOUS DEVEZ UPLOADER le dossier vendor/**

### Fichiers de configuration locale
```
✗ .env                         (Contient des secrets locaux)
✗ .env.backup
✗ .env.production              (Créer un nouveau .env sur le serveur)
```

### Fichiers de versioning et IDE
```
✗ .git/
✗ .gitignore
✗ .gitattributes
✗ .idea/
✗ .vscode/
```

### Fichiers de développement
```
✗ .phpunit.result.cache
✗ .editorconfig
✗ phpunit.xml
✗ package.json
✗ package-lock.json
✗ vite.config.js
✗ postcss.config.js
✗ tailwind.config.js
```

### Fichiers temporaires et de test
```
✗ *.log
✗ *.tmp
✗ *.temp
✗ test_*
✗ backup_*
✗ *.backup
✗ database/database.sqlite
```

### Dossiers de déploiement local
```
✗ deploy/                      (Builds locaux)
```

---

## 📊 RÉSUMÉ (Hébergement OVH mutualisé SANS SSH)

| Catégorie | À uploader | À NE PAS uploader |
|-----------|------------|-------------------|
| **Fichiers racine** | .htaccess, .ovhconfig, artisan, composer.json, composer.lock | .env, .git, .gitignore |
| **Code applicatif** | app/, routes/, config/ | - |
| **Base de données** | database/migrations/, database/seeders/ | database/*.sqlite |
| **Vues et assets** | resources/, public/ | - |
| **Framework** | bootstrap/app.php, storage/ (structure complète) | storage/logs/*.log, storage/framework/cache/*, storage/framework/sessions/*, storage/framework/views/* |
| **Dépendances** | **vendor/ (OBLIGATOIRE)** | node_modules/ |

---

## 🚀 APRÈS L'UPLOAD (Version SANS SSH)

### 1. Créer le fichier .env

Via FileZilla, uploadez un fichier `.env` avec vos paramètres de production (voir GUIDE-FILEZILLA.md)

### 2. Créer et exécuter setup.php

Créez un fichier `setup.php` à la racine :

```php
<?php
require __DIR__.'/vendor/autoload.php';
echo "<h1>Configuration du site Maison Benjamin</h1>";

// Générer APP_KEY
if (empty(file_get_contents(__DIR__.'/.env')) || strpos(file_get_contents(__DIR__.'/.env'), 'APP_KEY=base64:') === false) {
    exec('cd ' . __DIR__ . ' && php artisan key:generate', $output, $return);
    echo $return === 0 ? "<p>✅ Clé générée</p>" : "<p>❌ Erreur clé</p>";
} else {
    echo "<p>✅ APP_KEY OK</p>";
}

// Tester BDD
try {
    $app = require_once __DIR__.'/bootstrap/app.php';
    $kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
    $kernel->bootstrap();
    DB::connection()->getPdo();
    echo "<p>✅ Connexion BDD OK</p>";
} catch (Exception $e) {
    echo "<p>❌ Erreur BDD : " . $e->getMessage() . "</p>";
}

// Migrations
exec('cd ' . __DIR__ . ' && php artisan migrate --force', $output, $return);
echo $return === 0 ? "<p>✅ Migrations OK</p>" : "<p>❌ Erreur migrations</p>";

// Cache
exec('cd ' . __DIR__ . ' && php artisan config:cache', $output);
exec('cd ' . __DIR__ . ' && php artisan route:cache', $output);
exec('cd ' . __DIR__ . ' && php artisan view:cache', $output);
echo "<p>✅ Cache généré</p>";

echo "<h2>✅ Installation terminée !</h2>";
echo "<p><strong>⚠️ Supprimez setup.php maintenant !</strong></p>";
?>
```

### 3. Exécuter via le navigateur

Visitez `https://votre-domaine.com/setup.php`

### 4. Supprimer setup.php

**Important** : Supprimez le fichier `setup.php` via FileZilla pour des raisons de sécurité.

---

**Taille estimée du transfert** : ~150-250 MB (AVEC vendor/)
**Temps de transfert estimé** : 30-60 minutes (selon votre connexion)
**Nombre de fichiers** : ~20 000 fichiers (dont ~15 000 dans vendor/)

✅ **Checklist avant upload** :
- [ ] Identifiants FTP OVH prêts
- [ ] FileZilla installé et configuré
- [ ] Fichiers locaux à jour
- [ ] Base de données MySQL créée sur OVH
- [ ] Identifiants de la base de données notés

---

**Document créé pour le déploiement du site Maison Benjamin sur OVH**
