<?php
	include 'C:\xampp\htdocs\louled\Controller\CommentC.php';
	$CommentC=new CommentC();

if (isset($_GET["id_comment"])){
	$CommentC->supprimercomment($_GET["id_comment"]);
	header('Location:affichercomment.php');
}

?>