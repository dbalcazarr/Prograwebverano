<?php 

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
  }
?>


      
      	<div class="row">
        		<div class="col-md-4">
                </div>
            	<div class="col-md-4">
                <!--Hacer una funcion de esto-->
                <?php
					if($equipoC->muestra_errores){
					?>	
					<div class="alert alert-danger">
                  	<?php
							foreach($equipoC->errores as $value){
								echo "<p>$value</p>";
							}
						?>
					</div>
                  <?php  	
					}
				  ?>
                  
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