<?=$cabecera;?>

    Formulario Actualizar Migracion

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos de la Migracion</h5>
            <p class="card-text">

            
    <form method="post" action="<?=site_url('/actualizartraslado')?>" enctype="multipart/form-data">
        
        <input type="hidden" name="idtra" value="<?=$traslado['idtra']?>">

        <div class="form-group">
            <label for="idare">ID AREA</label>
            <input id="idare" value="<?=$traslado['idare']?>" class="form-control" type="number" name="idare">
        </div>

        <div class="form-group">
            <label for="idinc">ID INCIDENCIA</label>
            <input id="idinc" value="<?=$traslado['idinc']?>" class="form-control" type="number" name="idinc"  readonly=»readonly»>
        </div>

        <button class="btn btn-success" type="submit">ACTUALIZAR</button>
        <a href="<?=base_url('listartraslado');?>" class="btn btn-info">CANCELAR</a>

    </form>

            </p>
        </div>
    </div>



<?=$pie;?>