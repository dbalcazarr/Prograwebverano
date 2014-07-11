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
      		<div class="col-md-4" id="integrante">
          <h2>Integrante</h2>
 			<form id="registerForm">
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
                      <h4>Fecha de Nacimiento</h4>
                                <div class='input-group date' id='datetimepicker5' data-date-format="YYYY/MM/DD">
                                    <input type='text' class="form-control" id="fecha" name="fecha"/>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                                    </span>
                                </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputFile">Foto</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Cargue la imagen del Integrante aqui</p>
                        <p>Seleccione el Equipo</p>
                         <select class="form-control">
                         		<option>Argentina</option>
                             <option>Francia</option>
                             <option>USA</option>
                         </select>
                         <label for="nombre">Tipo de integrante</label>
                          <p> <a class="btn btn-success various" data-fancybox-type="iframe" href="entrenador.php">Entrenador</a></p>
                           <p> <a class="btn btn-success various" data-fancybox-type="iframe" href="jugador.php">Jugador</a></p>
                      </div>
                      <button type="submit" class="btn btn-default" >Enviar</button>
                    </form>
       </div>
       </div>
      
      
      
      
      
</div>


<?php include ('../layouts/footer.php'); ?>