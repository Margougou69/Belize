<?php


if (!empty($_POST['vote_article'])) {
    $vote_value = $_POST['vote_article'];
     // rating between 1 and 5
    if ($vote_value > 0 && $vote_value < 6) {

        $sql_vote_article = "INSERT INTO `comment`(`id_comment`, `star_comment`, `id_article`, `id_utilisateur`) VALUES (null,'" . $_POST['vote_article'] . "','" . $_GET['id_article'] . "','" . $_SESSION['id_utilisateur'] . "')";
        if (mysqli_query($connexion, $sql_vote_article)) {
                // echo "le vote a été pris en compte";
        }
    } else {
        echo "Error: you must put a value between 1 and 5";

    }
}

// vérification du vote existant
$sql_vote_article = "SELECT * FROM comment WHERE id_utilisateur = '" . $_SESSION['id_utilisateur'] . "' AND id_article = '" . $_GET['id_article'] . "'";
$stock_resultat_vote = mysqli_query($connexion, $sql_vote_article);
// if (mysqli_num_rows($stock_resultat_vote) > 0) {
//     // echo "Vous avez déjà voté";
// } else {


    // average rating of one article
    $sqlCommentsAll = "SELECT * FROM comment WHERE id_article ='".$_GET['id_article']."'";
    $tableCommentsAll = mysqli_query($connexion, $sqlCommentsAll);
    $resultatCommentsAll = mysqli_fetch_all($tableCommentsAll, MYSQLI_ASSOC);
    // requete SQL pour table vote

    $star_result = array();
    // je crée un nouveau tableau
    
    $nombre_de_vote = mysqli_num_rows($tableCommentsAll);
    
    
    // exit;
    
    foreach ($resultatCommentsAll as $key_comment => $value_comment) {
    // je lance un foreach pour parcourir le tableau de la requete SQL
    
        // echo "<pre>";
        // print_r($value_comment);
        // echo "</pre>";
      
        $star_result[$value_comment['id_article']]['vote'] += $value_comment['star_comment'];
        // on insert les données du tableau de la requete SQL
        // dans un nouveau tableau créer au préalable 
        // tableau[clé que l'on définit] += (on additionne à chaque boucle) le vote de l'id_article
    
    }
    
    // echo "<pre>";
    // print_r($star_result);
    // echo "</pre>";