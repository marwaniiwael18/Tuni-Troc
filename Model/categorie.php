<?php
	class categorie{
		private $code_categ=null;
      
	
		
		
	
		
		function __construct(  $code_categ ){
			$this->code_categ=$code_categ;
           
			

			
		}
		function getlib_categ(){
			return $this->lib_categ;
		}
		
		function getcode_categ(){
			return $this->code_categ;
		}

	

		function setlib_categ(string $lib_categ){
			$this->lib_categ=$lib_categ;
		}
		
		
		function setcode_categ(string $code_categ){
			$this->code_categ=$code_categ;
		}

		
	
	}


?>