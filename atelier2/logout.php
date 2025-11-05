<?php
// Supprime le cookie d'authentification
setcookie('authToken', '', time() - 3600, '/', '', false, true); // Cookie expiré par la valeur -3600. Il n'est donc plus valable
setcookie('authH', '', time() - 3600, '/', '', false, true);
// Redirection vers la page de connexion
header('Location: index.php');
exit();
?>
