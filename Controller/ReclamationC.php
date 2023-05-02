<?php
	include 'C:\xampp\htdocs\louled\Config.php';
	include_once 'C:\xampp\htdocs\louled\Model\Reclamation.php';
	class ReclamationC {
		function nbreclamation(){
			$sql="SELECT count(*) as rc from reclamation";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Reclamation=$query->fetch();
				return $Reclamation;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function afficherReclamation(){
			$sql="SELECT * FROM reclamation";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerreclamation($id_reclamation){
			$sql="DELETE FROM reclamation WHERE id_reclamation=:id_reclamation";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_reclamation', $id_reclamation);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterreclamation($Reclamation){
			$sql="INSERT INTO reclamation (nom_perso, prenom_perso, email, num_tel, message,id_user) 
			VALUES ( :nom_perso, :prenom_perso, :email, :num_tel, :message, :id_user)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom_perso' => $Reclamation->getnom(),
					'prenom_perso' => $Reclamation->getprenom(),
					'email' => $Reclamation->getemail(),
                    'num_tel' => $Reclamation->getnum_tel(),
                    'message' => $Reclamation->getmessage(),
					'id_user' => $Reclamation->getid_user()
                    
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererreclamation($id_reclamation){
			$sql="SELECT * from reclamation where id_reclamation=$id_reclamation";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Reclamation=$query->fetch();
				return $Reclamation;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierreclamation($Reclamation, $id_reclamation){
         
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE reclamation SET 
		                nom_perso= :nom_perso,
		                prenom_perso= :prenom_perso,
		                email= :email,
                        num_tel= :num_tel,
                        message= :message
					WHERE id_reclamation= :id_reclamation'
				);
				$query->execute([
                    'nom_perso' => $Reclamation->getnom(),
					'prenom_perso' => $Reclamation->getprenom(),
                    'email' => $Reclamation->getemail(),
                    'num_tel' => $Reclamation->getnum_tel(),
                    'message' => $Reclamation->getmessage(),
                    'id_reclamation' => $id_reclamation
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}

	}
?>