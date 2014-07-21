<?php
	class ArticuloController extends Articulo {
		
		public $muestra_errores = false;
		
		function __construct(){
			parent::Articulo();
			
		}
		
		public function insertaArticulo($datos,$archivos){
			echo "<pre>datos:";
  	  		print_r($datos);
			print_r($archivos);
	  		echo "</pre>";
			
			//$articulo= new Articulo();
		    $this->set_nombre($datos['nombre']);
			$this->set_resumen($datos['resumen']);
			$this->set_abstracto($datos['abstracto']);
			$this->set_introduccion($datos['introduccion']);
			$this->set_metodologia($datos['metodologia']);
			$this->set_contenido($datos['contenido']);
			$this->set_fecha_creacion($datos['fecha_creacion']);
			$this->set_archivo_pdf($archivos['archivo_pdf']);
			$this->set_id_status($datos['id_status']);
			$this->set_conclusiones($datos['conclusiones']);
			$this->set_agradecimientos($datos['agradecimientos']);
			$this->set_referencias($datos['referencias']);
			
			if(count($this->errores)>0)
			{
				$this->muestra_errores= true;
			}
			else
			{
				move_uploaded_file($archivos['archivo_pdf']['tmp_name'],
				 "../img/".$archivos['archivo_pdf']['name']);
				 
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