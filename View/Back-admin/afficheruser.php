<?php
	include_once 'C:\xampp\htdocs\louled\Controller\UserC.php';
	$Userc=new UserC();
	$listeUser=$Userc->afficherUser(); 
	
?>
<html>
	<head></head>
	<body>
	    <button><a href="Ajouteruser.php">Ajouter un user</a></button>
		<center><h1>Liste des utilisateur</h1></center>
		<table border="1" align="center">
			<tr>
				<th>id_user</th>
				<th>nom</th>
                <th>prenom</th>
				<th>date_nais</th>
                <th>email</th>
				<th>photo</th>
                <th>adresse</th>
				<th>username</th>
                <th>password</th>
				<th>num_tel</th>
                <th>active</th>
				<th>code_recup</th>
				<th>Modifier</th>
				<th>Supprimer</th>
                
			</tr>
			<?php
				foreach($listeUser as $USER){
			?>
			<tr>
				<td><?php echo $USER['id_user']; ?></td>
				<td><?php echo $USER['nom']; ?></td>
				<td><?php echo $USER['prenom']; ?></td>
				<td><?php echo $USER['date_nais']; ?></td>
                <td><?php echo $USER['email']; ?></td>
				<td> <img src="images/<?php echo $USER['photo']; ?>" alt="" width="50" height="50"></td>
				<td><?php echo $USER['adresse']; ?></td>
				<td><?php echo $USER['username']; ?></td>
                <td><?php echo $USER['password']; ?></td>
				<td><?php echo $USER['num_tel']; ?></td>
				<td><?php echo $USER['active']; ?></td>
				<td><?php echo $USER['code_recup']; ?></td>
				<td>
                <a href="modifieruser.php?id_user=<?php echo $USER['id_user']; ?>">modifier</a>

				</td>
				<td>
					<a href="SupprimerUSER.php?id_user=<?php echo $USER['id_user']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
