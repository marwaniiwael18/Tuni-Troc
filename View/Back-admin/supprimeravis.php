<?php
	include 'C:\xampp\htdocs\louled\Controller\AvisC.php';
	$AvisC=new AvisC();

if (isset($_GET["id_avis"])){
	$AvisC->supprimeravis($_GET["id_avis"]);
	header('Location:afficheravis.php');
}

?>