<?php
	include_once 'C:\xampp\htdocs\louled\Controller\AvisC.php';
	$AvisC=new AvisC();
	$listeAvis=$AvisC->afficheravis(); 
	
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajouteravis.php">Ajouter un avis</a></button>
		<center><h1>Liste des utilisateur</h1></center>
		<table border="1" align="center">
			<tr>
				<th>id_perso</th>
				<th>message</th>
                <th>date_avis</th>
				
				<th>Modifier</th>
				<th>Supprimer</th>
                
			</tr>
			<?php
				foreach($listeAvis as $AVIS){
			?>
			<tr>
				<td><?php echo $AVIS['id_avis']; ?></td>
				<td><?php echo $AVIS['id_perso']; ?></td>
				<td><?php echo $AVIS['message']; ?></td>
				<td><?php echo $AVIS['date_avis']; ?></td>
            
				
				<td>
                <a href="modifieravis.php?id_avis=<?php echo $AVIS['id_avis']; ?>">modifier</a>

				</td>
				<td>
					<a href="supprimeravis.php?id_avis=<?php echo $AVIS['id_avis']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
