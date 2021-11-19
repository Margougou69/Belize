<?php


// $sqlRequestSelectArticle = "SELECT * FROM `article`";
$sqlRequestSelectArticle = "SELECT * FROM `article` INNER JOIN `utilisateur` on article.id_utilisateur = utilisateur.id_utilisateur";
 
$user_table2 = mysqli_query($connexion, $sqlRequestSelectArticle);
$resultat_article = mysqli_fetch_all($user_table2, MYSQLI_ASSOC);

// echo "<pre>";
// print_r($resultat_article);
// echo "</pre>";