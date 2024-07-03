<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4"><?php echo $titulo; ?></h4>
            <?php \Config\Services::validation()->listErrors(); ?>
            <form method="POST" action="<?php echo base_url(); ?>unidades/insert" autocomplete="off">
                <?php csrf_field(); ?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label class="my-2" for="">Nombre</label>
                            <input class="form-control" id="nombre" name="nombre" type="text" autofocus required />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label class="my-2" for="">Abreviatura</label>
                            <input class="form-control" id="abreviatura" name="abreviatura" type="text" required />
                        </div>
                    </div>
                </div>
                <br>
                <a href="<?php echo base_url(); ?>unidades" class="btn btn-primary">Regresar</a>
                <button types="submit" class="btn btn-success mx-1">Guardar</button>
            </form>

        </div>
    </main>