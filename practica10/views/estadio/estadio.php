<?php 

  	  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Estadio.php');
      include ('../../controllers/EstadioController.php');
      include ('../../libs/Er.php');
  	  include ('../layouts/header.php');
  
  if(isset($_POST['nombre']))
  {
	
	  $estadioC= new EstadioController();
	  $estadioC->insertaEstadio($_POST);
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
                <h2>Estadio</h2>
                	<form role="form" id="registerForm" method="post">
                      <div class="form-group">
                        <label for="nombre">Nombre del estadio</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej:Maracana">
                        </div>
                        <div class="form-group">
                      	<h5>Seleccione una ciudad</h5>
                       <select class="form-control" id="idciudad" name="idciudad">
                         		<option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                         </select>
                      </div>
                      
                      <input type="submit" class="btn btn-default" value="Enviar">
                    </form>
                 </div>
        </div>
      
 </div>


<?php include ('../layouts/footer.php'); ?>