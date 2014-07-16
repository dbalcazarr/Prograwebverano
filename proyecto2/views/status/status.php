<?php 

  	  include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Status.php');
      include ('../../controllers/StatusController.php');
      include ('../../libs/Er.php');
  	  include ('../layouts/header.php');
  
  if(isset($_POST['status']))
  {
	
	  $statusC= new StatusController();
	  $statusC->insertaStatus($_POST);
  }
?>
			<div class="box">
        	<div class="row">
            <div class="col-md-4">
            </div>
            	<div class="col-md-4">
                      <h2>Status</h2>
                	<form id="registerForm" method="post">
                      <div class="form-group">
                        <label for="status">Status</label>
                        <textarea class="form-control" id="status" name="status"> </textarea>
                         </div>
                      <input type="submit" class="btn btn-default" value="Enviar">
                    </form>
                 </div>
        </div>
        
        </div><!--box-->
        
      </div>  <!--Container-->


<?php include ('../layouts/footer.php'); ?>
