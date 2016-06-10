    </div>
     <!-- /#wrapper  (tag inicia no header.php) -->
    </div>
     <!-- /Container -->
	 
    <!-- jQuery -->
    <script src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>


    <!-- Morris Graficos JavaScript -->
    <script src="<?php echo BASE_URL; ?>assets/js/raphael-min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/morris.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/morris-data.js"></script>
	
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo BASE_URL; ?>assets/js/sb-admin-2.js"></script>

	<!-- Scripts com uso do AngularJS (multi selects) -->
	<script src="<?php echo BASE_URL; ?>assets/emissor/cadastrar-produto-inserir-icms.js"></script>

	<div ><a href="#" class="cores">Click</a>
        </div>

	 <div id="cores" class="pull-left">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate dignissimos fugit, porro fugiat esse aperiam, saepe architecto ea voluptatum eius.</p> <a href="#" class="closes">Close</a> 
        </div>
	

<script>
$(".cores, .closes").click(function () {

    var cores = $('.cores');
    var hiding = !cores.hasClass('hides');
    if (hiding) {
        $('.cores').addClass('hides');
    }

    $("#cores").toggle("slide", {
        direction: "right"
    }, 500, function () {
        if (!hiding) {
        	$('.cores').removeClass('hides');
        }
    });

});

</script>
</body>

</html>
