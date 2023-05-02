<?php
    include_once 'C:\xampp\htdocs\louled\Model\User.php';
    include_once 'C:\xampp\htdocs\louled\Controller\UserC.php';

    $error = "";

    // create offre
    $user = null;

 $a=$_GET["id_user"];

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

            $userer = new User(
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
         
            $UserC->modifieruser($userer, $a);
            header("Location:afficheruser.php");
        }
        else
            $error = "Missing information";

    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficheruser.php">Retour à la afficheruser</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_GET["id_user"])){
				$user = $UserC->recupereruser($_GET["id_user"]);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
          
				<tr>
                    <td>
                    <label for="username">username:
                        </label>
                    </td>
                    <td><input type="text" name="username" id="username" value="<?php echo $user['username']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                    <label for="nom">nom
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" value="<?php echo $user['nom']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                    <label for="prenom">prenom
                        </label>
                    </td>
                    <td><input type="text" name="prenom" id="prenom" value="<?php echo $user['prenom']; ?>" maxlength="20"></td>
                </tr>
                <td>
                        <label for="date_nais">date_nais
                        </label>
                    </td>
                    <td><input type="text" name="date_nais" id="date_nais" value="<?php echo $user['date_nais']; ?>" maxlength="20"></td>
                </tr>              
                <tr>
                <td>
                        <label for="email">email
                        </label>
                    </td>
                    <td><input type="text" name="email" id="email" value="<?php echo $user['email']; ?>" maxlength="20"></td>
                </tr>              
                <tr>
                <td>
                        <label for="photo">photo
                        </label>
                    </td>
                    <td><input type="text" name="photo" id="photo" value="<?php echo $user['photo']; ?>" maxlength="20"></td>
                </tr>              
                <tr>
                <td>
                        <label for="adresse">adresse
                        </label>
                    </td>
                    <td><input type="text" name="adresse" id="adresse" value="<?php echo $user['adresse']; ?>" maxlength="20"></td>
                </tr>              
                           
                <td>
                        <label for="password">password
                        </label>
                    </td>
                    <td><input type="text" name="password" id="password" value="<?php echo $user['password']; ?>" maxlength="20"></td>
                </tr>      
                <td>
                        <label for="num_tel">num_tel
                        </label>
                    </td>
                    <td><input type="text" name="num_tel" id="num_tel" value="<?php echo $user['num_tel']; ?>" maxlength="20"></td>
                </tr>      
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
    </body>
</html>