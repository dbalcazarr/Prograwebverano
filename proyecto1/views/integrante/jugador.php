<?php 
  session_start();
  include ('../layouts/header.php');
?>
<div class="row">
      	<p class="text-center">
        <img width="50%" height="50%" src="../../images/fifa2014.jpg"/>
        </p>
      </div>

        
 <div class="row">
        	<div class="col-md-12" id="entrenador">
         <h2>Tipo de integrante Jugador</h2>
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
        </div>


</div>


<?php include ('../layouts/footer.php'); ?>
