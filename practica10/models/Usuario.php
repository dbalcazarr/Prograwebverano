<?php

class Usuario extends Modelo{
   public $nombre_tabla = 'equipo';
   public $pk = 'idequipo';
   
   
   public $atributos = array(
       'nombre'=>array(),
       'idpais'=>array(),
       'escudo'=>array(),
   );
   
   public $errores = array( );
   
   private $nombre;
   private $idpais;
   private $escudo;
      
   
   function Equipo(){
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
       
       if ( !$er->valida_email($valor) ){
           $this->errores[] = "Este e-mail (".$valor.") no es valido";
       }

              
       $this->nombre = trim($valor);
       
   }


   
   
   
}

?>
