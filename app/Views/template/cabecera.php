<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?=base_url('listarusuario');?>">SERVICE DESK</a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?=base_url('listarusuario');?>">USUARIO<span></span></a>
                </li>
                <!--
                <li class="nav-item active">
                    <a class="nav-link" href="<?=base_url('listarempleado');?>">EMPLEADO<span></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?=base_url('listarrespuesta');?>">REG. RESPUESTA<span></span></a>
                </li>
                -->
                <li class="nav-item active">
                    <a class="nav-link" href="<?=base_url('listarincidencia');?>">REG. INCIDENCIA<span></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?=base_url('listarpeticion');?>">REG. PETICION<span></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?=base_url('listarpregunta');?>">PREG. FRECUENTES<span></span></a>
                </li>
                <!--
                <li class="nav-item active">
                    <a class="nav-link" href="<?=base_url('listararea');?>">REG. AREAS INCIDENCIAS<span></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">REG. DET. INCIDENCIAS<span></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?=base_url('listartraslado');?>">INC. X AREA<span></span></a>
                </li>
                -->
            </ul>
        </div>
        <a class="navbar-brand" href="<?=base_url('listarempleado');?>">BITEL</a>
    </nav>


    <div class="container">


    <?php if(session('mensaje')){?>
    <div class="alert alert-danger" role="alert">
        <?php echo session ('mensaje');?>
    </div>
    <?php } ?>