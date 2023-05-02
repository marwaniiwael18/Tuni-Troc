<?php
	class Comment{
	
		private $id_comment;
		private $id_user;
		private $id_poste;        
        private $nb_likes; 
        private  $photo; 
        private $message;
		private $date_comment;
		public function __construct( $id_user, $id_poste, $message, $photo){
	
		
			$this->id_user=$id_user;
			$this->message=$message;
            $this->id_poste=$id_poste;
		
            $this->photo=$photo;
		}
		public function getid_comment(){
			return $this->id_comment;
		}
		public function getid_user(){
			return $this->id_user;
		}
		 public function getid_poste(){
			return $this->id_poste;
		}
		public function getnb_likes(){
			return $this->nb_likes;
		}
        public function getmessage(){
			return $this->message;
		}
        public function getphoto(){
			return $this->photo;
		}
		public function getdate_comment(){
			return $this->date_comment;
		}
		
		function setdate_comment($date_comment){
			$this->date_comment=$date_comment;
		}
		function setid_comment($id_comment){
			$this->id_comment=$id_comment;
		}
        function setid_user($id_user){
			$this->id_user=$id_user;
		}
		function setnb_likes($nb_likes){
			$this->nb_likes=$nb_likes;
		}

		function setid_poste($id_poste){
			$this->id_poste=$id_poste;
		}
		function setmessage( $message){
			$this->message=$message;
		}
        function setphoto($photo){
			$this->photo=$photo;
		}
        
		
	}


?>