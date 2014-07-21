<?php 

	  include ('../../libs/security.php');
  	  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Equipo.php');
      include ('../../controllers/EquipoController.php');
      include ('../../libs/Er.php');
  	  include ('../layouts/header.php');
	  
    $equipoC= new EquipoController();
  if(isset($_POST['nombre']))
  {
	
	
	  $equipoC->insertaEquipo($_POST,$_FILES);
	  $equipoC->muestra_errores();
  }
?>


      
      	<div class="row">
        		<div class="col-md-4">
                </div>
            	<div class="col-md-4">
                <!--Hacer una funcion de esto-->
                
                  
                <h2>Equipos</h2>
                	<form role="form" id="registerForm" action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $equipoC->get_nombre(); ?>">
                      </div>
                      <div class="form-group">
                        <label for="escudo">Escudo</label>
                        <input type="file" id="escudo" name="escudo">
                        <p class="help-block">Cargue la imagen del escudo aqui</p>
                        </div>
                        <div class="form-group">
                        <label for="idpais">Seleccione el Pa&iacute;s</label>
							<?php echo $equipoC->getDropDown('pais','idpais','idpais');?>
                      </div>
                      <input type="submit" class="btn btn-default" value="Enviar">
                    </form>
                 </div>
                 <div class="col-md-4">
                 	<h2 class="text-center">Lista de equipos</h2>
                   <?php $equipoC->show_grid();?>
                 </div>
        </div>
      

</div>


<?php include ('../layouts/footer.php'); ?>