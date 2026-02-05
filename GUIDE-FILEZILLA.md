u # Guide de Déploiement avec FileZilla sur OVH

## 📋 Prérequis

Avant de commencer, assurez-vous d'avoir :
- ✅ FileZilla installé sur votre ordinateur ([Télécharger ici](https://filezilla-project.org/))
- ✅ Vos identifiants FTP OVH (disponibles dans votre espace client)
- ✅ Tous les fichiers du projet à jour dans `C:\Users\Angelique\maisonbejaminsite`

---

## 🔐 Étape 1 : Configuration de la connexion FTP dans FileZilla

### Méthode 1 : Connexion rapide

1. Ouvrez **FileZilla**
2. Dans la barre du haut, remplissez :
   - **Hôte** : `ftp.votre-domaine.com` (ou l'adresse fournie par OVH, ex: `ftp.cluster999.hosting.ovh.net`)
   - **Identifiant** : Votre identifiant FTP OVH
   - **Mot de passe** : Votre mot de passe FTP
   - **Port** : `21` (FTP standard)
3. Cliquez sur **Connexion rapide**

### Méthode 2 : Créer un favori (recommandé)

1. Ouvrez **FileZilla**
2. Cliquez sur **Fichier** → **Gestionnaire de Sites**
3. Cliquez sur **Nouveau site**
4. Nommez-le "Maison Benjamin - OVH"
5. Configurez :
   - **Protocole** : FTP - Protocole de transfert de fichiers
   - **Hôte** : `ftp.votre-domaine.com`
   - **Port** : `21`
   - **Chiffrement** : Utiliser FTP explicite sur TLS si disponible
   - **Type d'authentification** : Normale
   - **Identifiant** : Votre identifiant FTP
   - **Mot de passe** : Votre mot de passe FTP
6. Cliquez sur **Connexion**

---

## 📁 Étape 2 : Navigation vers le bon répertoire

Une fois connecté :

### Sur le panneau de DROITE (serveur distant) :
- Naviguez vers `/home/maisoiy/www`
- C'est ici que tous vos fichiers doivent être uploadés

### Sur le panneau de GAUCHE (votre ordinateur) :
- Naviguez vers `C:\Users\Angelique\maisonbejaminsite`

---

## 📤 Étape 3 : Upload des fichiers

### ⚠️ IMPORTANT : Fichiers à NE PAS uploader

**Ne transférez JAMAIS ces dossiers/fichiers :**
- ❌ `node_modules/` (pas nécessaire en production)
- ❌ `.env` (contient des infos locales sensibles - créer un nouveau sur le serveur)
- ❌ `.git/` (historique Git inutile)
- ❌ `.idea/` et `.vscode/` (fichiers IDE)
- ❌ `database/database.sqlite` (base de données locale)
- ❌ `storage/logs/*.log` (logs locaux)
- ❌ `storage/framework/cache/*` (cache temporaire)
- ❌ `storage/framework/sessions/*` (sessions locales)
- ❌ `storage/framework/views/*` (vues compilées locales)
- ❌ Fichiers `*.backup`, `backup_*`, `test_*`

### ✅ Version simplifiée (SANS accès SSH)

**Puisque vous n'avez PAS d'accès SSH sur votre hébergement OVH mutualisé, vous DEVEZ aussi transférer :**
- ✅ `vendor/` (dépendances PHP - environ 15 000 fichiers, comptez 30-60 minutes de transfert)

### ✅ Fichiers ESSENTIELS à uploader

Sélectionnez et transférez **tous** ces dossiers et fichiers :

#### Fichiers racine :
- ✅ `.htaccess`
- ✅ `.ovhconfig`
- ✅ `artisan`
- ✅ `composer.json`
- ✅ `composer.lock`
- ✅ `index.php` (s'il existe à la racine)

#### Dossiers complets (avec tous leurs sous-dossiers) :
- ✅ `app/` (tous les contrôleurs, modèles, middleware, etc.)
- ✅ `bootstrap/` (fichiers de démarrage Laravel)
- ✅ `config/` (toute la configuration)
- ✅ `database/migrations/` (seulement les migrations, pas le .sqlite)
- ✅ `database/seeders/`
- ✅ `public/` (point d'entrée, assets, images)
- ✅ `resources/` (vues Blade, CSS, JS sources)
- ✅ `routes/` (web.php, api.php, etc.)
- ✅ `storage/` (structure complète)
  - `storage/app/`
  - `storage/framework/` (mais PAS les fichiers cache/sessions/views à l'intérieur)
  - `storage/logs/`
- ✅ `vendor/` **(IMPORTANT : à transférer car pas d'accès SSH - le plus long !)**

### 🖱️ Procédure de transfert :

1. **Sélection multiple** :
   - Maintenez `Ctrl` enfoncé
   - Cliquez sur chaque dossier/fichier à transférer

2. **Transfert** :
   - Faites un **clic droit** sur la sélection
   - Choisissez **"Upload"**
   - OU glissez-déposez du panneau gauche vers le panneau droit

3. **Attendre la fin** :
   - Le transfert peut prendre **30-60 minutes** (avec vendor/) selon votre connexion
   - Une barre de progression s'affiche en bas
   - **Ne fermez pas FileZilla pendant le transfert !**
   - **Le dossier vendor/ est le plus long** (environ 15 000 fichiers)

---

## 🔧 Étape 4 : Configuration POST-UPLOAD (SANS SSH)

### ⚠️ Important
Votre hébergement OVH mutualisé **n'a PAS d'accès SSH**. Nous allons donc configurer via l'interface web OVH et un fichier PHP.

### 4.1 - Créer le fichier .env via FileZilla

1. Sur votre ordinateur, créez un nouveau fichier `.env` dans `C:\Users\Angelique\maisonbejaminsite`
2. Copiez-y le contenu ci-dessous (en modifiant les valeurs)
3. Uploadez-le sur le serveur via FileZilla dans `/home/maisoiy/www/`

**Contenu minimal du .env :**
```env
APP_NAME="Maison Benjamin"
APP_ENV=production
APP_KEY=
APP_DEBUG=false
APP_URL=https://votre-domaine.com

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=error

DB_CONNECTION=mysql
DB_HOST=votre-serveur-mysql.mysql.db
DB_PORT=3306
DB_DATABASE=nom_base_de_donnees
DB_USERNAME=utilisateur_bdd
DB_PASSWORD=mot_de_passe_bdd

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MAIL_MAILER=smtp
MAIL_HOST=ssl0.ovh.net
MAIL_PORT=465
MAIL_USERNAME=contact@votre-domaine.com
MAIL_PASSWORD=votre-mot-de-passe-mail
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS=contact@votre-domaine.com
MAIL_FROM_NAME="${APP_NAME}"
```

### 4.2 - Créer un script d'installation setup.php

Créez un fichier `setup.php` sur votre ordinateur avec ce contenu, puis uploadez-le à la racine du site :

```php
<?php
// Script d'installation pour OVH (sans SSH)
require __DIR__.'/vendor/autoload.php';

echo "<h1>Configuration du site Maison Benjamin</h1>";

// 1. Générer la clé d'application si manquante
if (empty(file_get_contents(__DIR__.'/.env')) || strpos(file_get_contents(__DIR__.'/.env'), 'APP_KEY=base64:') === false) {
    echo "<p>⚙️ Génération de la clé APP_KEY...</p>";
    exec('cd ' . __DIR__ . ' && php artisan key:generate', $output, $return);
    if ($return === 0) {
        echo "<p>✅ Clé générée avec succès</p>";
    } else {
        echo "<p>❌ Erreur lors de la génération de la clé</p>";
    }
} else {
    echo "<p>✅ APP_KEY déjà configurée</p>";
}

// 2. Tester la connexion à la base de données
try {
    $app = require_once __DIR__.'/bootstrap/app.php';
    $kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
    $kernel->bootstrap();

    DB::connection()->getPdo();
    echo "<p>✅ Connexion à la base de données réussie</p>";
} catch (Exception $e) {
    echo "<p>❌ Erreur de connexion BDD : " . $e->getMessage() . "</p>";
}

// 3. Lancer les migrations
echo "<p>⚙️ Exécution des migrations...</p>";
exec('cd ' . __DIR__ . ' && php artisan migrate --force', $output, $return);
if ($return === 0) {
    echo "<p>✅ Migrations exécutées</p>";
} else {
    echo "<p>❌ Erreur lors des migrations</p>";
}

// 4. Optimiser
echo "<p>⚙️ Optimisation...</p>";
exec('cd ' . __DIR__ . ' && php artisan config:cache', $output);
exec('cd ' . __DIR__ . ' && php artisan route:cache', $output);
exec('cd ' . __DIR__ . ' && php artisan view:cache', $output);
echo "<p>✅ Cache généré</p>";

// 5. Vérifier les permissions
$storageWritable = is_writable(__DIR__.'/storage');
$cacheWritable = is_writable(__DIR__.'/bootstrap/cache');

echo "<p>Permissions storage/ : " . ($storageWritable ? "✅ OK" : "❌ Non accessible en écriture") . "</p>";
echo "<p>Permissions bootstrap/cache/ : " . ($cacheWritable ? "✅ OK" : "❌ Non accessible en écriture") . "</p>";

echo "<hr>";
echo "<h2>✅ Installation terminée !</h2>";
echo "<p><strong>⚠️ IMPORTANT : Supprimez ce fichier setup.php pour des raisons de sécurité !</strong></p>";
echo "<p><a href='/'>Accéder au site</a></p>";
?>
```

### 4.3 - Exécuter le script d'installation

1. Ouvrez votre navigateur
2. Allez sur : `https://votre-domaine.com/setup.php`
3. Le script va automatiquement :
   - Générer la clé APP_KEY
   - Tester la connexion MySQL
   - Exécuter les migrations
   - Générer les caches
   - Vérifier les permissions

### 4.4 - Supprimer le fichier setup.php

**⚠️ IMPORTANT pour la sécurité :**
Une fois l'installation terminée, supprimez le fichier `setup.php` via FileZilla.

---

## ✅ Étape 5 : Vérification

1. Ouvrez votre navigateur
2. Accédez à `https://votre-domaine.com`
3. Vérifiez que le site s'affiche correctement

---

## 🐛 Dépannage

### Erreur 500
- Vérifiez le fichier `.env` (clé APP_KEY générée ?)
- Consultez les logs via FileZilla : téléchargez `storage/logs/laravel.log`
- Vérifiez que `vendor/` a bien été uploadé complètement
- Vérifiez les permissions via votre espace client OVH (dossiers en 755)

### Page blanche
- Vérifiez que `.htaccess` est bien présent à la racine
- Vérifiez que `.ovhconfig` est configuré pour PHP 8.2
- Vérifiez que `public/index.php` existe

### Erreur de base de données
- Vérifiez les identifiants dans `.env`
- Testez la connexion MySQL depuis l'espace client OVH
- Relancez le script `setup.php`

### CSS/JS ne se chargent pas
- Vérifiez que le dossier `public/` a bien été uploadé complètement
- Vérifiez le fichier `public/build/manifest.json`
- Videz le cache de votre navigateur (Ctrl+F5)

### Le script setup.php ne s'exécute pas
- Vérifiez que la fonction `exec()` est autorisée sur votre hébergement
- Si `exec()` est désactivé, contactez le support OVH pour demander un accès SSH
- Alternative : utilisez l'outil en ligne de commande de l'espace client OVH

---

## 📞 Support

Pour toute aide supplémentaire :
- **Documentation OVH** : https://docs.ovh.com/fr/hosting/
- **Documentation Laravel** : https://laravel.com/docs/10.x/deployment
- **Support OVH** : Depuis votre espace client

---

## 🔄 Mises à jour futures

Pour mettre à jour le site après modifications :

1. Ouvrez FileZilla
2. Connectez-vous au serveur
3. Transférez **uniquement les fichiers modifiés**
4. Si vous avez modifié des fichiers de configuration ou ajouté des routes :
   - Créez un fichier `clear-cache.php` :
   ```php
   <?php
   require __DIR__.'/vendor/autoload.php';
   $app = require_once __DIR__.'/bootstrap/app.php';
   $kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
   $kernel->call('config:clear');
   $kernel->call('cache:clear');
   $kernel->call('view:clear');
   $kernel->call('route:clear');
   echo "Cache vidé avec succès !";
   ```
   - Uploadez-le et visitez `https://votre-domaine.com/clear-cache.php`
   - Supprimez-le ensuite

---

**📝 Note** : Conservez ce guide pour vos futurs déploiements !
