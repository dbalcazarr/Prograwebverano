 
 <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Company 2013</p>
                </div>
            </div>
        </div>

 </div> <!-- /container -->
   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!--<script src="../js/jquery-1.10.2.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="../js/jquery.mousewheel-3.0.6.pack.js"></script>
    <!-- Add fancyBox -->
	<script type="text/javascript" src="../js/jquery.fancybox.pack.js?v=2.1.5"></script>
	<script type="text/javascript" src="../js/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="../js/jquery.fancybox-media.js?v=1.0.6"></script>
	<script type="text/javascript" src="../js/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<script type="text/javascript">
		$(document).ready(function() {
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});
	</script>
    
    <script type="text/javascript" src="../js/moment.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datetimepicker.es.js"></script>
     <script type="text/javascript">
                        $(function () {
                            $('#datetimepicker5').datetimepicker({
									language: 'es',
                                pickTime: false
									
                            });
								$('#datetimepicker1').datetimepicker({
                    				language: 'es',
                    
                				});
                        });
    </script>
    <script type="text/javascript" src="../js/bootstrapValidator.min.js"></script>
    <script src="../js/main.js"></script>
    <script>
				$(document).ready(
					
					function(){
					 $('#entrenador').hide();
					 $('#jugador').hide();
					 
						$('#botonf').click(
							function(){
								$('#integrante').show('slow');
								$('#equipo').show('slow');
							}
							
						)
					
					$('#botone').click(
								function(){
									$('#entrenador').show('slow');
									$('#jugador').hide();
								}
					);
						
						$('#botonj').click(
							function(){
								$('#jugador').show('slow');
								$('#entrenador').hide();
								
							}
						);
						
					});
</script>

  
    

  </body>
</html>