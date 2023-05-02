<?php
	include_once 'C:\xampp\htdocs\louled\Config.php';
	include_once 'C:\xampp\htdocs\louled\Model\Publicite.php';
	class PubliciteC {


		

		function afficherrandpub(){

			
			$sql="SELECT * from publicite ORDER BY RAND() LIMIT 1";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Publicite=$query->fetch();
				return $Publicite;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function afficherPublicite(){
			$sql="SELECT * FROM publicite";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerpublicite($id_publicite){
			$sql="DELETE FROM publicite WHERE id_publicite=:id_publicite";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_publicite', $id_publicite);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterpublicite($publicite){
			$sql="INSERT INTO publicite (	id_sponsor, nom_publicite, photo, prix) 
			VALUES ( :id_sponsor, :nom_publicite, :photo, :prix)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_sponsor' => $publicite->getid_sponsor(),
					'nom_publicite' => $publicite->getnom_publicite(),
                    'photo' => $publicite->getphoto(),
					'prix' => $publicite->getprix()
 
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererpublicite($id_publicite){
			$sql="SELECT * from publicite where id_publicite=$id_publicite";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Publicite=$query->fetch();
				return $Publicite;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierpublicite($Publicite, $id_publicite){
         
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE publicite SET 
		                nom_publicite= :nom_publicite,
                        prix= :prix

					WHERE id_publicite= :id_publicite'
				);
				$query->execute([
                    
					'nom_publicite' => $Publicite->getnom_publicite(),
                    'prix' => $Publicite->getprix(),
                    'id_publicite' => $id_publicite
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}

	}
?>