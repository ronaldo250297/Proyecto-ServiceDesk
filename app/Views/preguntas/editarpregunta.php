<?=$cabecera;?>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Actualizar Escalabilidad</h5>
            <p class="card-text">

            
    <form method="post" action="<?=site_url('/actualizarpregunta')?>" enctype="multipart/form-data">
        
        <input type="hidden" name="idpre" value="<?=$pregunta['idpre']?>">

        <div class="form-group">
            <label for="pregun">Incidencia</label>
            <input id="pregun" value="<?=$pregunta['pregun']?>" class="form-control" type="text" name="pregun">
        </div>

        <div class="form-group">
            <label for="respre">Escalabilidad</label>
            <input id="respre" value="<?=$pregunta['respre']?>" class="form-control" type="text" name="respre">
        </div>

        <button class="btn btn-success" type="submit">GUARDAR</button>
        <a href="<?=base_url('listarpregunta');?>" class="btn btn-info">CANCELAR</a>

    </form>

            </p>
        </div>
    </div>


    
<?=$pie;?>