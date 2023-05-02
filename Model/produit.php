<?php
	class produit{
	
		private $nom=null;
		private $descr=null;
		private $url_image=null;
		
		private $code_categ=null;
		private $id_scateg=null;
		private $pu_achat=null;
		private $pu_vente=null;
		private $qte_stock=null;
		private $date=null;

		
		
	
		
		function __construct( $nom, $descr, $url_image, $code_categ, $id_scateg  , $pu_achat   ,    $pu_vente  , $qte_stock,$date  ){

			$this->nom=$nom;
			$this->descr=$descr;
			$this->url_image=$url_image;
			$this->code_categ=$code_categ;
			$this->id_scateg=$id_scateg;
			$this->pu_achat =$pu_achat ;
			$this->pu_vente=$pu_vente;
			$this->qte_stock=$qte_stock;
			$this->date=$date;

			
		}
		
		function getNom(){
			return $this->nom;
		}
		function getdescr(){
			return $this->descr;
		}
		function geturl_image(){
			return $this->url_image;
		}
		function getcode_categ(){
			return $this->code_categ;
		}

		function getid_scateg(){
			return $this->id_scateg;
		}

		function getpu_achat (){
			return $this->pu_achat ;
		}

		function getpu_vente (){
			return $this->pu_vente ;
		}

		function getqte_stock (){
			return $this->qte_stock ;
		}

		function getdate (){
			return $this->date ;
		}
		
		

	
		function setNom(string $nom){
			$this->nom=$nom;
		}
		function setdescr(string $descr){
			$this->descr=$descr;
		}
		function seturl_image(string $url_image){
			$this->url_image=$url_image;
		}
		function setcode_categ(string $code_categ){
			$this->code_categ=$code_categ;
		}

		function setid_scateg(string $id_scateg){
			$this->id_scateg=$id_scateg;
		}


		function setpu_achat(int $pu_achat){
			$this->pu_achat=$pu_achat;
		}

		function setpu_vente(int $pu_vente){
			$this->pu_vente=$pu_vente;
		}


		function setqte_stock (int $qte_stock ){
			$this->qte_stock =$qte_stock ;
		}
		
		function setdate (int $date ){
			$this->date =$date ;
		}
	
	}


?>