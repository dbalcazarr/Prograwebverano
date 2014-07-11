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
                <h2>Estadio</h2>
                	<form role="form" id="registerForm">
                      <div class="form-group">
                        <label for="nombree">Nombre del estadio</label>
                        <input type="text" class="form-control" id="nombree" name="nombree" placeholder="Ej:Maracana">
                        </div>
                        <div class="form-group">
                      	<h5>Seleccione una ciudad</h5>
                       <select class="form-control">
                         		<option>Ciudad..</option>
                             <option>Rio de Janeiro</option>
                             <option>Fortaleza</option>
                         </select>
                      </div>
                      
                      <button type="submit" class="btn btn-default">Enviar</button>
                    </form>
                 </div>
        </div>
      
 </div>


<?php include ('../layouts/footer.php'); ?>