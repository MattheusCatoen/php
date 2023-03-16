<?php
// Récupère le code HTML de la page actuelle
$html = file_get_contents('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

// Affiche le code HTML récupéré
echo $html;
?>
