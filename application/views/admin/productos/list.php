<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Productos
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
                        <a href="<?php echo base_url(); ?>mantenimiento/productos/add" class="btn  btn-primary  btn-flat"><span class="fa  fa-plus"></span> Agregar Producto</a>
                        <a href="<?php echo base_url(); ?>mantenimiento/productos/add" class="btn  btn-primary  btn-flat"><span class="fa  fa-plus"></span> Agregar Producto</a> 
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table  table-bordered  btn-hover  table-hover" id="example1">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Precio</th>
                                    <th>Stock</th>
                                    <th>Categoria</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($productos)): ?>
                                    <?php foreach ($productos as $producto): ?>
                                        <tr>
                                            <td> <?php echo $producto->id; ?> </td>
                                            <td> <?php echo $producto->codigo; ?> </td>
                                            <td> <?php echo $producto->nombre; ?> </td>
                                            <td> <?php echo $producto->descripcion; ?> </td>
                                            <td> <?php echo $producto->precio; ?> </td>
                                            <td> <?php echo $producto->stock; ?> </td>
                                            <td> <?php echo $producto->categoria_id; ?> </td>
                                            <td> 
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info  btn-view2" data-toggle="modal" data-target="#modal-default2" value="<?php echo $producto->id; ?>">
                                                        <span class="fa  fa-search"></span>
                                                    </button>
                                                    <a href="<?php echo base_url();?>mantenimiento/productos/edit/<?php echo $producto->id; ?>" class="btn  btn-warning"><span class="fa  fa-pencil"></span></a>
                                                    <a href="<?php echo base_url();?>mantenimiento/productos/delete/<?php echo $producto->id; ?>" class="btn  btn-danger  btn-remove2"><span class="fa  fa-remove"></span></a>
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
<div class="modal fade" id="modal-default2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Información de Categoria</h4>
            </div>
            <div class="modal-body2">
                
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
