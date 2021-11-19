<?php 
require_once('../lib/connexion.php');

if (!empty($_POST)) {

    if (!empty($_POST['title']) && !empty($_POST['text']) && !empty($_POST['price']) && !empty($_POST['description']) && !empty($_POST['quantity']) && !empty($_FILES['image']['name'])) {

        $uploaddir = 'upload/';
        $uploadfile = $uploaddir . basename($_FILES['image']['name']);
        
    //    upload/test.jpg 
    
       
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
            echo "Le fichier est valide, et a été téléchargé
                   avec succès. Voici plus d'informations :\n";
        } else {
            echo "Attaque potentielle par téléchargement de fichiers.
                  Voici plus d'informations :\n";
        }
        
        echo 'Voici quelques informations de débogage :';
        print_r($_FILES);
        
        echo '</pre>';
        
        
        

        $sqlCreationArticle =  "INSERT INTO `article` (`id_article`, `title_article`, `text_article`, `image_article`, `price_article`, `description_article`, `quantity`, `id_utilisateur`) VALUES (NULL, '" .$_POST["title"]."', '" .$_POST["text"]."', '".$_FILES['image']['name']."', '" .$_POST["price"]."', '" .$_POST["description"]."', '" .$_POST["quantity"]."', '" .$_SESSION["id_utilisateur"]."')";
        
        if (mysqli_query($connexion, $sqlCreationArticle)) {
            echo "test4";

            // si la requete mysqli_query fonctionne, alors...
            // header('Location: confirmation.php? title=' . $_POST["title"] . '');
        } else {
            echo "echec";
        }
    }
}

