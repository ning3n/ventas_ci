<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Clientes
        <small>Nuevo</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">

                <div class="row">
                    <div class="col-md-12">
                    	<?php if ($this->session->flashdata("error")):?>
	                    	<div class="alert  alert-danger  alert-dismissible">
	                    		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	                    		<p><i class="icon  fa  fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>                   		
	                    	</div>
	                    <?php endif; ?>
                    	<form action="<?php echo base_url(); ?>mantenimiento/clientes/update" method="POST">
                            <input type="hidden" value="<?php echo $clientes->id; ?>" name="idCliente"> 
                    		<div class="form-group">
                    			<label for="nombre">Nombres: </label>
                    			<input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $clientes->nombres; ?>">
                    		</div>
                    		<div class="form-group">
                    			<label for="descripcion">Apellidos: </label>
                    			<input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $clientes->apellidos; ?>">
                    		</div>
                            <div class="form-group">
                                <label for="nombre">Telefono: </label>
                                <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $clientes->telefono; ?>">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Direccion: </label>
                                <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $clientes->direccion; ?>">
                            </div>
                            <div class="form-group">
                                <label for="nombre">RUC: </label>
                                <input type="text" class="form-control" id="ruc" name="ruc" value="<?php echo $clientes->ruc; ?>">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Empresa: </label>
                                <input type="text" class="form-control" id="empresa" name="empresa" value="<?php echo $clientes->empresa; ?>">
                            </div>                                                        
                    		<div class="form-group">
                    			<button type="submit" class="btn  btn-success  btn-flat">Guardar</button>                    			
                    		</div>
                    	</form>
                    </div>
                </div>
            </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->