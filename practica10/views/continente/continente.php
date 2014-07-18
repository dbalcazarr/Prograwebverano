<?php 

  	  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Continente.php');
      include ('../../controllers/ContinenteController.php');
      include ('../../libs/Er.php');
  	  include ('../layouts/header.php');
  
  if(isset($_POST['nombre']))
  {
	
	  $continenteC= new ContinenteController();
	  $continenteC->insertaContinente($_POST);
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
                <h2>Continentes</h2>
                	<form role="form" id="registerForm" action="" method="POST">
                      <div class="form-group">
                        <label for="nombre">Nombre del continente</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej:America">
                      </div>
                      <input type="submit" class="btn btn-default" value="Enviar">
                    </form>
                 </div>
        </div>
</div>


<?php include ('../layouts/footer.php'); ?>