<?php
	include 'C:\xampp\htdocs\louled\Controller\ReclamationC.php';
	$ReclamationC=new ReclamationC();

if (isset($_GET["id_reclamation"])){
	$ReclamationC->supprimerreclamation($_GET["id_reclamation"]);
	header('Location:afficherreclamation.php');
}

?>