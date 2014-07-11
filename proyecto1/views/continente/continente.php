<?php 
  session_start();
  include ('../layouts/header.php');
?>
<div class="row">
      	<p class="text-center">
        <img width="50%" height="50%" src="../../images/fifa2014.jpg"/>
        </p>
      </div>

        	<div class="row" id="registerForm">
            	<div class="col-md-4">
                </div>
            	<div class="col-md-4">
                <h2>Continentes</h2>
                	<form role="form">
                      <div class="form-group">
                        <label for="nombrec">Nombre del continente</label>
                        <input type="text" class="form-control" id="nombrec" name="nombrec" placeholder="Ej:America">
                      </div>
                      <button type="submit" class="btn btn-default">Enviar</button>
                    </form>
                 </div>
        </div>
</div>


<?php include ('../layouts/footer.php'); ?>