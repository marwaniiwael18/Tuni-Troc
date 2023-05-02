<?php
	include_once 'C:\xampp\htdocs\louled\Controller\CommentC.php';
	$CommentC=new CommentC();
	$listeComments=$CommentC->affichercomment(); 
	
?>
<html>
	<head></head>
	<body>

		<center><h1>Liste des utilisateur</h1></center>
		<table border="1" align="center">
			<tr>
                  <th>id_comment</th>
				<th>id_poste</th>
                <th>id_user</th>
				<th>message</th>
                <th>photo</th>
                <th>nb_likes</th>
                <th>date_comment</th>
	

				<th>Modifier</th>
				<th>Supprimer</th>
               
                
			</tr>
			<?php
				foreach($listeComments as $Comment){
			?>
			<tr>
            <td><?php echo $Comment['id_comment']; ?></td>
				<td><?php echo $Comment['id_poste']; ?></td>
				<td><?php echo $Comment['id_user']; ?></td>
				<td><?php echo $Comment['message']; ?></td>
				<td><?php echo $Comment['photo']; ?></td>
                <td><?php echo $Comment['nb_likes']; ?></td>
                <td><?php echo $Comment['date_comment']; ?></td>
 
				
				<td>
                <a href="modifiercomment.php?id_comment=<?php echo $Comment['id_comment']; ?>">modifier</a>

				</td>
				<td>
					<a href="supprimercomment.php?id_comment=<?php echo $Comment['id_comment']; ?>">Supprimer</a>
				</td>
               
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
