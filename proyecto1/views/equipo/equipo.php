<?php 

  	  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Equipo.php');
      include ('../../controllers/EquipoController.php');
      include ('../../libs/Er.php');
  	  include ('../layouts/header.php');
  
  if(isset($_POST['nombreeq']))
  {
	  echo "<pre>";
  	  print_r($_POST);
	  echo "</pre>";
  }
?>


      
      	<div class="row">
        		<div class="col-md-4">
                </div>
            	<div class="col-md-4">
                <h2>Equipos</h2>
                	<form role="form" id="registerForm" action="" method="POST">
                      <div class="form-group">
                        <label for="nombreeq">Nombre</label>
                        <input type="text" class="form-control" id="nombreeq" name="nombreeq" placeholder="Ej: Francia">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Escudo</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Cargue la imagen del escudo aqui</p>
                        </div>
                        <div class="form-group">
                        <p>Seleccione el Pa&iacute;s</p>
                         <select class="form-control" id="idpais" name="idpais">
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