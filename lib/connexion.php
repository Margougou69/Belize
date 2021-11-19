<?php 



$connexion = mysqli_connect($servername, $username, $password, $databaseName) or die();
    //  echo "Vous êtes connecté";

$sqlRequestSelectUser = "SELECT * FROM `utilisateur`";
$user_table = mysqli_query($connexion, $sqlRequestSelectUser);
$resultat = mysqli_fetch_all($user_table, MYSQLI_ASSOC);
    
      
      