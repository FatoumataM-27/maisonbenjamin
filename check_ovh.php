<?php
/**
 * Script de vérification pour le déploiement sur OVH
 * Placez ce fichier à la racine de votre hébergement et accédez-y via votre navigateur.
 */

$requirements = [
    'PHP Version >= 8.2' => version_compare(PHP_VERSION, '8.2.0', '>='),
    'Extension BCMath' => extension_loaded('bcmath'),
    'Extension Ctype' => extension_loaded('ctype'),
    'Extension Fileinfo' => extension_loaded('fileinfo'),
    'Extension JSON' => extension_loaded('json'),
    'Extension Mbstring' => extension_loaded('mbstring'),
    'Extension OpenSSL' => extension_loaded('openssl'),
    'Extension PDO' => extension_loaded('pdo'),
    'Extension Tokenizer' => extension_loaded('tokenizer'),
    'Extension XML' => extension_loaded('xml'),
    'Extension Curl' => extension_loaded('curl'),
    'Dossier storage/ est accessible en écriture' => is_writable(__DIR__ . '/storage'),
    'Dossier bootstrap/cache/ est accessible en écriture' => is_writable(__DIR__ . '/bootstrap/cache'),
];

echo "<h1>Vérification du déploiement Maison Benjamin</h1>";
echo "<ul>";
foreach ($requirements as $label => $success) {
    echo "<li>" . ($success ? "✅" : "❌") . " $label</li>";
}
echo "</ul>";

if (!in_array(false, $requirements)) {
    echo "<p style='color: green;'><strong>Félicitations ! Votre serveur est prêt pour Laravel.</strong></p>";
} else {
    echo "<p style='color: red;'><strong>Certains prérequis manquent. Veuillez vérifier votre configuration OVH.</strong></p>";
}

echo "<h2>Informations Serveur</h2>";
echo "Version PHP : " . PHP_VERSION . "<br>";
echo "Interface SAPI : " . PHP_SAPI . "<br>";
