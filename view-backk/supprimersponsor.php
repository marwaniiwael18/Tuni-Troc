<?php
	include 'C:\xampp\htdocs\louled\Controller\SponsorC.php';
	$SponsorC=new SponsorC();

if (isset($_GET["id_sponsor"])){
	$SponsorC->supprimersponsor($_GET["id_sponsor"]);
	header('Location:affichersponsor.php');
}

?>