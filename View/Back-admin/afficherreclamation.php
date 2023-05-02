<?php
	include_once 'C:\xampp\htdocs\louled\Controller\ReclamationC.php';
	$ReclamationC=new ReclamationC();
	$listeRec=$ReclamationC->afficherReclamation(); 
	
?>
<html>
	<head></head>
	<body>
	    <button><a href="ajouterreclamation.php">Ajouter un reclamation</a></button>
		<center><h1>Liste des utilisateur</h1></center>
		<table border="1" align="center">
			<tr>
				<th>id_reclamation</th>
				<th>nom_perso</th>
                <th>prenom_perso</th>
				<th>email</th>
                <th>num_tel</th>
				<th>message</th>
                <th>date de reclamation</th>
				<th>Modifier</th>
				<th>Supprimer</th>
                
			</tr>
			<?php
				foreach($listeRec as $RECLAMATION){
			?>
			<tr>
				<td><?php echo $RECLAMATION['id_reclamation']; ?></td>
				<td><?php echo $RECLAMATION['nom_perso']; ?></td>
				<td><?php echo $RECLAMATION['prenom_perso']; ?></td>
				<td><?php echo $RECLAMATION['email']; ?></td>
                <td><?php echo $RECLAMATION['num_tel']; ?></td>
                <td><?php echo $RECLAMATION['message']; ?></td>
				<td><?php echo $RECLAMATION['daterec']; ?></td>
				
				<td>
                <a href="modifierreclamation.php?id_reclamation=<?php echo $RECLAMATION['id_reclamation']; ?>">modifier</a>

				</td>
				<td>
					<a href="Supprimerreclamation.php?id_reclamation=<?php echo $RECLAMATION['id_reclamation']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
