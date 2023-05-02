<?php
	class Offre{
	
		private $id_offre;
		private $nom_offre;
		private $date_offre;         
        private  $type; 
        private $id_user1;
		private $id_user2;
		public function __construct( $nom_offre, $type, $id_user1, $id_user2){
	
			
			$this->nom_offre=$nom_offre;
			$this->type=$type;
            $this->id_user1=$id_user1;
            $this->id_user2=$id_user2;
		}
		public function getid_offre(){
			return $this->id_offre;
		}
		public function getnom_offre(){
			return $this->nom_offre;
		}
		 public function gettype(){
			return $this->type;
		}
		public function getid_user1(){
			return $this->id_user1;
		}
        public function getid_user2(){
			return $this->id_user2;
		}
        public function getdate_offre(){
			return $this->date_offre;
		}
		


		function setid_offre($id_offre){
			$this->id_offre=$id_offre;
		}
		function setnom_offre($nom_offre){
			$this->nom_offre=$nom_offre;
		}
        function setdate_offre($date_offre){
			$this->date_offre=$date_offre;
		}
		function settype($type){
			$this->type=$type;
		}

		function setid_user1($id_user1){
			$this->id_user1=$id_user1;
		}
		function setid_user2( $id_user2){
			$this->id_user2=$id_user2;
		}
       
		
	}


?>