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
   
        <div class="col-md-4" id="integrante">
          <h2>Integrante</h2>
 			<form role="form" id="registerForm">
                      <div class="form-group">
                        <label for="nombrei">Nombre del Integrante</label>
                        <input type="text" class="form-control" id="nombrei" name="nombrei" placeholder="Ej:Javier">
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
                        <label for="exampleInputFile">Foto</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Cargue la imagen del Integrante aqui</p>
                        </div>
                        <div class="form-group">
                        <p>Seleccione el Equipo</p>
                         <select class="form-control">
                         		<option>Argentina</option>
                             <option>Francia</option>
                             <option>USA</option>
                         </select>
                         </div>
                         <div class="form-group">
                         <label for="nombre">Tipo de integrante</label>
                          <button type="button" class="btn btn-default" id="botone">Entrenador</button>
                          <button type="button" class="btn btn-default" id="botonj">Jugador</button>
                      </div>
                      <button type="submit" class="btn btn-default" >Enviar</button>
                    </form>
       </div>
        <div class="col-md-4" id="jugador">
          <h2>Tipo de integrante</h2>
         		<form role="form" id="registerForm">
                      <div class="form-group">
                        <label for="numeroj">N&uacute;mero del jugador</label>
                        <input type="text" class="form-control" id="numeroj" name="numeroj" placeholder="Ej:10">
                      </div>
                      <div class="form-group">
                        <p>Seleccione el integrante</p>
                         <select class="form-control">
                         		<option>Javier Hernandez</option>
                             <option>Tiago Silva</option>
                             <option>Guillermo Ochoa</option>
                         </select>
                         <p>Seleccione la Posici&oacute;n</p>
                         <select class="form-control">
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
                         <p>Seleccione la Pa&iacute;s</p>
                         <select class="form-control">
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