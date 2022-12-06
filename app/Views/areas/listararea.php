<?=$cabecera2;?>

<a  class="btn btn-success"  href="<?=base_url('creararea')?>">Crear Area</a>
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
                    <th>AREA</th>
                    <th>TELEFONO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>

            <?php
                foreach($areas as $area):
            ?>
                <tr>
                    <td><?=$area['idare'];?></td>
                    <td><?=$area['nomare'];?></td>
                    <td><?=$area['fonoare'];?></td>
                    <td>
                        <a href="<?=base_url('editararea/'.$area['idare']);?>" class="btn btn-info" type="button">EDITAR</a>
                        <a href="<?=base_url('borrararea/'.$area['idare']);?>" class="btn btn-danger" type="button">BORRAR</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

<?=$pie;?>