<?php
require_once('mysqlconnection.php');

if(isset($_POST['register'])) {
	$firstname = trim($_POST['firstname']);
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$tel = trim($_POST['tel']);
	
	$simbfIns = $db->prepare("INSERT INTO apprenant(firstname, name, email, tel) VALUE(?, ?, ?, ?)");
	$simbfIns->bindValue('1', $firstname);
	$simbfIns->bindValue('2', $name);
	$simbfIns->bindValue('3', $email);
	$simbfIns->bindValue('4', $tel);
	$simbfIns->execute();

	if($simbfIns) {
		$message = "Inscription réussit.";
	} else {
		$message = "Une erreur est survenue lors de l'enregistrement de l'apprenant.";
	}
	header('LOCATION: register.php?message='.$message);
}
