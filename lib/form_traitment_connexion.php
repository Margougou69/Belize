<?php

 

if(!empty($_POST)){
    if(!empty($_POST['email_connexion']) && !empty($_POST['password_connexion'])){
        $email = $_POST['email_connexion'];
        $pwd = $_POST['password_connexion'];

        $pwd_sha = sha1($pwd); 

        $sqlSelectEmail = "SELECT * FROM utilisateur WHERE email ='".$email."' AND password ='".$pwd_sha."' LIMIT 1";
        $emailResultat = mysqli_query($connexion, $sqlSelectEmail);
        $resultat = mysqli_fetch_all($emailResultat, MYSQLI_ASSOC);


        if(mysqli_num_rows($emailResultat) > 0){
        	// echo "Formulaire de connexion rempli";

	        // echo "<pre>";
	        // print_r($resultat);
	        // echo "</pre>";

			$_SESSION['id_utilisateur'] = $resultat[0]['id_utilisateur'];
	        $_SESSION['prenom'] = $resultat[0]['prenom'];
			$_SESSION['nom'] = $resultat[0]['nom'];
			$_SESSION['email'] =  $resultat[0]['email'];
			$_SESSION['admin'] =  $resultat[0]['droit'];


	        // echo "<pre>";
	        // print_r($_SESSION);
	        // echo "</pre>";

			$_POST = array();
 
        }else{ 
        	echo "email ou mdp incorrect"; 
        }
    } 
}