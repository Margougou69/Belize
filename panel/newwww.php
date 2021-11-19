<?php
session_start();
require_once('lib/var.php');
require_once('lib/connexion.php');




foreach ($resultat as  $tableau) {
    echo "<pre>";
    print_r($tableau);
    echo "</pre>";

}

foreach ($resultat2 as  $tableau2) {
    echo "<pre>";
    print_r($tableau2);
    echo "</pre>";

}



