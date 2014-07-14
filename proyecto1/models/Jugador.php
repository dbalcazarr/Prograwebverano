<?php

class Jugador extends Modelo{
   public $nombre_tabla = 'jugador';
   public $pk = 'idjugador';
   
   
   public $atributos = array(
       'numero'=>array(),
	    'idintegrante'=>array(),
		'idposision'=>array(),
   );
   
   public $errores = array( );
   
   private $numero;
   private $idintegrante;
   private $idposision;

         
   function Jugador(){
       parent::Modelo();
   }
   
   public function get_atributos(){
       $rs = array();
       foreach ($this->atributos as $key => $value) {
           $rs[$key]=$this->$key;
       }
       return $rs;
   }
   
   
   public function get_numero(){
       return $this->numero;
   } 

   public function set_numero($valor){

       $er = new Er();
       
       if ( !$er->valida_numero($valor) ){
           $this->errores[] = "El formato del numero (".$valor.") no es valido";
       }

              
       $this->numero = trim($valor);
       
   }
    
	 
}

?>