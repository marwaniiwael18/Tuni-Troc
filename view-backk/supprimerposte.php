<?php
	include 'C:\xampp\htdocs\louled\Controller\PosteC.php';
	$PosteC=new PosteC();

if (isset($_GET["id_poste"])){
	$PosteC->supprimerposte($_GET["id_poste"]);
	header('Location:afficherposte.php');
}

?>