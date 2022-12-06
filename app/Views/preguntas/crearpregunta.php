<?=$cabecera;?>

    Formulario Escalabilidad

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos de la Escalabilidad</h5>
            <p class="card-text">

            
    <form method="post" action="<?=site_url('/guardarpregunta')?>" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="pregun">Incidencia</label>
            <input id="pregun" value="<?=old('pregun')?>" class="form-control" type="text" name="pregun">
        </div>

        <div class="form-group">
            <label for="respre">Escalabilidad</label>
            <input id="respre" value="<?=old('respre')?>" class="form-control" type="text" name="respre">
        </div>

        <button class="btn btn-success" type="submit">GUARDAR</button>
        <a href="<?=base_url('listarpregunta');?>" class="btn btn-info">CANCELAR</a>

    </form>

            </p>
        </div>
    </div>


<?=$pie;?>