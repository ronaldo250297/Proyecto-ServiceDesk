<?=$cabecera;?>

<a  class="btn btn-success"  href="<?=base_url('crearincidencia')?>">Crear Incidencia</a>
<br/>
<br/>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>NOMBRE INCIDENCIA</th>
                    <th>DESCRIPCION INCIDENCIA</th>
                    <th>IMAGEN INCIDENCIA</th>
                    <th>ID CLIENTE</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>

            <?php
                foreach($incidencias as $incidencia):
            ?>
                <tr>
                    <td><?=$incidencia['idinc'];?></td>
                    <td><?=$incidencia['nominc'];?></td>
                    <td><?=$incidencia['detinc'];?></td>
                    <td>
                        <img class="img-thumbnail" 
                        src="<?=base_url()?>/uploads/<?=$incidencia['imginc'];?>" 
                        width="100" alt="">
                    </td>
                    <td><?=$incidencia['idusu'];?></td>
                    <td>
                        <a href="<?=base_url('editarincidencia/'.$incidencia['idinc']);?>" class="btn btn-info" type="button">EDITAR</a>
                        <a href="<?=base_url('borrarincidencia/'.$incidencia['idinc']);?>" class="btn btn-danger" type="button">BORRAR</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

<?=$pie;?>

