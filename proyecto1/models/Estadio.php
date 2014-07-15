<?php

class Estadio extends Modelo{
   public $nombre_tabla = 'estadio';
   public $pk = 'idestadio';
   
   
   public $atributos = array(
       'nombre'=>array(),
	    'idciudad'=>array(),
   );
   
   public $errores = array( );
   
   private $nombre;
   private $idpais;

         
   function Estadio(){
       parent::Modelo();
   }
   
   public function get_atributos(){
       $rs = array();
       foreach ($this->atributos as $key => $value) {
           $rs[$key]=$this->$key;
       }
       return $rs;
   }
   
   
   public function get_nombre(){
       return $this->nombre;
   } 

   public function set_nombre($valor){

       $er = new Er();
       
       if ( !$er->valida_nombre($valor) ){
           $this->errores[] = "Este nombre (".$valor.") no es valido";
       }

              
       $this->nombre = trim($valor);
       
   }
    
	
	 public function get_idciudad(){
       return $this->idciudad;
   } 

   public function set_idciudad($valor){

       $er = new Er();
       
       if ( !$er->valida_numero($valor) ){
           $this->errores[] = "Este id de ciudad (".$valor.") no es valido";
       }

              
       $this->idciudad = trim($valor);
       
   }
	 
}

?>