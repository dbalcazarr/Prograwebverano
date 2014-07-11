<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clase programación web verano</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
	<link rel="stylesheet" href="../css/bootstrapValidator.min.css"/>
    <link rel="stylesheet" href="../css/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="../css/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="../css/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />

  </head>
        
 <div class="row">
        	<div class="col-md-12" id="entrenador">
         <h2>Tipo de integrante Jugador</h2>
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
        </div>


</div>


<?php include ('../layouts/footer.php'); ?>
