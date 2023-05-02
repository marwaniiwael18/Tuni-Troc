
<?php
session_start();

if(isset($_SESSION["id_user"])) {
}else{
  session_destroy();
	header('Location: signin.php');

    
}
?>

<?php
	include 'C:\xampp\htdocs\louled\Controller\UserC.php';
	$userC=new UserC();

if (isset($_GET["id_user"])){
 if ($_GET["active"]==1 )
 {
    $userC->banuser($_GET["id_user"]);
    header('Location: afficheruser.php');

 }
 else
 {
    $userC->unbanuser($_GET["id_user"]);
    header('Location: afficheruser.php');

 }
	
}

?>