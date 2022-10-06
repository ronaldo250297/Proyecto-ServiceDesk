<?=$cabecera2;?>

    Formulario Nueva Respuesta

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos de la respuesta</h5>
            <p class="card-text">

            
    <form method="post" action="<?=site_url('/guardarrespuesta')?>" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="detres">DETALLE RESPUESTA</label>
            <input id="detres" value="<?=old('detres')?>" class="form-control" type="text" name="detres">
        </div>

        <div class="form-group">
            <label for="idinc">ID. INCIDENCIA</label>
            <input id="idinc" value="<?=old('idinc')?>" class="form-control" type="number" name="idinc">
        </div>

        <div class="form-group">
            <label for="idemp">ID. EMPLEADO</label>
            <input id="idemp" value="<?=old('idemp')?>" class="form-control" type="number" name="idemp">
        </div>

        <button class="btn btn-success" type="submit">GUARDAR</button>
        <a href="<?=base_url('listarrespuesta');?>" class="btn btn-info">CANCELAR</a>

    </form>

            </p>
        </div>
    </div>


<?=$pie;?>