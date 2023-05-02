<?php
	include 'C:\xampp\htdocs\louled\Config.php';
	include_once 'C:\xampp\htdocs\louled\Model\Offre.php';
	class OffreC {
		function afficherOffre(){
			$sql="SELECT * FROM offre";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}


		function supprimeroffre($id_offre){
			$sql="DELETE FROM offre WHERE id_offre=:id_offre";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_offre', $id_offre);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}


		function ajouterOffre($offre){
			$sql="INSERT INTO offre (	nom_offre, type, id_user1, id_user2) 
			VALUES ( :nom_offre, :type, :id_user1, :id_user2)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom_offre' => $offre->getnom_offre(),
					'type' => $offre->gettype(),
					'id_user1' => $offre->getid_user1(),
                    'id_user2' => $offre->getid_user2()
                    
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}


		function recupererOffre($id_offre){
			$sql="SELECT * from offre where id_offre=$id_offre";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$offre=$query->fetch();
				return $offre;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		


		function modifieroffre($offre, $id_offre){
         
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE offre SET 
		                
		                nom_offre= :nom_offre,
		                type= :type
                       
                        
					WHERE id_offre= :id_offre'
				);
				$query->execute([
                    
					'nom_offre' => $offre->getnom_offre(),
                    'type' => $offre->gettype(),
                    'id_offre' => $id_offre
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}

	}
?>