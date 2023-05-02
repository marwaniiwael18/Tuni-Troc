<?php
	include_once 'C:\xampp\htdocs\louled\Config.php';
	include_once 'C:\xampp\htdocs\louled\Model\User.php';
	class UserC {
		function nbuser(){
			$sql="SELECT count(*) as us from utilisateur ";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function afficherUser(){
			$sql="SELECT * FROM utilisateur";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerUser($id_user){
			$sql="DELETE FROM utilisateur WHERE id_user=:id_user";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_user', $id_user);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterUser($User){
			$sql="INSERT INTO utilisateur (username, nom, prenom, date_nais, email, photo, adresse, password, num_tel, role) 
			VALUES ( :username, :nom, :prenom, :date_nais, :email, :photo, :adresse, :password, :num_tel, :role)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'username' => $User->getusername(),
					'nom' => $User->getnom(),
					'prenom' => $User->getprenom(),
                    'date_nais' => $User->getdate_nais(),
                    'email' => $User->getemail(),
                    'photo' => $User->getphoto(),
					'adresse' => $User->getadresse(),
					'password' => $User->getpassword(),
                    'num_tel' => $User->getnum_tel(),
					'role' => "user"
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererUser($id_user){
			$sql="SELECT * from utilisateur where id_user=$id_user";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function recupereremail($email){
			$db = config::getConnexion();
			
			
		
			try{
				$reponse = $db->prepare('SELECT email FROM utilisateur WHERE email = :email OR username =:email');
			$reponse->execute(array('email' => $email));
				$user=$reponse->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererusername($username){
			$db = config::getConnexion();
			
			
		
			try{
				$reponse = $db->prepare('SELECT username FROM utilisateur WHERE username = :username ');
			$reponse->execute(array('username' => $username));
				$user=$reponse->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function signin($password,$email){
			$db = config::getConnexion();
			
			
		
			try{
				$reponse = $db->prepare('SELECT * FROM utilisateur WHERE email = :email AND password =:password');
			$reponse->execute(array('email' => $email,'password' => $password));
				$user=$reponse->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifieruser($user, $id_user){
            $a=$user->getusername();
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE utilisateur SET 
		                username= :username,
		                nom= :nom,
		                prenom= :prenom,
                        date_nais= :date_nais,
                        email= :email,
                        photo= :photo,
		                adresse= :adresse,
		                password= :password,
                        num_tel= :num_tel
					WHERE id_user= :id_user'
				);
				$query->execute([
                    'username' => $user->getusername(),
					'nom' => $user->getnom(),
					'prenom' => $user->getprenom(),
                    'date_nais' => $user->getdate_nais(),
                    'email' => $user->getemail(),
                    'photo' => $user->getphoto(),
					'adresse' => $user->getadresse(),
					'password' => $user->getpassword(),
                    'num_tel' => $user->getnum_tel(),
                    'id_user' => $id_user
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}











		function banuser( $id_user){
        
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE utilisateur SET 
		            
                        active=0
					WHERE id_user= :id_user'
				);
				$query->execute([
                    
                    'id_user' => $id_user
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}


		function unbanuser( $id_user){
        
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE utilisateur SET 
		            
                        active=1
					WHERE id_user= :id_user'
				);
				$query->execute([
                    
                    'id_user' => $id_user
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}



		function modifierrole($role, $id_user){
        
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE utilisateur SET 
		            
                        role= :role
					WHERE id_user= :id_user'
				);
				$query->execute([
                    'role' => $role,
                    'id_user' => $id_user
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}

		function setpass($pass, $email){
        
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE utilisateur SET 
		            
					code_recup= :pass
					WHERE email= :email'
				);
				$query->execute([
                    'pass' => $pass,
                    'email' => $email
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}

		function setpassword($email, $password){
        
    
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE utilisateur SET 
		            code_recup=null,
					password= :password
					WHERE email= :email'
				);
				$query->execute([
                    'password' => $password,
                    'email' => $email
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
          
		}
	}
?>