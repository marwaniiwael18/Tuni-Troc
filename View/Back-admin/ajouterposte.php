<?php
    include_once 'C:\xampp\htdocs\louled\Model\Poste.php';
    include_once 'C:\xampp\htdocs\louled\Controller\PosteC.php';

    $error = "";

    // create offre
    $Poste = null;


    // create an instance of the controller
    $PosteC = new PosteC();
    if (
		isset($_POST["id_user"]) &&
        isset($_POST["photo"]) &&		
        isset($_POST["message"]) 	
        
    ) if (
        isset($_POST["id_user"]) &&
        isset($_POST["photo"]) &&		
        isset($_POST["message"]) 
    ){
      
            $Poste = new Poste(
               $_POST["id_user"],		
                $_POST["photo"],
                $_POST["message"]
           
                
              );
              
            $PosteC->ajouterposte($Poste);
            header("Location:afficherposte.php");
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
        <button><a href="afficherposte.php">Retour à la liste des postes</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
  
        
        <form action="" method="POST">
            <table border="1" align="center">
                
				<tr>
                    <td>
                    <label >id_user:
                        </label>
                    </td>
                    <td><input type="text" name="id_user" id="id_user" maxlength="20">
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
               
                <td>
                    <label >photo :
                        </label>
                    </td>
                    <td><input type="text" name="photo" id="photo" maxlength="20">
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