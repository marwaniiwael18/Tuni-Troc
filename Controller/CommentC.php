<?php
	include_once 'C:\xampp\htdocs\louled\Config.php';
	include_once 'C:\xampp\htdocs\louled\Model\Comment.php';
	class CommentC {
		function affichercomment(){
			$sql="SELECT * FROM comments";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimercomment($id_comment){
			$sql="DELETE FROM comments WHERE id_comment=:id_comment";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_comment', $id_comment);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajoutercomment($Comment){
			$sql="INSERT INTO comments (	id_user, id_poste, message, photo) 
			VALUES ( :id_user, :id_poste, :message, :photo)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_user' => $Comment->getid_user(),
                    'id_poste' => $Comment->getid_poste(),
					'message' => $Comment->getmessage(),
					'photo' => $Comment->getphoto()
                    
                    
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperercomment($id_comment){
			$sql="SELECT * from comments where id_comment=$id_comment";
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
		function recuperercommentforposte($id_poste){
			$sql="SELECT max(nb_likes),id_comment from comments where id_poste=$id_poste";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$comment=$query->fetch();
				return $comment;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifiercomment($Comment, $id_comment){
         
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE comments SET 
		                
		                message= :message,
		                photo= :photo
                        
					WHERE id_comment= :id_comment'
				);
				$query->execute([
                    
					'message' => $Comment->getmessage(),
                    'photo' => $Comment->getphoto(),
                    'id_comment' => $id_comment
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}

		function cancellike($id_comment){
         
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE comments SET 
		                
		                nb_likes=nb_likes-1
		               
                        
					WHERE id_comment= :id_comment'
				);
				$query->execute([
                    
					
                  
                    'id_comment' => $id_comment
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
			function recupererlike($id_comment,$id_user){
				$sql="SELECT * from likecomment where id_comment=$id_comment and id_user=$id_user";
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
			function likecomment($id_comment,$id_user){
			
				$sql="INSERT INTO likecomment ( id_comment,	id_user) 
				VALUES ( :id_comment, :id_user)";
				$db = config::getConnexion();
				try{
					$query = $db->prepare($sql);
					$query->execute([
						'id_comment' => $id_comment,
						'id_user' => $id_user
		
					]);			
				}
				catch (Exception $e){
					echo 'Erreur: '.$e->getMessage();
				}	
			}
			function dislikecomment($id_comment,$id_user){
				$sql="DELETE FROM likecomment WHERE id_comment=:id_comment and id_user=:id_user";
				$db = config::getConnexion();
				$req=$db->prepare($sql);
				$req->bindValue(':id_comment', $id_comment);
				$req->bindValue(':id_user', $id_user);
				try{
					$req->execute();
				}
				catch(Exception $e){
					die('Erreur:'. $e->getMessage());
				}
			}
			function addlike($id_comment){
			 
		
				try {
					$db = config::getConnexion();
					$query = $db->prepare(
						'UPDATE comments SET 
							
							nb_likes=nb_likes+1
						   
							
						WHERE id_comment= :id_comment'
					);
					$query->execute([
						
						
					  
						'id_comment' => $id_comment
					]);
					echo $query->rowCount() . " records UPDATED successfully <br>";
				} catch (PDOException $e) {
					$e->getMessage();
				}
			  
			}
		}

	
?>