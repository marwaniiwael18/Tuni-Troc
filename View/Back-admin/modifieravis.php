<?php
    include_once 'C:\xampp\htdocs\louled\Model\Avis.php';
    include_once 'C:\xampp\htdocs\louled\Controller\AvisC.php';

    $error = "";

    // create offre
    $Avis = null;

    $a=$_GET["id_avis"];


    // create an instance of the controller
    $AvisC = new AvisC();
    if (
		isset($_POST["id_perso"]) &&		
        isset($_POST["message"]) 	
        
    ) if (
        isset($_POST["id_perso"]) &&		
        isset($_POST["message"]) 
    ){
      
            $Avis = new Avis(
               $_POST["id_perso"],		
                $_POST["message"]
   
                
              );
          
            $AvisC->modifieravis($Avis, $a);
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
        <button><a href="afficheravis.php">Retour à la afficheravis</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_GET["id_avis"])){
				$aviss = $AvisC->recupereravis($_GET["id_avis"]);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
          
				<tr>
                    <td>
                    <label for="id_perso">nom_perso:
                        </label>
                    </td>
                    <td><input type="text" name="id_perso" id="id_perso" value="<?php echo $aviss['id_perso']; ?>" maxlength="20"></td>
                </tr>
               
            
                       
                <tr>
                <td>
                        <label for="message">message
                        </label>
                    </td>
                    <td><input type="text" name="message" id="message" value="<?php echo $aviss['message']; ?>" maxlength="20"></td>
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