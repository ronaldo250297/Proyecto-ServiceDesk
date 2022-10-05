<?=$cabecera;?>

    Formulario Actualizar Area

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos del area</h5>
            <p class="card-text">

            
    <form method="post" action="<?=site_url('/actualizararea')?>" enctype="multipart/form-data">
        
        <input type="hidden" name="idare" value="<?=$area['idare']?>">

        <div class="form-group">
            <label for="nomare">NOMBRE</label>
            <input id="nomare" value="<?=$area['nomare']?>" class="form-control" type="text" name="nomare">
        </div>

        <div class="form-group">
            <label for="fonoare">NOMBRE</label>
            <input id="fonoare" value="<?=$area['fonoare']?>" class="form-control" type="number" name="fonoare">
        </div>

        <button class="btn btn-success" type="submit">ACTUALIZAR</button>
        <a href="<?=base_url('listararea');?>" class="btn btn-info">CANCELAR</a>

    </form>

            </p>
        </div>
    </div>



<?=$pie;?>