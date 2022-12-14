<?=$cabecera2;?>

<a  class="btn btn-success"  href="<?=base_url('crearrespuesta')?>">Crear Respuesta</a>
<br/>
<br/>
<div class="container-fluid">
            <form class="d-flex">
                <form action="" method="GET">
                    <input class="form-control me-2" type="search" placeholder="Buscar" name="busqueda"> <br>
                    <button class="btn btn-outline-info" type="submit" name="enviar"><b>BUSCAR</b></button>
                </form>
            </form>
        </div>
        <br/>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>RESPUESTA A INCIDENCIA</th>
                    <th>ID. INCIDENCIA</th>
                    <th>ID. EMPLEADO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>

            <?php
                foreach($respuestas as $respuesta):
            ?>
                <tr>
                    <td><?=$respuesta['idres'];?></td>
                    <td><?=$respuesta['detres'];?></td>
                    <td><?=$respuesta['idinc'];?></td>
                    <td><?=$respuesta['idemp'];?></td>
                    <td>
                        <a href="<?=base_url('editarrespuesta/'.$respuesta['idres']);?>" class="btn btn-info" type="button">EDITAR</a>
                        <a href="<?=base_url('borrarrespuesta/'.$respuesta['idres']);?>" class="btn btn-danger" type="button">BORRAR</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

<?=$pie;?>