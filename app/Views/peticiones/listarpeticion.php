<?=$cabecera;?>

<a  class="btn btn-success"  href="<?=base_url('crearpeticion')?>">Crear Peticion</a>
<br/>
<br/>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>TITULO PETICION</th>
                    <th>DETALLE PETICION</th>
                    <th>IMAGEN PETICION</th>
                    <th>ID CLIENTE</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>

            <?php
                foreach($peticiones as $peticion):
            ?>
                <tr>
                    <td><?=$peticion['idpet'];?></td>
                    <td><?=$peticion['titpet'];?></td>
                    <td><?=$peticion['detpet'];?></td>
                    <td>
                        <img class="img-thumbnail" 
                        src="<?=base_url()?>/uploads/<?=$peticion['imgpet'];?>" 
                        width="100" alt="">
                    </td>
                    <td><?=$peticion['idusu'];?></td>
                    <td>
                        <a href="<?=base_url('editarpeticion/'.$peticion['idpet']);?>" class="btn btn-info" type="button">EDITAR</a>
                        <a href="<?=base_url('borrarpeticion/'.$peticion['idpet']);?>" class="btn btn-danger" type="button">BORRAR</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

<?=$pie;?>

