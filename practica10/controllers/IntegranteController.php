<?php
	class IntegranteController {
		
		public $muestra_errores = false;
		
		function __construct(){
			
		}
		
		public function insertaIntegrante($datos,$archivos){
			echo "<pre>datos:";
  	  		print_r($datos);
			print_r($archivos);
	  		echo "</pre>";
			
			$integrante= new Integrante();
		    $integrante->set_nombre($datos['nombre']);
			$integrante->set_apellido($datos['apellido']);
			$integrante->set_peso($datos['peso']);
			$integrante->set_estatura($datos['estatura']);
			$integrante->set_foto($archivos['foto']);
			$integrante->set_edad($datos['edad']);
			$integrante->set_idequipo($datos['idequipo']);
			
			if(count($integrante->errores)>0)
			{
				print_r($integrante->errores);
				die();
			}
			else
			{
				move_uploaded_file($archivos['foto']['tmp_name'],
				 "../img/".$archivos['foto']['name']);
			}
			
			$integrante->inserta($integrante->get_atributos());
			
			
			
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