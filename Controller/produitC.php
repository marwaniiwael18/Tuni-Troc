<?php
	include_once 'C:\xampp\htdocs\louled\Config.php';
	include_once 'C:\xampp\htdocs\louled\Model\produit.php';




	class produitC {
		function afficherproduits(){
			$sql="SELECT * FROM produit ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}

		function rechercheproduits($id_scateg){
			$sql="SELECT * FROM produit where id_scateg=:id_scateg ";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}


		


	
		function supprimerproduit($id_produit){
			$sql="DELETE FROM produit WHERE id_produit=:id_produit";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_produit', $id_produit);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterproduit($produit){
			$sql="INSERT INTO produit ( Nom, descr, url_image, code_categ, id_scateg, pu_achat, pu_vente, qte_stock,date) 
			VALUES (:Nom,:descr, :url_image,:code_categ,:id_scateg,:pu_achat,:pu_vente,:qte_stock,:date)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
				
					'Nom' => $produit->getNom(),
					'descr' => $produit->getdescr(),
					'url_image' => $produit->geturl_image(),
					'code_categ' => $produit->getcode_categ(),
					'id_scateg'=> $produit->getid_scateg(),
					'pu_achat'=> $produit->getpu_achat(),
					'pu_vente'=> $produit->getpu_vente(),
					'qte_stock'=> $produit->getqte_stock(),
					'date'=> $produit->getdate()

				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererproduit($id_produit){
			$sql="SELECT * from produit where id_produit=$id_produit";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$produit=$query->fetch();
				return $produit;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierproduit($produit, $id_produit){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE produit SET 
						Nom= :Nom, 
						descr= :descr, 
						url_image= :url_image, 
						code_categ= :code_categ, 
						id_scateg= :id_scateg,
						pu_achat= :pu_achat, 
						pu_vente= :pu_vente,
						qte_stock = :qte_stock ,
						date = :date 
						
					WHERE id_produit= :id_produit'
				);
				$query->execute([
		
					'Nom' => $produit->getNom(),
					'descr' => $produit->getdescr(),
					'url_image' => $produit->geturl_image(),
					'code_categ' => $produit->getcode_categ(),
					'id_scateg'=> $produit->getid_scateg(),
					'pu_achat'=> $produit->getpu_achat(),
					'pu_vente'=> $produit->getpu_vente(),
					'qte_stock'=> $produit->getqte_stock(),
						'date'=> $produit->getdate(),
						
					
					'id_produit' => $id_produit
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}




		function recherforprod($nom_produit){
			$sql="SELECT * FROM produit WHERE id_produit='$nom_produit' or nom='$nom_produit'  or descr='$nom_produit' or url_image='$nom_produit'or code_categ='$nom_produit'or id_scateg='$nom_produit'or pu_achat='$nom_produit'or pu_vente='$nom_produit'or qte_stock='$nom_produit'or date='$nom_produit'";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}


		function trieasc(){
			$sql="SELECT * FROM produit order by pu_vente";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function triedesc(){
			$sql="SELECT * FROM produit order by pu_vente desc";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function dateup(){
			$sql="SELECT * FROM produit where date >='2021/01/01'";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function datedown(){
			$sql="SELECT * FROM produit where date <='2021/01/01'";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}

	}
?>