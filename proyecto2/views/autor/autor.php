<?php 

  	  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Autor.php');
      include ('../../controllers/AutorController.php');
      include ('../../libs/Er.php');
  	  include ('../layouts/header.php');
  
  if(isset($_POST['nombre']))
  {
	
	  $autorC= new AutorController();
	  $autorC->insertaAutor($_POST);
  }
?>

 
      <div class="box">
      	<div class="row">
        		<div class="col-md-4">
                </div>
            	<div class="col-md-4">
                <h2>Autores</h2>
                	<form role="form" id="registerForm" action="" method="POST">
                      <div class="form-group">
                        <label for="nombre">Nombre del autor</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej:Gabriel">
                      </div>
                      <div class="form-group">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ej:Garcia">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Ej:gabriel@hotmail.com">
                      </div>

                      <input type="submit" class="btn btn-default" value="Enviar">
                    </form>
                 </div>
        </div>
      
</div><!--box-->
</div>


<?php include ('../layouts/footer.php'); ?>