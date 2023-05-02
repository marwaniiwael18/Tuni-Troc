<?php
    include_once 'C:\xampp\htdocs\louled\Model\Reclamation.php';
    include_once 'C:\xampp\htdocs\louled\Controller\ReclamationC.php';

    $error = "";

    // create offre
    $reclamation = null;

    $a=$_GET["id_reclamation"];


    // create an instance of the controller
    $ReclamationC = new ReclamationC();
    if (
		isset($_POST["nom_perso"]) &&		
        isset($_POST["prenom_perso"]) &&
		isset($_POST["email"]) &&
        isset($_POST["num_tel"]) &&
        isset($_POST["message"]) 	
        
    ) if (
        isset($_POST["nom_perso"]) &&		
        isset($_POST["prenom_perso"]) &&
		isset($_POST["email"]) &&
        isset($_POST["num_tel"]) &&
        isset($_POST["message"]) 
    ){
      
            $reclamation = new Reclamation(
               $_POST["prenom_perso"],		
                $_POST["nom_perso"] ,
                $_POST["message"],
                $_POST["email"],
                $_POST["num_tel"]
                
              );
          
            $ReclamationC->modifierreclamation($reclamation, $a);
            header("Location:afficherreclamation.php");

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
        <button><a href="afficherreclamation.php">Retour à la afficherreclamation</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_GET["id_reclamation"])){
				$reclamation = $ReclamationC->recupererreclamation($_GET["id_reclamation"]);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
          
				<tr>
                    <td>
                    <label for="nom_perso">nom_perso:
                        </label>
                    </td>
                    <td><input type="text" name="nom_perso" id="nom_perso" value="<?php echo $reclamation['nom_perso']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                    <label for="prenom_perso">prenom_perso
                        </label>
                    </td>
                    <td><input type="text" name="prenom_perso" id="prenom_perso" value="<?php echo $reclamation['prenom_perso']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                    <label for="email">email
                        </label>
                    </td>
                    <td><input type="text" name="email" id="email" value="<?php echo $reclamation['email']; ?>" maxlength="20"></td>
                </tr>
                <td>
                        <label for="num_tel">num_tel
                        </label>
                    </td>
                    <td><input type="text" name="num_tel" id="num_tel" value="<?php echo $reclamation['num_tel']; ?>" maxlength="20"></td>
                </tr>              
                <tr>
                <td>
                        <label for="message">message
                        </label>
                    </td>
                    <td><input type="text" name="message" id="message" value="<?php echo $reclamation['message']; ?>" maxlength="20"></td>
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