<?php

class Er {
    
	public function valida_email($valor){
		$exp_reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
		public function valida_numero($valor){
		$exp_reg = "/^[0-9]+$/"; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
		public function valida_flotante($valor){
		$exp_reg = "/^(?=.+)(?:[1-9]\d*|0)?(?:\.\d+)?$/"; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	   public function valida_nombre($valor){
		$exp_reg = "/^[a-zA-Z0-9_]{3,16}$/"; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	
	public function valida_imagen($imagen){
		$reg="%\.(gif|jpe?g|png)$%i";
		if (preg_match($reg, $imagen)){
			return true;
		} else {
			return false;
		}
	}
	
		 

	
	
	
	
	
	
	

}

?>    