<?php
	include_once 'C:\xampp\htdocs\louled\Controller\PosteC.php';
	$PosteC=new PosteC();
	$listePoste=$PosteC->afficherPoste(); 
	
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajouterposte.php">Ajouter un poste</a></button>
		<center><h1>Liste des utilisateur</h1></center>
		<table border="1" align="center">
			<tr>
				<th>id_poste</th>
                <th>id_user</th>
				<th>message</th>
                <th>photo</th>
                			
                <th>nb_comments</th>
                <th>nb_likes</th>
                <th>date_avis</th>
	

				<th>Modifier</th>
				<th>Supprimer</th>
                <th>comment to this poste</th>
                
			</tr>
			<?php
				foreach($listePoste as $Poste){
			?>
			<tr>
				<td><?php echo $Poste['id_poste']; ?></td>
				<td><?php echo $Poste['id_user']; ?></td>
				<td><?php echo $Poste['message']; ?></td>
				<td><?php echo $Poste['photo']; ?></td>
                <td><?php echo $Poste['nb_comments']; ?></td>
                <td><?php echo $Poste['nb_likes']; ?></td>
                <td><?php echo $Poste['date_poste']; ?></td>
 
				
				<td>
                <a href="modifierposte.php?id_poste=<?php echo $Poste['id_poste']; ?>">modifier</a>

				</td>
				<td>
					<a href="supprimerposte.php?id_poste=<?php echo $Poste['id_poste']; ?>">Supprimer</a>
				</td>
                <td>
                <a href="ajoutercomment.php?id_poste=<?php echo $Poste['id_poste']; ?>">comment</a>

				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
