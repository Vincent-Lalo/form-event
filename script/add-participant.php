<?php

require '../db/db.php';
if(!empty($_POST['last_name']) && !empty($_POST['first_name']) && !empty($_POST['email']) && !empty($_POST['phone'])){
	$user_exist = true;
	$sql = "SELECT lastname, firstname, email
			FROM participants";
	$req = mysqli_query($connexion, $sql)or die(mysqli_error($connexion));
	while($data = mysqli_fetch_array($req)){
		if($data['lastname'] == $_POST['last_name'] && $data['firstname'] == $_POST['first_name'] || $data['email'] == $_POST['email']){
			$user_exist = false;
			break;
		}
	}
	if($user_exist){

		$last_name  = mysqli_real_escape_string($connexion, $_POST['last_name']);
		$first_name = mysqli_real_escape_string($connexion, $_POST['first_name']);
		$email      = mysqli_real_escape_string($connexion, $_POST['email']);
		$phone      = mysqli_real_escape_string($connexion, str_replace(' ', '', $_POST['phone']));

		$sql = "INSERT INTO participants
		VALUES (NULL, '".$last_name."', '".$first_name."', '".$email."', '".$phone."')";
		$req = mysqli_query($connexion, $sql)or die(mysqli_error($connexion));
		if($req){
			echo "Nous avons reçu votre invitation";
		}
	}
	else{
		echo "Cette personne participe déjà à l'évenement";
	}
}

?>