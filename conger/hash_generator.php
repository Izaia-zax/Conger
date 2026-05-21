<?php
// Script pour générer le hash bcrypt de "1234"
$password = '1234';
$hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);

echo "Mot de passe: " . $password . "\n";
echo "Hash: " . $hash . "\n";
echo "\nVérification: " . (password_verify($password, $hash) ? "✅ OK" : "❌ ERREUR") . "\n";

// SQL à exécuter:
echo "\n=== SQL à exécuter en base ===\n";
echo "UPDATE employes SET password = '$hash' WHERE email = 'marie.rabe@rh.com';\n";
