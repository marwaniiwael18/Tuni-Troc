<?php
	include_once 'C:\xampp\htdocs\louled\Config.php';
	include_once 'C:\xampp\htdocs\louled\Model\Poste.php';
	class PosteC {
		function afficherPoste(){
			$sql="SELECT * FROM poste";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerposte($id_poste){
			$sql="DELETE FROM poste WHERE id_poste=:id_poste";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_poste', $id_poste);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterposte($Poste){
			$sql="INSERT INTO poste (	id_user, message, photo) 
			VALUES ( :id_user, :message, :photo)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_user' => $Poste->getid_user(),
					'message' => $Poste->getmessage(),
					'photo' => $Poste->getphoto()
                    
                    
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererPoste($id_poste){
			$sql="SELECT * from poste where id_poste=$id_poste";
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




		
		function modifierposte($Poste, $id_poste){
         
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE poste SET 
		                
		                message= :message,
		                photo= :photo
                        
					WHERE id_poste= :id_poste'
				);
				$query->execute([
                    
					'message' => $Poste->getmessage(),
                    'photo' => $Poste->getphoto(),
                    'id_poste' => $id_poste
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}

		function recupererlike($id_poste,$id_user){
			$sql="SELECT * from likeposte where id_poste=$id_poste and id_user=$id_user";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$like=$query->fetch();
				return $like;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function likeposte($id_poste,$id_user){
		
			$sql="INSERT INTO likeposte ( id_poste,	id_user) 
			VALUES ( :id_poste, :id_user)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_poste' => $id_poste,
					'id_user' => $id_user
	
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}	
		}
		function dislikeposte($id_poste,$id_user){
			$sql="DELETE FROM likeposte WHERE id_poste=:id_poste and id_user=:id_user";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_poste', $id_poste);
			$req->bindValue(':id_user', $id_user);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function addlike($id_poste){
         
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE poste SET 
		                
		                nb_likes=nb_likes+1
		               
                        
					WHERE id_poste= :id_poste'
				);
				$query->execute([
                    
					
                  
                    'id_poste' => $id_poste
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}

		function ajouternbcomment($id_poste){
         
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE poste SET 
		                
		                nb_comments=nb_comments+1
		               
                        
					WHERE id_poste= :id_poste'
				);
				$query->execute([
                    
					
                  
                    'id_poste' => $id_poste
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}


		function cancelcomment($id_poste){
         
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE poste SET 
		                
		                nb_comments=nb_comments-1
		               
                        
					WHERE id_poste= :id_poste'
				);
				$query->execute([
                    
					
                  
                    'id_poste' => $id_poste
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}

		function cancellike($id_poste){
         
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE poste SET 
		                
		                nb_likes=nb_likes-1
		               
                        
					WHERE id_poste= :id_poste'
				);
				$query->execute([
                    
					
                  
                    'id_poste' => $id_poste
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}

	}
?>