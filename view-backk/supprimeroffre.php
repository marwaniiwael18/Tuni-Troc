<?php
	include 'C:\xampp\htdocs\louled\Controller\OffreC.php';
	$OffreC=new OffreC();

if (isset($_GET["id_offre"])){
	$OffreC->supprimeroffre($_GET["id_offre"]);
	header('Location:afficheroffre.php');
}

?>