<?php
	include 'C:\xampp\htdocs\louled\Controller\ReclamationC.php';
	$ReclamationC=new ReclamationC();

if (isset($_GET["id_repondre"])){
	$ReclamationC->supprimerrepondre($_GET["id_repondre"]);
	header('Location:afficherrepondre.php');
}

?>