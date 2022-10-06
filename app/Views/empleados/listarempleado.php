<?=$cabecera2;?>
    
<a  class="btn btn-success"  href="<?=base_url('crearempleado')?>">Crear Empleado</a>
<br/>
<br/>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>DNI</th>
                    <th>NOMBRE</th>
                    <th>APE PAT.</th>
                    <th>APE. MAT.</th>
                    <th>PASSWORD</th>
                    <th>TELEFONO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>

            <?php
                foreach($empleados as $empleado):
            ?>
                <tr>
                    <td><?=$empleado['idemp'];?></td>
                    <td><?=$empleado['dniemp'];?></td>
                    <td><?=$empleado['nomemp'];?></td>
                    <td><?=$empleado['apepaemp'];?></td>
                    <td><?=$empleado['apemaemp'];?></td>
                    <td><?=$empleado['passemp'];?></td>
                    <td><?=$empleado['fonoemp'];?></td>
                    <td>
                        <a href="<?=base_url('editarempleado/'.$empleado['idemp']);?>" class="btn btn-info" type="button">EDITAR</a>
                        <a href="<?=base_url('borrarempleado/'.$empleado['idemp']);?>" class="btn btn-danger" type="button">BORRAR</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>


<?=$pie;?>