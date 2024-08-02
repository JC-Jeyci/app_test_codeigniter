<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4"><?php echo $titulo; ?></h4>
            <?php \Config\Services::validation()->listErrors(); ?>
            <form method="POST" action="<?php echo base_url(); ?>productos/actualizar" autocomplete="off">
                <?php csrf_field(); ?>
                <input type="hidden" value="<?php echo $producto['id']; ?>" name="id">
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label class="my-2" for="">Código</label>
                            <input class="form-control" id="codigo" name="codigo" type="text" value="<?php echo $producto['codigo']; ?>" autofocus required />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label class="my-2" for="">Nombre</label>
                            <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $producto['nombre']; ?>" autofocus required />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label class="my-2" for="">Unidad</label>
                            <select class="form-select" id="unidad_id" name="unidad_id" required>
                                <option value="">Seleccionar unidad</option>
                                <?php foreach ($unidades as $unidad) { ?>
                                    <option value="<?php echo $unidad['id']; ?>" <?php if ($unidad['id'] == $producto['unidad_id']) {
                                                                                        echo 'selected';
                                                                                    } ?>><?php echo $unidad['nombre']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6">
                            <label class="my-2" for="">Categoria</label>
                            <select class="form-select" id="categoria_id" name="categoria_id" required>
                                <option value="">Seleccionar categoria</option>
                                <?php foreach ($categorias as $categoria) { ?>
                                    <option value="<?php echo $categoria['id']; ?>" <?php if ($categoria['id'] == $producto['categoria_id']) {
                                                                                        echo 'selected';
                                                                                    } ?>><?php echo $categoria['nombre']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label class="my-2" for="">Precio venta</label>
                            <input class="form-control" id="precio_venta" name="precio_venta" type="text" value="<?php echo $producto['precio_venta']; ?>" required />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label class="my-2" for="">Precio compra</label>
                            <input class="form-control" id="precio_compra" name="precio_compra" type="text" value="<?php echo $producto['precio_compra']; ?>" required />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label class="my-2" for="">Stock minimo</label>
                            <input class="form-control" id="stock_minimo" name="stock_minimo" type="text" value="<?php echo $producto['stock_minimo']; ?>" autofocus required />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label class="my-2" for="">Es inventariable</label>
                            <select class="form-select" id="inventariable" name="inventariable" required>
                                <option value="1" <?php if ($producto['inventariable'] == 1) {
                                                        echo 'selected';
                                                    } ?>>Si</option>
                                <option value="0" <?php if ($producto['inventariable'] == 0) {
                                                        echo 'selected';
                                                    } ?>>No</option>
                            </select>
                        </div>
                    </div>
                </div>

                <br>
                <a href="<?php echo base_url(); ?>productos" class="btn btn-primary">Regresar</a>
                <button types="submit" class="btn btn-success mx-1">Guardar</button>
            </form>

        </div>
    </main>