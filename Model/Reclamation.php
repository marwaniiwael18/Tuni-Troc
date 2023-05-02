<?php
	class Reclamation{
	
		private $id_reclamation;
		private $email;
		private $prenom_perso;        
        private $nom_perso; 
        private  $num_tel; 
        private $message;
		private $daterec;
		private $id_user;
		public function __construct( $prenom_perso, $nom_perso, $message, $email, $num_tel,$id_user){
	
		
			$this->prenom_perso=$prenom_perso;
			$this->nom_perso=$nom_perso;
            $this->email=$email;
			$this->num_tel=$num_tel;
            $this->message=$message;
			$this->id_user=$id_user;
		}
		public function getid_user(){
			return $this->id_user;
		}
		public function getid_reclamation(){
			return $this->id_reclamation;
		}
		public function getprenom(){
			return $this->prenom_perso;
		}
		 public function getnom(){
			return $this->nom_perso;
		}
		public function getemail(){
			return $this->email;
		}
        public function getmessage(){
			return $this->message;
		}
        public function getnum_tel(){
			return $this->num_tel;
		}
		public function getdaterec(){
			return $this->daterec;
		}
		function setdaterec($daterec){
			$this->daterec=$daterec;
		}
		function setid_reclamation($id_reclamation){
			$this->id_reclamation=$id_reclamation;
		}
		function setid_user($id_user){
			$this->id_user=$id_user;
		}
        function setprenom_perso($prenom_perso){
			$this->prenom_perso=$prenom_perso;
		}
		function setnom_perso($nom_perso){
			$this->nom_perso=$nom_perso;
		}

		function setemail($email){
			$this->email=$email;
		}
		function setmessage( $message){
			$this->message=$message;
		}
        function setnum_tel($num_tel){
			$this->num_tel=$num_tel;
		}
        
		
	}


?>