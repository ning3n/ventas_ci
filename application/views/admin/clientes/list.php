<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Clientes
        <small>Listado</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url(); ?>mantenimiento/clientes/add" class="btn  btn-primary  btn-flat"><span class="fa  fa-plus"></span> Agregar Clientes</a>                        
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table  table-bordered  btn-hover  table-hover" id="example1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Telefono</th>
                                    <th>Dirección</th>
                                    <th>RUC</th>
                                    <th>Empresa</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($clientes)): ?>
                                    <?php foreach ($clientes as $cliente): ?>
                                        <tr>
                                            <td> <?php echo $cliente->id; ?> </td>
                                            <td> <?php echo $cliente->nombres; ?> </td>
                                            <td> <?php echo $cliente->apellidos; ?> </td>
                                            <td> <?php echo $cliente->telefono; ?> </td>
                                            <td> <?php echo $cliente->direccion; ?> </td>
                                            <td> <?php echo $cliente->ruc; ?> </td>
                                            <td> <?php echo $cliente->empresa; ?> </td>
                                            <td> 
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info  btn-view1" data-toggle="modal" data-target="#modal-default1" value="<?php echo $cliente->id; ?>">
                                                        <span class="fa  fa-search"></span>
                                                    </button>
                                                    <a href="<?php echo base_url();?>mantenimiento/clientes/edit/<?php echo $cliente->id; ?>" class="btn  btn-warning"><span class="fa  fa-pencil"></span></a>
                                                    <a href="<?php echo base_url();?>mantenimiento/clientes/delete/<?php echo $cliente->id; ?>" class="btn  btn-danger  btn-remove1"><span class="fa  fa-remove"></span></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif; ?>
                            </tbody>                            
                        </table>
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
<div class="modal fade" id="modal-default1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Información de Categoria</h4>
            </div>
            <div class="modal-body1">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->