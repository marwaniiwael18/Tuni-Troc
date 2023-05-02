<?php
	class Publicite{
	
		private $id_publicite; 
        private $id_sponsor;
        private  $nom_publicite; 
		private  $date_publicite;
        private $photo ;
        private $prix;

		public function __construct( $id_sponsor, $nom_publicite,$photo, $prix){
	
			
			$this->id_sponsor=$id_sponsor;
			$this->nom_publicite=$nom_publicite;
            $this->photo=$photo;
            $this->prix=$prix;
			

		}
		public function getid_sponsor(){
			return $this->id_sponsor;
		}
		public function getid_publicite(){
			return $this->id_publicite;
		}
		 public function getnom_publicite(){
			return $this->nom_publicite;
		}
		public function getphoto(){
			return $this->photo;
		}
        public function getprix(){
			return $this->prix;
		}
        public function getdate_publicite(){
			return $this->date_publicite;
		}

		
		function setnom_publicite($nom_publicite){
			$this->nom_publicite=$nom_publicite;
		}
		function setid_sponsor($id_sponsor){
			$this->id_sponsor=$id_sponsor;
		}
        function setid_publicite($id_publicite){
			$this->id_publicite=$id_publicite;
		}
		function setdate_publicite($date_publicite){
			$this->date_publicite=$date_publicite;
		}

		function setphoto($photo){
			$this->photo=$photo;
		}
		function setprix( $prix){
			$this->prix=$prix;
		}
       
        
		
	}


?>