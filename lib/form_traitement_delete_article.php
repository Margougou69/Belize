<?php 

if (!empty($_POST['delete_article'])) {
    $sqlDeleteArticle = "DELETE FROM `article` WHERE id_article = '" . $_GET['id_article'] . "'";

    if (mysqli_query($connexion, $sqlDeleteArticle)) {

        // il faut rapprocher les ":" sinon ça ne marche pas header("Location: index.php");

        header("Location: index.php");

    } else {
        echo "echec requete SQL";
    }
}