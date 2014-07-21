<?php 

  	  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Articulo.php');
      include ('../../controllers/ArticuloController.php');
      include ('../../libs/Er.php');
  	  include ('../layouts/header.php');
  
  $articuloC= new ArticuloController();
  if(isset($_POST['nombre']))
  {
	  $articuloC->insertaArticulo($_POST,$_FILES);
	  $articuloC->muestra_errores();
  }
?>


		<div class="box">
        	<div class="row">
            <div class="col-md-4">
            </div>
            	<div class="col-md-4">
                <h2>Articulos</h2>
                	<form role="form" id="registerForm" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="nombre">Nombre del Articulo</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $articuloC->get_nombre(); ?>">
                        </div>
                        <div class="form-group">
                        <label for="resumen">Resumen</label>
                        <textarea class="form-control" id="resumen" name="resumen"><?php echo $articuloC->get_resumen(); ?></textarea>
                        </div>
                        <div class="form-group">
                        <label for="abstracto">Abstracto</label>
                        <textarea class="form-control" id="abstracto" name="abstracto"><?php echo $articuloC->get_abstracto(); ?></textarea>
                        </div>
                        <div class="form-group">
                        <label for="introduccion">Introducci&oacute;n</label>
                        <textarea class="form-control" id="introduccion" name="introduccion"><?php echo $articuloC->get_introduccion(); ?></textarea>
                        </div>
                        <div class="form-group">
                        <label for="metodologia">Metodolog&iacute;a</label>
                        <textarea class="form-control" id="metodologia" name="metodologia"><?php echo $articuloC->get_metodologia(); ?></textarea>
                        </div>
                        <div class="form-group">
                        <label for="contenido">Contenido</label>
                        <textarea class="form-control" id="contenido" name="contenido"><?php echo $articuloC->get_contenido(); ?></textarea>
                        </div>
                   	   <div class="form-group">
                      		<label for="fecha_creacion">Fecha creacion</label>
                      			
                      				<div class='input-group date' id='datetimepicker1'>
                          			<input type='text' class="form-control" id="fecha_creacion" name="fecha_creacion" value="<?php echo $articuloC->get_fecha_creacion(); ?>"/>
                          			<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                          			</span>
                      			</div>
                  		</div>
                         <div class="form-group">
                                <h5>Seleccione Archivo PDF</h5>
                                <label for="archivo_pdf">Archivo</label>
                                <input type="file" id="archivo_pdf" name="archivo_pdf">
                                <p class="help-block">Cargue Archivo PDF aqui</p>
                    	   </div>
                        <div class="form-group">
                      	<h5>Seleccione id_status</h5>
                       	<select class="form-control" id="id_status" name="id_status">
                         		<option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                         </select>
                      </div>
                       <div class="form-group">
                        <label for="conclusiones">Conclusiones</label>
                        <textarea class="form-control" id="conclusiones" name="conclusiones"><?php echo $articuloC->get_conclusiones(); ?></textarea>
                        </div>
                        <div class="form-group">
                        <label for="agradecimientos">Agradecimientos</label>
                        <textarea class="form-control" id="agradecimientos" name="agradecimientos"><?php echo $articuloC->get_agradecimientos(); ?></textarea>
                        </div>
                        <div class="form-group">
                        <label for="referencias">Referencias</label>
                        <textarea class="form-control" id="referencias" name="referencias"><?php echo $articuloC->get_referencias(); ?></textarea>
                        </div>
                      
                      <input type="submit" class="btn btn-default" value="Enviar">
                    </form>
                 </div>
        </div>
      </div><!--box-->
 </div>


<?php include ('../layouts/footer.php'); ?>