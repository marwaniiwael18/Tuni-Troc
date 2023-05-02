<?php
    include_once 'C:\xampp\htdocs\louled\Model\User.php';
    include_once 'C:\xampp\htdocs\louled\Controller\UserC.php';

    $error = "";

    // create offre
    $user = null;


if (strlen($_POST["password"])<8)
{ 
    echo '<script>alert("passwor must be more then 8 characters")</script>';
}
else
{


    // create an instance of the controller
    $UserC = new UserC();
    if (
		isset($_POST["username"]) &&		
        isset($_POST["nom"]) &&
		isset($_POST["prenom"]) &&
        isset($_POST["date_nais"]) &&
        isset($_POST["photo"]) &&		
        isset($_POST["adresse"]) &&
		isset($_POST["email"]) &&
        isset($_POST["password"]) &&
        isset($_POST["num_tel"])
    ) if (
        isset($_POST["username"]) &&		
        isset($_POST["nom"]) &&
		isset($_POST["prenom"]) &&
        isset($_POST["date_nais"]) &&
        isset($_POST["photo"]) &&		
        isset($_POST["adresse"]) &&
		isset($_POST["email"]) &&
        isset($_POST["password"]) &&
        isset($_POST["num_tel"])
    ){
            $user = new User(
               $_POST["nom"],		
                $_POST["prenom"] ,
                $_POST["date_nais"],
                $_POST["email"],
                $_POST["photo"],	
                $_POST["adresse"],
                $_POST["username"],
                $_POST["password"],
                $_POST["num_tel"] 
              );
              $a=$_POST['dateModification'];
            $UserC->ajouterUser($user);
            header("Location:Afficheruser.php");
        }
        else
            $error = "Missing information";
        }
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="AfficherListeOffre.php">Retour à la liste des offres</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
  
        
        <form action="" method="POST">
            <table border="1" align="center">
                
				<tr>
                    <td>
                    <label >username:
                        </label>
                    </td>
                    <td><input type="text" name="username" id="username" maxlength="20">
                </td>
                </tr>
                <tr>
                    <td>
                    <label >nom :
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" maxlength="20">
                </td>
                </tr>
                <tr>
                    <td>
                        <label >prenom :
                        </label>
                    </td>
                    <td><input type="text" name="prenom" id="prenom" maxlength="20">
                </td>
                </tr>       
                
                <tr>
                    <td>
                        <label >date_nais :
                        </label>
                    </td>
                    <td><input type="text" name="date_nais" id="date_nais" maxlength="20">
                </td>
                </tr>  
                <tr>
                    <td>
                        <label >photo :
                        </label>
                    </td>
                    <td><input type="text" name="photo" id="photo" maxlength="20">
                </td>
                </tr>
                <tr>
                    <td>
                        <label >adresse :
                        </label>
                    </td>
                    <td><input type="text" name="adresse" id="adresse" maxlength="20">
                </td>
                </tr>
                <tr>
                    <td>
                        <label >email :
                        </label>
                    </td>
                    <td><input type="text" name="email" id="email" maxlength="20">
                </td>
                </tr>
                <tr>
                    <td>
                        <label >password :
                        </label>
                    </td>
                    <td><input type="text" name="password" id="password" maxlength="20">
                </td>
                </tr>
                <tr>
                    <td>
                        <label >num_tel :
                        </label>
                    </td>
                    <td><input type="text" name="num_tel" id="num_tel" maxlength="20">
                </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>

    </body>
</html>