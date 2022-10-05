<?=$cabecera;?>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Actualizar datos de la Incidencia</h5>
            <p class="card-text">

            
    <form method="post" action="<?=site_url('/actualizarincidencia')?>" enctype="multipart/form-data">
        
        <input type="hidden" name="idinc" value="<?=$incidencia['idinc']?>">

        <div class="form-group">
            <label for="nominc">NOMBRE INCIDENCIA</label>
            <input id="nominc" value="<?=$incidencia['nominc']?>" class="form-control" type="text" name="nominc">
        </div>

        <div class="form-group">
            <label for="detinc">DESCRPCION INCIDENCIA</label>
            <input id="detinc" value="<?=$incidencia['detinc']?>" class="form-control" type="text" name="detinc">
        </div>

        <div class="form-group">
            <label for="imginc">IMAGEN INCIDENCIA</label>
            <br/>
            <img class="img-thumbnail" 
                        src="<?=base_url()?>/uploads/<?=$incidencia['imginc'];?>" 
                        width="100" alt="">
            <input id="imginc" value="<?=$incidencia['imginc']?>" class="form-control-file" type="file" name="imginc">
        </div>

        <div class="form-group">
            <label for="idusu">ID USUARIO</label>
            <input id="idusu" value="<?=$incidencia['idusu']?>" class="form-control" type="number" name="idusu">
        </div>

        <button class="btn btn-success" type="submit">GUARDAR</button>
        <a href="<?=base_url('listarincidencia');?>" class="btn btn-info">CANCELAR</a>

    </form>

            </p>
        </div>
    </div>


    
<?=$pie;?>