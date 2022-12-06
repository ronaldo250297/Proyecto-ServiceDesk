<?=$cabecera2;?>

<a  class="btn btn-success"  href="<?=base_url('creartraslado')?>">Realizar Migracion</a>
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
                    <th>ID. AREA</th>
                    <th>ID. INCIDENCIA</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>

            <?php
                foreach($traslados as $traslado):
            ?>
                <tr>
                    <td><?=$traslado['idtra'];?></td>
                    <td><?=$traslado['idare'];?></td>
                    <td><?=$traslado['idinc'];?></td>
                    <td>
                        <a href="<?=base_url('editartraslado/'.$traslado['idtra']);?>" class="btn btn-info" type="button">EDITAR</a>
                        <a href="<?=base_url('borrartraslado/'.$traslado['idtra']);?>" class="btn btn-danger" type="button">BORRAR</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

<?=$pie;?>