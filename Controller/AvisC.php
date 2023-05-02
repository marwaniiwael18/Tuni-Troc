<?php
	include 'C:\xampp\htdocs\louled\Config.php';
	include_once 'C:\xampp\htdocs\louled\Model\Avis.php';
	class AvisC {
		function nbavis(){
			$sql="SELECT count(*) as av from avis ";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$avis=$query->fetch();
				return $avis;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function afficheravis(){
			$sql="SELECT * FROM avis";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimeravis($id_avis){
			$sql="DELETE FROM avis WHERE id_avis=:id_avis";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_avis', $id_avis);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouteravis($Avis){
			$sql="INSERT INTO avis (id_perso, message) 
			VALUES ( :id_perso, :message)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_perso' => $Avis->getid_user(),
                    'message' => $Avis->getmessage()
                    
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupereravis($id_avis){
			$sql="SELECT * from avis where id_avis=$id_avis";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$avis=$query->fetch();
				return $avis;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifieravis($Avis, $id_avis){
         
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE avis SET 
		           
                        message= :message
					WHERE id_avis= :id_avis'
				);
				$query->execute([
                 
                    'message' => $Avis->getmessage(),
                    'id_avis' => $id_avis
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}

	}
?>