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
                <h2>Paises</h2>
                	<form role="form" id="registerForm">
                      <div class="form-group">
                        <label for="nombrep">Nombre</label>
                        <input type="text" class="form-control" id="nombrep" name="nombrep" placeholder="Ej: Francia">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Bandera</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Cargue la imagen de la bandera aqui</p>
                        </div>
                        <div class="form-group">
                        <p>Seleccione el continente</p>
                         <select class="form-control">
                         		<option>Oceania</option>
                             <option>Africa</option>
                             <option>America</option>
                         </select>
                      </div>
                      <button type="submit" class="btn btn-default">Enviar</button>
                    </form>
                 </div>
        </div>





</div>


<?php include ('../layouts/footer.php'); ?>