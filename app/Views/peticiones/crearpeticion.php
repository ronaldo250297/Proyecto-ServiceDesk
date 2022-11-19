<?=$cabecera;?>

    Formulario Nueva Peticion

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos de la Peticion</h5>
            <p class="card-text">

            
    <form method="post" action="<?=site_url('/guardarpeticion')?>" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="titpet">TITULO PETICION</label>
            <input id="titpet" value="<?=old('titpet')?>" class="form-control" type="text" name="titpet">
        </div>

        <div class="form-group">
            <label for="detpet">DETALLE PETICION</label>
            <input id="detpet" value="<?=old('detpet')?>" class="form-control" type="text" name="detpet">
        </div>

        <div class="form-group">
            <label for="imgpet">IMAGEN PETICION</label>
            <input id="imgpet" value="<?=old('imgpet')?>" class="form-control-file" type="file" name="imgpet">
        </div>

        <div class="form-group">
            <label for="idusu">ID USUARIO</label>
            <input id="idusu" value="<?=old('idusu')?>" class="form-control" type="number" name="idusu">
        </div>

        <button class="btn btn-success" type="submit">GUARDAR</button>
        <a href="<?=base_url('listarpeticion');?>" class="btn btn-info">CANCELAR</a>

    </form>

            </p>
        </div>
    </div>


<?=$pie;?>