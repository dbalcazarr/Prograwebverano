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
          <h2>Tipo de integrante Entrenador</h2>
         		<form role="form">
                      <div class="form-group">
                         <p>Seleccione el Pa&iacute;s</p>
                         <select class="form-control" id="idpais" name="idpais">
                         		<option>Brasil</option>
                             <option>Alemania</option>
                             <option>Argentina</option>
                         </select>
                      </div>
                      <button type="submit" class="btn btn-default">Enviar</button>
                    </form>
        </div>
        </div>


</div>


<?php include ('../layouts/footer.php'); ?>
