
<?php

if (!empty($_GET['id_article']))  {

$id_article_fiche = $_GET['id_article'];
$sqlArticleFiche = "SELECT * FROM `article` WHERE `id_article` = ".$id_article_fiche." "; 
$articleFiche_table2 = mysqli_query($connexion  , $sqlArticleFiche);
$resultat_articleFiche = mysqli_fetch_all($articleFiche_table2, MYSQLI_ASSOC);

}else {
header("Location: index.php");

}