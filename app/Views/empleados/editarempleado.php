<?=$cabecera2;?>
    
    Formulario Editar Empleado


    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos del empleado</h5>
            <p class="card-text">

            
    <form method="post" action="<?=site_url('/actualizarempleado')?>" enctype="multipart/form-data">
        
        <input type="hidden" name="idemp" value="<?=$empleado['idemp']?>">

        <div class="form-group">
            <label for="dniemp">DNI</label>
            <input id="dniemp" value="<?=$empleado['dniemp']?>" class="form-control" type="number" name="dniemp">
        </div>

        <div class="form-group">
            <label for="nomemp">NOMBRE</label>
            <input id="nomemp" value="<?=$empleado['nomemp']?>" class="form-control" type="text" name="nomemp">
        </div>

        <div class="form-group">
            <label for="apepaemp">APE. PATERNO</label>
            <input id="apepaemp" value="<?=$empleado['apepaemp']?>" class="form-control" type="text" name="apepaemp">
        </div>

        <div class="form-group">
            <label for="apemaemp">APE. MATERNO</label>
            <input id="apemaemp" value="<?=$empleado['apemaemp']?>" class="form-control" type="text" name="apemaemp">
        </div>

        <div class="form-group">
            <label for="passemp">CONTRASEÑA</label>
            <input id="passemp" value="<?=$empleado['passemp']?>" class="form-control" type="text" name="passemp">
        </div>

        <div class="form-group">
            <label for="fonoemp">TELEFONO</label>
            <input id="fonoemp" value="<?=$empleado['fonoemp']?>" class="form-control" type="text" name="fonoemp">
        </div>

        <button class="btn btn-success" type="submit">ACTUALIZAR</button>
        <a href="<?=base_url('listarempleado');?>" class="btn btn-info">CANCELAR</a>

    </form>

            </p>
        </div>
    </div>





<?=$pie;?>
