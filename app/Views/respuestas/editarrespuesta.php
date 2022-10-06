<?=$cabecera2;?>

    Formulario Actualizar Respuesta

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos de la respuesta</h5>
            <p class="card-text">

            
    <form method="post" action="<?=site_url('/actualizarrespuesta')?>" enctype="multipart/form-data">
        
        <input type="hidden" name="idres" value="<?=$respuesta['idres']?>">

        <div class="form-group">
            <label for="detres">DETALLE RESPUESTA</label>
            <input id="detres" value="<?=$respuesta['detres']?>" class="form-control" type="text" name="detres">
        </div>

        <div class="form-group">
            <label for="idinc">ID. INCIDENCIA</label>
            <input id="idinc" value="<?=$respuesta['idinc']?>" class="form-control" type="number" name="idinc"  readonly=»readonly»>
        </div>

        <div class="form-group">
            <label for="idemp">ID. EMPLEADO</label>
            <input id="idemp" value="<?=$respuesta['idemp']?>" class="form-control" type="number" name="idemp"  readonly=»readonly»>
        </div>

        <button class="btn btn-success" type="submit">ACTUALIZAR</button>
        <a href="<?=base_url('listarrespuesta');?>" class="btn btn-info">CANCELAR</a>

    </form>

            </p>
        </div>
    </div>



<?=$pie;?>