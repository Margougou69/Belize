<?php 

if (!empty($_POST)) {
	if (!empty($_POST['update_title']) && !empty($_POST['update_text']) && !empty($_POST['update_description']) && !empty($_POST['update_price']) && !empty($_POST['update_quantity'])) {

		// echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";

		if (!empty($_FILES)) {

			$today = date("DMjGisTY");
			$uploaddir = 'upload/';
			$nameImage = $_FILES['update_image']['name'];
			$replace_image = str_replace(".", "date=" . $today . "d.", $nameImage);
			$uploadfile = $uploaddir . basename($replace_image);

			if (move_uploaded_file($_FILES['update_image']['tmp_name'], $uploadfile)) {

				$sqlUpdateArticle = "UPDATE article SET title_article='" . $_POST['update_title'] . "',text_article='" . $_POST['update_text'] . "',image_article='" . $replace_image . "',price_article='" . $_POST['update_price'] . "',description_article='" . $_POST['update_description'] . "',quantity='" . $_POST['update_quantity'] . "',id_utilisateur='" . $_SESSION['id_utilisateur'] . "' WHERE id_article = " . $_GET['id_article'] . "";
				
				if (mysqli_query($connexion, $sqlUpdateArticle)) {
					echo "  Article modifié";

				} else {
					echo "echec requete SQL";
				}


			}

		} else {
			// echo "R.A.S";
		}
	}
}