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
            <div class="col-md-4">
            </div>
            	<div class="col-md-4">
                <h2>Posici&oacute;n</h2>
                	<form role="form" id="registerForm">
                      <div class="form-group">
                        <label for="nombrepos">Nombre de la Posici&oacute;n</label>
                        <input type="text" class="form-control" id="nombrepos" name="nombrepos" placeholder="Ej:Delantero">
                      </div>
                      <div class="form-group">
                        <label for="abrevia">Abreviatura</label>
                        <input type="text" class="form-control" id="abrevia" name="abrevia" placeholder="Ej:del">
                      </div>
                      <button type="submit" class="btn btn-default">Enviar</button>
                    </form>
                 </div>
        </div>
      </div>


<?php include ('../layouts/footer.php'); ?>