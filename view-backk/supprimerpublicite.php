<?php
	include 'C:\xampp\htdocs\louled\Controller\PubliciteC.php';
	$PubliciteC=new PubliciteC();

if (isset($_GET["id_publicite"])){
	$PubliciteC->supprimerpublicite($_GET["id_publicite"]);
	header('Location:afficherpublicite.php');
}

?>