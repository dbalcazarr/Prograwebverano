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
                <h2>Equipos</h2>
                	<form role="form" id="registerForm">
                      <div class="form-group">
                        <label for="nombreeq">Nombre</label>
                        <input type="text" class="form-control" id="nombreeq" name="nombreeq" placeholder="Ej: Francia">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Escudo</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Cargue la imagen del escudo aqui</p>
                        </div>
                        <div class="form-group">
                        <p>Seleccione el Pa&iacute;s</p>
                         <select class="form-control">
                         		<option>Francia</option>
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