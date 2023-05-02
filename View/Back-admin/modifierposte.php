<?php
    include_once 'C:\xampp\htdocs\louled\Model\Poste.php';
    include_once 'C:\xampp\htdocs\louled\Controller\PosteC.php';

    $error = "";

    // create offre
    $Poste = null;

    $a=$_GET["id_poste"];


    // create an instance of the controller
    $PosteC = new PosteC();
    if (
		isset($_POST["photo"]) &&		
        isset($_POST["message"]) 	
        
    ) if (
        isset($_POST["photo"]) &&		
        isset($_POST["message"]) 
    ){
      
            $Poste = new Poste(
               $_POST["id_user"],		
                $_POST["photo"],
                $_POST["message"]
   
                
              );
          
            $PosteC->modifierposte($Poste, $a);
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
        <button><a href="afficherposte.php">Retour à la afficherposte</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_GET["id_poste"])){
				$postes = $PosteC->recupererPoste($_GET["id_poste"]);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
          
				<tr>
                    <td>
                    <label for="photo">photo:
                        </label>
                    </td>
                    <td><input type="text" name="photo" id="photo" value="<?php echo $postes['photo']; ?>" maxlength="20"></td>
                </tr>
               
            
                       
                <tr>
                <td>
                        <label for="message">message
                        </label>
                    </td>
                    <td><input type="text" name="message" id="message" value="<?php echo $postes['message']; ?>" maxlength="20"></td>
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