<?php
	class Avis{
	
		private $id_avis;
		private $id_user;
        private $message;
		private $date_avis;
		public function __construct( $id_user, $message){
	
	
			$this->id_user=$id_user;
			$this->message=$message;
     
		}
		public function getid_avis(){
			return $this->id_avis;
		}
		public function getid_user(){
			return $this->id_user;
		}
		
        public function getmessage(){
			return $this->message;
		}

		
		public function getdate_avis(){
			return $this->date_avis;
		}

		
		function setdate_avis($date_avis){
			$this->date_avis=$date_avis;
		}
		function setid_avis($id_avis){
			$this->id_avis=$id_avis;
		}
        function setid_user($id_user){
			$this->id_user=$id_user;
		}
		
		
		function setmessage( $message){
			$this->message=$message;
		}
       
		
	}


?>