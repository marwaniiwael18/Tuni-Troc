<?php
    include_once 'C:\xampp\htdocs\louled\Model\Comment.php';
    include_once 'C:\xampp\htdocs\louled\Controller\CommentC.php';

    $error = "";

    // create offre
    $Comment = null;

    $a=$_GET["id_comment"];


    // create an instance of the controller
    $CommentC = new CommentC();
    if (
		isset($_POST["photo"]) &&		
        isset($_POST["message"]) 	
        
    ) if (
        isset($_POST["photo"]) &&		
        isset($_POST["message"]) 
    ){
      
            $Comment = new Comment(
               $_POST["id_user"],	
               $a,
                $_POST["photo"],
                $_POST["message"]
   
                
              );
          
            $CommentC->modifiercomment($Comment, $a);
            header("Location:affichercomment.php");

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
        <button><a href="affichercomment.php">Retour à la affichercomment</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_GET["id_comment"])){
				$comments = $CommentC->recuperercomment($_GET["id_comment"]);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
          
				<tr>
                    <td>
                    <label for="photo">photo:
                        </label>
                    </td>
                    <td><input type="text" name="photo" id="photo" value="<?php echo $comments['photo']; ?>" maxlength="20"></td>
                </tr>
               
            
                       
                <tr>
                <td>
                        <label for="message">message
                        </label>
                    </td>
                    <td><input type="text" name="message" id="message" value="<?php echo $comments['message']; ?>" maxlength="20"></td>
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