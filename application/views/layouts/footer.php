        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.0
            </div>
            <strong>2019 Ningen</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/template/jquery/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/template/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>assets/template/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>assets/template/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/template/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/template/dist/js/demo.js"></script>
<script>
$(document).ready(function () {
	var base_url= "<?php echo base_url();?>";
	$(".btn-remove").on("click", function(e){
		e.preventDefault();
		var ruta = $(this).attr("href");
		/*alert(ruta);*/
		$.ajax({
			url: ruta,
			type: "POST",
			success: function(resp){
				//http://localhost/ventas_ci/mantenimiento/categorias
				window.location.href = base_url + resp;
			}
		});
	});
	var base_url= "<?php echo base_url();?>";
	$(".btn-remove1").on("click", function(e){
		e.preventDefault();
		var ruta = $(this).attr("href");
		/*alert(ruta);*/
		$.ajax({
			url: ruta,
			type: "POST",
			success: function(resp){
				//http://localhost/ventas_ci/mantenimiento/clientes
				window.location.href = base_url + resp;
			}
		});
	});
	var base_url= "<?php echo base_url();?>";
	$(".btn-remove2").on("click", function(e){
		e.preventDefault();
		var ruta = $(this).attr("href");
		/*alert(ruta);*/
		$.ajax({
			url: ruta,
			type: "POST",
			success: function(resp){
				//http://localhost/ventas_ci/mantenimiento/clientes
				window.location.href = base_url + resp;
			}
		});
	});
	$(".btn-view").on("click", function(){
		var id = $(this).val();
		$.ajax({
			url: base_url + "mantenimiento/categorias/view/" + id,
			type: "POST",
			success: function(resp){
				$("#modal-default  .modal-body").html(resp);
				//alert(resp);
			}
		});
	});
	$(".btn-view1").on("click", function(){
		var id = $(this).val();
		$.ajax({
			url: base_url + "mantenimiento/clientes/view/" + id,
			type: "POST",
			success: function(resp){
				$("#modal-default1  .modal-body1").html(resp);
				//alert(resp);
			}
		});
	});
	$(".btn-view2").on("click", function(){
		var id = $(this).val();
		$.ajax({
			url: base_url + "mantenimiento/productos/view/" + id,
			type: "POST",
			success: function(resp){
				$("#modal-default2  .modal-body2").html(resp);
				//alert(resp);
			}
		});
	});
	$('#example1').DataTable({
		"language": {
			"lengthMenu": "Mostrar _MENU_ registros por pagina",
			"zeroRecords": "No se encontraron resultados en su busqueda",
			"searchPlaceholder": "Buscar registros",
			"info": "Mostrando registros de _START_ al _END_ de un total de _TOTAL_ registros",
			"infoEmpty": "No existen registros",
			"infoFiltered": "(filtrado de un total de _MAX_registros)",
			"search": "Buscar",
			"paginate": {
				"first": "Primero",
				"last": "Último",
				"next": "Siguiente",
				"previous": "Anterior"
			},
		}
	});
	$('.sidebar-menu').tree();
})
</script>

</body>
</html>
