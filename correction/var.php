<?php  

$title = "E-Commerce"; 
$connexion = true;
$prenom = "Toto";  
// Exercice $prenom
$variable = "toto";
$prenom = "Toto";  
$age = 28;

// Exercice Formulaire POST
//  Condition If email & password not empty
$email = "";
$pwd = "";

if(!empty($_POST)){

 $email = $_POST['email'];
 $pwd = $_POST['pwd'];
 
}

?>