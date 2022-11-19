<?=$cabecera;?>

    Formulario Nuevo Usuarios

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos del usuario</h5>
            <p class="card-text">

            
    <form method="post" action="<?=site_url('/guardarusuario')?>" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="dniusu">DNI</label>
            <input id="dniusu" value="<?=old('dniusu')?>" class="form-control" type="number" name="dniusu">
        </div>

        <div class="form-group">
            <label for="nomusu">NOMBRE</label>
            <input id="nomusu" value="<?=old('nomusu')?>" class="form-control" type="text" name="nomusu">
        </div>

        <div class="form-group">
            <label for="apepausu">APE. PATERNO</label>
            <input id="apepausu" value="<?=old('apepausu')?>" class="form-control" type="text" name="apepausu">
        </div>

        <div class="form-group">
            <label for="apemausu">APE. MATERNO</label>
            <input id="apemausu" value="<?=old('apemausu')?>" class="form-control" type="text" name="apemausu">
        </div>

        <div class="form-group">
            <label for="passusu">CONTRASEÑA</label>
            <input id="passusu" value="<?=old('passusu')?>" class="form-control" type="text" name="passusu">
        </div>

        <button class="btn btn-success" type="submit">GUARDAR</button>
        <a href="<?=base_url('listarusuario');?>" class="btn btn-info">CANCELAR</a>

    </form>

            </p>
        </div>
    </div>


<?=$pie;?>