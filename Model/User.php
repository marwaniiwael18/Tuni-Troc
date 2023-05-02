<?php
	class User{
	
		private $id_user;
		private $nom;
		private $prenom;        
        private $date_nais; 
        private  $email; 
        private $photo;
		private $adresse;
		private $username;        
        private $password; 
        private  $num_tel; 
        private $active; 
        private  $code_recup; 
		private $role;
		public function __construct( $nom, $prenom, $date_nais, $email,$photo, $adresse, $username, $password, $num_tel){

		
			$this->nom=$nom;
			$this->prenom=$prenom;
            $this->email=$email;
            $this->photo=$photo;
			$this->num_tel=$num_tel;
			$this->adresse=$adresse;
            $this->password=$password;
            $this->username=$username;
            $this->date_nais=$date_nais;
		}
		public function getid_user(){
			return $this->id_user;
		}
		public function getrole(){
			return $this->role;
		}
		public function getnom(){
			return $this->nom;
		}
		 public function getprenom(){
			return $this->prenom;
		}
		public function getemail(){
			return $this->email;
		}
        public function getphoto(){
			return $this->photo;
		}
        public function getnum_tel(){
			return $this->num_tel;
		}
		public function getadresse(){
			return $this->adresse;
		}
		 public function getpassword(){
			return $this->password;
		}
		public function getusername(){
			return $this->username;
		}
        public function getdate_nais(){
			return $this->date_nais;
		}
        public function getactive(){
			return $this->active;
		}
        public function getcode_recup(){
			return $this->code_recup;
		}

		function setrole($role){
			$this->role=$role;
		}

		function setid_user($id_user){
			$this->id_user=$id_user;
		}
        function setnom($nom){
			$this->nom=$nom;
		}
		function setprenom($prenom){
			$this->prenom=$prenom;
		}

		function setemail($email){
			$this->email=$email;
		}
		function setdate_nais( $date_nais){
			$this->date_nais=$date_nais;
		}
        function setnum_tel($num_tel){
			$this->num_tel=$num_tel;
		}
        function setadresse($adresse){
			$this->adresse=$adresse;
		}
		function setpassword($password){
			$this->password=$password;
		}

		function setusername($username){
			$this->username=$username;
		}
		function setphoto( $photo){
			$this->photo=$photo;
		}
        
		function setactive($active){
			$this->active=$active;
		}
		function setcode_recup( $code_recup){
			$this->code_recup=$code_recup;
		}
		
	}


?>