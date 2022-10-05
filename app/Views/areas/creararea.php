<?=$cabecera;?>

    Formulario Nuevo Area

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos del area</h5>
            <p class="card-text">

            
    <form method="post" action="<?=site_url('/guardararea')?>" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="nomare">AREA</label>
            <input id="nomare" value="<?=old('nomare')?>" class="form-control" type="text" name="nomare">
        </div>

        <div class="form-group">
            <label for="fonoare">TELEFONO</label>
            <input id="fonoare" value="<?=old('fonoare')?>" class="form-control" type="number" name="fonoare">
        </div>

        <button class="btn btn-success" type="submit">GUARDAR</button>
        <a href="<?=base_url('listararea');?>" class="btn btn-info">CANCELAR</a>

    </form>

            </p>
        </div>
    </div>


<?=$pie;?>