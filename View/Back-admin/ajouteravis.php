<?php
    include_once 'C:\xampp\htdocs\louled\Model\Avis.php';
    include_once 'C:\xampp\htdocs\louled\Controller\AvisC.php';

    $error = "";

    // create offre
    $avis = null;



    // create an instance of the controller
    $AvisC = new AvisC();
    if (
		isset($_POST["id_perso"]) &&		
        isset($_POST["message"]) 	
        
    ) if (
        isset($_POST["id_perso"]) &&		
        isset($_POST["message"]) 
    ){
      
            $avis = new Avis(
               $_POST["id_perso"],		
                $_POST["message"]
           
                
              );
              
            $AvisC->ajouteravis($avis);
            header("Location:afficheravis.php");
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
                    <label >id_perso:
                        </label>
                    </td>
                    <td><input type="text" name="id_perso" id="id_perso" maxlength="20">
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