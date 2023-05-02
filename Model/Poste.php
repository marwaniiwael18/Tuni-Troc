<?php
	class Poste{
	
		private $id_poste;
		private $id_user;
		private $photo;        
        private $nb_likes; 
        private  $nb_comments; 
        private $message;
		private $date_poste;
		public function __construct( $id_user, $photo, $message){
	
			
			$this->id_user=$id_user;
			$this->message=$message;
            $this->photo=$photo;

		}
		public function getid_poste(){
			return $this->id_poste;
		}
		public function getid_user(){
			return $this->id_user;
		}
		 public function getphoto(){
			return $this->photo;
		}
		public function getnb_likes(){
			return $this->nb_likes;
		}
        public function getmessage(){
			return $this->message;
		}
        public function getnb_comments(){
			return $this->nb_comments;
		}
		public function getdate_poste(){
			return $this->date_poste;
		}
		
		function setdate_poste($date_poste){
			$this->date_poste=$date_poste;
		}
		function setid_poste($id_poste){
			$this->id_poste=$id_poste;
		}
        function setid_user($id_user){
			$this->id_user=$id_user;
		}
		function setnb_likes($nb_likes){
			$this->nb_likes=$nb_likes;
		}

		function setphoto($photo){
			$this->photo=$photo;
		}
		function setmessage( $message){
			$this->message=$message;
		}
        function setnb_comments($nb_comments){
			$this->nb_comments=$nb_comments;
		}
        
		
	}


?>