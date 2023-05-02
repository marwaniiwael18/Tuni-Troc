<?php
    include_once 'C:\xampp\htdocs\louled\Model\Reclamation.php';
    include_once 'C:\xampp\htdocs\louled\Controller\ReclamationC.php';

    $error = "";

    // create offre
    $reclamation = null;



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
              
            $ReclamationC->ajouterreclamation($reclamation);
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
        <button><a href="AfficherListeOffre.php">Retour à la liste des offres</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
  
        
        <form action="" method="POST">
            <table border="1" align="center">
                
				<tr>
                    <td>
                    <label >nom_perso:
                        </label>
                    </td>
                    <td><input type="text" name="nom_perso" id="nom_perso" maxlength="20">
                </td>
                </tr>
                <tr>
                    <td>
                    <label >prenom_perso :
                        </label>
                    </td>
                    <td><input type="text" name="prenom_perso" id="prenom_perso" maxlength="20">
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
                        <label >num_tel :
                        </label>
                    </td>
                    <td><input type="text" name="num_tel" id="num_tel" maxlength="20">
                </td>
                </tr>  
                <tr>
                    <td>
                        <label >message :
                        </label>
                    </td>
                    <td><input type="text" name="message" id="message" maxlength="20">
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