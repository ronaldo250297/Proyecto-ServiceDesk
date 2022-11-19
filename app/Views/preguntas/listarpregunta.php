<?=$cabecera;?>

<a  class="btn btn-success"  href="<?=base_url('crearpregunta')?>">Crear Pregunta</a>
<br/>
<br/>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>PREGUNTA FRECUENTE</th>
                    <th>RESPUESTA</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>

            <?php
                foreach($preguntas as $pregunta):
            ?>
                <tr>
                    <td><?=$pregunta['idpre'];?></td>
                    <td><?=$pregunta['pregun'];?></td>
                    <td><?=$pregunta['respre'];?></td>
                    <td>
                        <a href="<?=base_url('editarpregunta/'.$pregunta['idpre']);?>" class="btn btn-info" type="button">EDITAR</a>
                        <a href="<?=base_url('borrarpregunta/'.$pregunta['idpre']);?>" class="btn btn-danger" type="button">BORRAR</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

<?=$pie;?>

