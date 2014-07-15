<?php

class Integrante extends Modelo{
   public $nombre_tabla = 'integrante';
   public $pk = 'idintegrante';
   
   
   public $atributos = array(
       'nombre'=>array(),
		'apellido'=>array(),
		'peso'=>array(),
		'estatura'=>array(),
		'foto'=>array(),
		'edad'=>array(),
		'idequipo'=>array(),
   );
   
   public $errores = array( );
   
   private $nombre;
   private $apellido;
   private $peso;
   private $estatura;
   private $foto;
   private $edad;
   private $idequipo;

         
   function Integrante(){
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
   
   public function get_apellido(){
       return $this->apellido;
   } 

   public function set_apellido($valor){

       $er = new Er();
       
       if ( !$er->valida_nombre($valor) ){
           $this->errores[] = "Este apellido (".$valor.") no es valido";
       }

              
       $this->apellido = trim($valor);
       
   }
   
    public function get_peso(){
       return $this->peso;
   } 

   public function set_peso($valor){

       $er = new Er();
       
       if ( !$er->valida_flotante($valor) ){
           $this->errores[] = "El peso (".$valor.") no es valido";
       }

              
       $this->peso = trim($valor);
       
   }
   
    public function get_estatura(){
       return $this->estatura;
   } 

   public function set_estatura($valor){

       $er = new Er();
       
       if ( !$er->valida_flotante($valor) ){
           $this->errores[] = "El formato de la estatura (".$valor.") no es valido";
       }

              
       $this->estatura = trim($valor);
       
   }
   
    public function get_foto(){
       return $this->foto;
   } 

   public function set_foto($valor){

       $er = new Er();
       
       if ( !$er->valida_imagen($valor) ){
           $this->errores[] = "El archivo seleccionado (".$valor.") no es valido";
       }

              
       $this->foto = trim($valor);
       
   }
   
    public function get_edad(){
       return $this->edad;
   } 

   public function set_edad($valor){

       $er = new Er();
       
       if ( !$er->valida_numero($valor) ){
           $this->errores[] = "La edad (".$valor.") no es valida debe de ser un numero";
       }

              
       $this->edad = trim($valor);
       
   }
   
    public function get_idequipo(){
       return $this->idequipo;
   } 

   public function set_idequipo($valor){

       $er = new Er();
       
       if ( !$er->valida_numero($valor) ){
           $this->errores[] = "El id (".$valor.") no es valido debe de ser un numero";
       }

              
       $this->idequipo = trim($valor);
       
   }
    
	 
}

?>