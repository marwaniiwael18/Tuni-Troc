<?php
	class Sponsor{
	
		private $id_sponsor; 
        private $id_user;
        private  $type_sponsor; 
		private  $subscribe_date;
        private $endsub_date ;
        private $subscribe_price;
        private $sponsor_describe;

		public function __construct( $id_user, $type_sponsor,$endsub_date,$subscribe_price, $sponsor_describe){
	
			
			$this->id_user=$id_user;
			$this->type_sponsor=$type_sponsor;
            $this->endsub_date=$endsub_date;
            $this->sponsor_describe=$sponsor_describe;
			$this->type_sponsor=$type_sponsor;
            $this->endsub_date=$endsub_date;
            $this->subscribe_price=$subscribe_price;

		}
		public function getid_sponsor(){
			return $this->id_sponsor;
		}
		public function getid_user(){
			return $this->id_user;
		}
		 public function gettype_sponsor(){
			return $this->type_sponsor;
		}
		public function getsubscribe_date(){
			return $this->subscribe_date;
		}
        public function getendsub_date(){
			return $this->endsub_date;
		}
        public function getsubscribe_price(){
			return $this->subscribe_price;
		}
		public function getsponsor_describe(){
			return $this->sponsor_describe;
		}
		
		function settype_sponsor($type_sponsor){
			$this->type_sponsor=$type_sponsor;
		}
		function setid_sponsor($id_sponsor){
			$this->id_sponsor=$id_sponsor;
		}
        function setid_user($id_user){
			$this->id_user=$id_user;
		}
		function setsubscribe_date($subscribe_date){
			$this->subscribe_date=$subscribe_date;
		}

		function setendsub_date($endsub_date){
			$this->endsub_date=$endsub_date;
		}
		function setsubscribe_price( $subscribe_price){
			$this->subscribe_price=$subscribe_price;
		}
        function setsponsor_describe($sponsor_describe){
			$this->sponsor_describe=$sponsor_describe;
		}
        
		
	}


?>