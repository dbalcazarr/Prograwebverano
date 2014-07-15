<?php 

  	  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Posicion.php');
      include ('../../controllers/PosicionController.php');
      include ('../../libs/Er.php');
  	  include ('../layouts/header.php');
  
  if(isset($_POST['nombre']))
  {
	
	  $posicionC= new PosicionController();
	  $posicionC->insertaPosicion($_POST);
  }
?>
<div class="row">
      	<p class="text-center">
        <img width="50%" height="50%" src="../../images/fifa2014.jpg"/>
        </p>
      </div>

        	<div class="row">
            <div class="col-md-4">
            </div>
            	<div class="col-md-4">
                <h2>Posici&oacute;n</h2>
                	<form role="form" id="registerForm" method="post">
                      <div class="form-group">
                        <label for="nombre">Nombre de la Posici&oacute;n</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej:Delantero">
                      </div>
                      <div class="form-group">
                        <label for="abreviatura">Abreviatura</label>
                        <input type="text" class="form-control" id="abreviatura" name="abreviatura" placeholder="Ej:del">
                      </div>
                      <input type="submit" class="btn btn-default" value="Enviar">
                    </form>
                 </div>
        </div>
      </div>


<?php include ('../layouts/footer.php'); ?>