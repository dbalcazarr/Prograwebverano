<?php
	class RevistaController {
		
		public $muestra_errores = false;
		
		function __construct(){
			
		}
		
		public function insertaRevista($datos,$archivos){
			echo "<pre>datos:";
  	  		print_r($datos);
			print_r($archivos);
	  		echo "</pre>";
			
			$revista= new Revista();
		    $revista->set_nombre($datos['nombre']);
			$revista->set_portada($archivos['portada']);
			$revista->set_fecha($datos['fecha']);
			$revista->set_volumen($datos['volumen']);
			$revista->set_titulo($datos['titulo']);
			$revista->set_subtitulo($datos['subtitulo']);
			$revista->set_numero($datos['numero']);
			$revista->set_clave($datos['clave']);
			$revista->set_directorio($datos['directorio']);
			$revista->set_editorial($datos['editorial']);
			$revista->set_id_status($datos['id_status']);
			
			if(count($revista->errores)>0)
			{
				print_r($revista->errores);
					die();
			}
			else
			{
				move_uploaded_file($archivos['portada']['tmp_name'],
				 "../img/".$archivos['portada']['name']);
			}
			$revista->inserta($revista->get_atributos());
			
			
			
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