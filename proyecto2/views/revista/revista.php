<?php 

  	  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Revista.php');
      include ('../../controllers/RevistaController.php');
      include ('../../libs/Er.php');
  	  include ('../layouts/header.php');
  
  if(isset($_POST['nombre']))
  {
	
	  $revistaC= new RevistaController();
	  $revistaC->insertaRevista($_POST);
  }
?>
		<div class="box">
        	<div class="row">
            <div class="col-md-4">
            </div>
            	<div class="col-md-4">
                      <h2>Revista</h2>
                	<form id="registerForm" method="post">
                      <div class="form-group">
                        <label for="nombre">Nombre de la Revista</label>
                        <textarea class="form-control" id="nombre" name="nombre"> </textarea>
                         </div>
                         <div class="form-group">
                      	<h5>Seleccione la portada</h5>
                      	<label for="portada">Portada</label>
                        <input type="file" id="portada" name="portada">
                        <p class="help-block">Cargue la imagen de la portada aqui</p>
                     </div>
                      <br/>
                      <div class="form-group">
                      <h4>Seleccione fecha de publicaci&oacute;n</h4>
                                <div class='input-group date' id='datetimepicker5' data-date-format="YYYY/MM/DD">
                                    <input type='text' class="form-control" id="fecha" name="fecha"/>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                                    </span>
                                </div>
                      </div>
                      <div class="form-group">
                      	<label for="volumen">Volumen de la revista</label>
                        <input type="text" class="form-control" id="volumen" name="volumen">
                      </div>
                       <div class="form-group">
                        <label for="titulo">Titulo de la revista</label>
                        <textarea class="form-control" id="titulo" name="titulo"> </textarea>
                         </div>
                          <div class="form-group">
                        <label for="subtitulo">Subitulo de la revista</label>
                        <textarea class="form-control" id="subtitulo" name="subtitulo"> </textarea>
                         </div>
                         <div class="form-group">
                        <label for="numero">N&uacute;mero de la revista</label>
                        <input type="text" class="form-control" id="numero" name="numero">
                         </div>
                          <div class="form-group">
                        <label for="clave">Clave</label>
                        <input type="text" class="form-control" id="clave" name="clave">
                         </div>
                           <div class="form-group">
                        <label for="directorio">Directorio de la revista</label>
                        <textarea class="form-control" id="directorio" name="directorio"> </textarea>
                         </div>
                         <div class="form-group">
                        <label for="editorial">Editorial de la revista</label>
                        <textarea class="form-control" id="editorial" name="editorial"> </textarea>
                         </div>
                         <div class="form-group">
                      	<h5>Seleccione id_status</h5>
                       	<select class="form-control" id="id_status" name="id_status">
                         		<option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                         </select>
                      </div>
                      <input type="submit" class="btn btn-default" value="Enviar">
                    </form>
                 </div>
        </div>
        
        </div><!--box-->
      </div>  <!--Container-->


<?php include ('../layouts/footer.php'); ?>
        