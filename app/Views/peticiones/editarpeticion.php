<?=$cabecera;?>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Actualizar datos de la Peticion</h5>
            <p class="card-text">

            
    <form method="post" action="<?=site_url('/actualizarpeticion')?>" enctype="multipart/form-data">
        
        <input type="hidden" name="idpet" value="<?=$peticion['idpet']?>">

        <div class="form-group">
            <label for="titpet">TITULO PETICION:</label>
            <input id="titpet" value="<?=$peticion['titpet']?>" class="form-control" type="text" name="titpet">
        </div>

        <div class="form-group">
            <label for="detpet">DESCRPCION INCIDENCIA</label>
            <input id="detpet" value="<?=$peticion['detpet']?>" class="form-control" type="text" name="detpet">
        </div>

        <div class="form-group">
            <label for="imgpet">IMAGEN PETICION</label>
            <br/>
            <img class="img-thumbnail" 
                        src="<?=base_url()?>/uploads/<?=$peticion['imgpet'];?>" 
                        width="100" alt="">
            <input id="imgpet" value="<?=$peticion['imgpet']?>" class="form-control-file" type="file" name="imgpet">
        </div>

        <div class="form-group">
            <label for="idusu">ID USUARIO</label>
            <input id="idusu" value="<?=$peticion['idusu']?>" class="form-control" type="number" name="idusu">
        </div>

        <button class="btn btn-success" type="submit">GUARDAR</button>
        <a href="<?=base_url('listarpeticion');?>" class="btn btn-info">CANCELAR</a>

    </form>

            </p>
        </div>
    </div>


    
<?=$pie;?>