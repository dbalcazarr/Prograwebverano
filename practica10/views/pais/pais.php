<?php 

  	  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Pais.php');
      include ('../../controllers/PaisController.php');
      include ('../../libs/Er.php');
  	  include ('../layouts/header.php');
  

  if(isset($_POST['nombre']))
  {
	
	  $paisC= new PaisController();
	  $paisC->insertaPais($_POST,$_FILES);
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
                <h2>Paises</h2>
                	<form role="form" id="registerForm" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Francia">
                      </div>
                      <div class="form-group">
                        <label for="bandera">Bandera</label>
                        <input type="file" id="bandera" name="bandera">
                        <p class="help-block">Cargue la imagen de la bandera aqui</p>
                        </div>
                        <div class="form-group">
                        <p>Seleccione el continente</p>
                         <select class="form-control" id="idcontinente" name="idcontinente">
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