<?php
		include_once 'C:\xampp\htdocs\louled\Config.php';
	include_once 'C:\xampp\htdocs\louled\Model\Sponsor.php';
	class SponsorC {
		function afficherSponsor(){
			$sql="SELECT * FROM sponsor";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimersponsor($id_sponsor){
			$sql="DELETE FROM sponsor WHERE id_sponsor=:id_sponsor";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_sponsor', $id_sponsor);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajoutersponsor($Sponsor){
			$sql="INSERT INTO sponsor (	id_user, type_sponsor, endsub_date, subscribe_price, sponsor_describe) 
			VALUES ( :id_user, :type_sponsor, :endsub_date, :subscribe_price, :sponsor_describe)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id_user' => $Sponsor->getid_user(),
					'type_sponsor' => $Sponsor->gettype_sponsor(),
                    'endsub_date' => $Sponsor->getendsub_date(),
					'subscribe_price' => $Sponsor->getsubscribe_price(),
					'sponsor_describe' => $Sponsor->getsponsor_describe()
                    
                    
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperersponsor($id_sponsor){
			$sql="SELECT * from sponsor where id_sponsor=$id_sponsor";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Sponsor=$query->fetch();
				return $Sponsor;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function recuperersponsorwithus($id_user){
			$sql="SELECT * from sponsor where id_user=$id_user";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Sponsor=$query->fetch();
				return $Sponsor;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function recupereruserwithsponsor($id_user){
			$sql="SELECT * from utilisateur where id_user=$id_user";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Sponsor=$query->fetch();
				return $Sponsor;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifiersponsor($sponsor, $id_sponsor){
         
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE sponsor SET 
		                type_sponsor= :type_sponsor,
                        endsub_date= :endsub_date,
						subscribe_price= :subscribe_price,
                        sponsor_describe= :sponsor_describe

					WHERE id_sponsor= :id_sponsor'
				);
				$query->execute([
                    
					'type_sponsor' => $sponsor->gettype_sponsor(),
                    'endsub_date' => $sponsor->getendsub_date(),
					'subscribe_price' => $sponsor->getsubscribe_price(),
                    'sponsor_describe' => $sponsor->getsponsor_describe(),
                    'id_sponsor' => $id_sponsor
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}

	}
?>