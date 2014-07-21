<?php
	class EquipoController extends Equipo{
		
		public $muestra_errores = false;
		
		function __construct(){
			parent::Equipo();
		}
		
		public function insertaEquipo($datos,$archivos){
			echo "<pre>datos:";
  	  		print_r($datos);
			print_r($archivos);
	  		echo "</pre>";
			
			//$equipo= new Equipo();
		    $this->set_nombre($datos['nombre']);
			$this->set_escudo($archivos['escudo']);
			$this->set_idpais($datos['idpais']);
			
			if(count($this->errores)>0)
			{
				$this->muestra_errores= true;
			}
			else
			{
				move_uploaded_file($archivos['escudo']['tmp_name'],
				 "../img/".$archivos['escudo']['name']);
				 
				 $this->inserta($this->get_atributos());
			}	
		}
		
			public function muestra_errores()
			{
				
					if($this->muestra_errores){
					
					echo '<div class="alert alert-danger">';
           
							foreach($this->errores as $value){
								echo "<p>$value</p>";
							}
						
					echo "</div>";
                   	
					}
				  
			}
		
		public function validaUsuario($datos){
			$rs = $this->consulta_sql(" select * from usuarios where email = '".$datos['email']."'  ");
        	$rows = $rs->GetArray();
        	if(count($rows) > 0){
        		if ($rows['0']['password']== md5($datos['password'])) {
        			$this->iniciarSesion($rows['0']['rol'],$rows['0']['email']);
        		}else{
		     		$this->muestra_errores = true;
		     		$this->errores[] = 'Password incorrecto';
		     	}
	     	}else{
	     		$this->muestra_errores = true;
	     		$this->errores[] = 'este email no existe';
	     	}

		}

		public function iniciarSesion($rol,$email){
			$_SESSION['user'] = $rol;
			$_SESSION['email'] = $email;
			header("Location: inicio.php");
		}

		public function cerrarSesion(){
			session_destroy();
			header("Location: inicio.php");
		}

	}


?>