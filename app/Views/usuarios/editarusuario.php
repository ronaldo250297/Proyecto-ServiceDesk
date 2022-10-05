<?=$cabecera;?>

    Formulario Actualizar Usuario

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos del usuario</h5>
            <p class="card-text">

            
    <form method="post" action="<?=site_url('/actualizarusuario')?>" enctype="multipart/form-data">
        
        <input type="hidden" name="idusu" value="<?=$usuario['idusu']?>">

        <div class="form-group">
            <label for="dniusu">DNI</label>
            <input id="dniusu" value="<?=$usuario['dniusu']?>" class="form-control" type="number" name="dniusu">
        </div>

        <div class="form-group">
            <label for="nomusu">NOMBRE</label>
            <input id="nomusu" value="<?=$usuario['nomusu']?>" class="form-control" type="text" name="nomusu">
        </div>

        <div class="form-group">
            <label for="apepausu">APE. PATERNO</label>
            <input id="apepausu" value="<?=$usuario['apepausu']?>" class="form-control" type="text" name="apepausu">
        </div>

        <div class="form-group">
            <label for="apemausu">APE. MATERNO</label>
            <input id="apemausu" value="<?=$usuario['apemausu']?>" class="form-control" type="text" name="apemausu">
        </div>

        <div class="form-group">
            <label for="passusu">CONTRASEÑA</label>
            <input id="passusu" value="<?=$usuario['passusu']?>" class="form-control" type="text" name="passusu">
        </div>

        <button class="btn btn-success" type="submit">ACTUALIZAR</button>
        <a href="<?=base_url('listarusuario');?>" class="btn btn-info">CANCELAR</a>

    </form>

            </p>
        </div>
    </div>



<?=$pie;?>