<?php 

  	  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Integrante.php');
      include ('../../controllers/IntegranteController.php');
      include ('../../libs/Er.php');
  	  include ('../layouts/header.php');
  
  if(isset($_POST['nombre']))
  {
	
	  $integranteC= new IntegranteController();
	  $integranteC->insertaIntegrante($_POST);
  }
?>

<div class="row">
      	<p class="text-center">
        <img width="50%" height="50%" src="../../images/fifa2014.jpg"/>
        </p>
      </div>
      
           <div class="row">
   
        <div class="col-md-4" id="integrante">
          <h2>Integrante</h2>
 			<form role="form" id="registerForm" method="post">
                      <div class="form-group">
                        <label for="nombre">Nombre del Integrante</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej:Javier">
                        </div>
                        <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ej:Hernandez">
                        </div>
                         <div class="form-group">
                        <label for="peso">Peso</label>
                        <input type="text" class="form-control" id="peso" name="peso" placeholder="Ej:55kg">
                        </div>
                         <div class="form-group">
                        <label for="estatura">Estatura</label>
                        <input type="text" class="form-control" id="estatura" name="estatura" placeholder="Ej:1.76">
                        </div>
                         <div class="form-group">
                        <label for="edad">Edad</label>
                        <input type="text" class="form-control" id="edad" name="edad" placeholder="Ej:35">
                      </div>
                      <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" id="foto" name="foto">
                        <p class="help-block">Cargue la imagen del Integrante aqui</p>
                        </div>
                        <div class="form-group">
                        <p>Seleccione el Equipo</p>
                         <select class="form-control" id="idequipo" name="idequipo">
                         		<option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                         </select>
                         </div>
                         <div class="form-group">
                         <label for="nombre">Tipo de integrante</label>
                          <button type="button" class="btn btn-default" id="botone">Entrenador</button>
                          <button type="button" class="btn btn-default" id="botonj">Jugador</button>
                      </div>
                      <input type="submit" class="btn btn-default" value="Enviar" >
                    </form>
       </div>
        <div class="col-md-4" id="jugador">
          <h2>Tipo de integrante</h2>
         		<form role="form" id="registerForm">
                      <div class="form-group">
                        <label for="numero">N&uacute;mero del jugador</label>
                        <input type="text" class="form-control" id="numero" name="numero" placeholder="Ej:10">
                      </div>
                      <div class="form-group">
                        <p>Seleccione el integrante</p>
                         <select class="form-control" id="idintegrante" name="idintegrante">
                         		<option>Javier Hernandez</option>
                             <option>Tiago Silva</option>
                             <option>Guillermo Ochoa</option>
                         </select>
                         <p>Seleccione la Posici&oacute;n</p>
                         <select class="form-control" id="idposicion" name="idposicion">
                         		<option>Delantero</option>
                             <option>Portero</option>
                             <option>Defensa</option>
                         </select>
                      </div>
                      <button type="submit" class="btn btn-default">Enviar</button>
                    </form>
        </div>
        <div class="col-md-4" id="entrenador">
          <h2>Tipo de integrante</h2>
         		<form role="form" id="registerForm">
                      <div class="form-group">
                         <p>Seleccione el Pa&iacute;s</p>
                         <select class="form-control" id="idpais" name="idpais">
                         		<option>Argentina</option>
                             <option>Brasil</option>
                             <option>USA</option>
                         </select>
                      </div>
                      <button type="submit" class="btn btn-default">Enviar</button>
                    </form>
        </div>
      </div>
      
      

      
      
      
      
      
</div>


<?php include ('../layouts/footer.php'); ?>