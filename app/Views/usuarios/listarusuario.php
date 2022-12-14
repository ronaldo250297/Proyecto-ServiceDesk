<?=$cabecera;?>

<a  class="btn btn-success"  href="<?=base_url('crearusuario')?>">Crear Usuario</a>
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
                    <th>DNI</th>
                    <th>NOMBRE</th>
                    <th>APE PAT.</th>
                    <th>APE. MAT.</th>
                    <th>PASSWORD</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>

            <?php
                foreach($usuarios as $usuario):
            ?>
                <tr>
                    <td><?=$usuario['idusu'];?></td>
                    <td><?=$usuario['dniusu'];?></td>
                    <td><?=$usuario['nomusu'];?></td>
                    <td><?=$usuario['apepausu'];?></td>
                    <td><?=$usuario['apemausu'];?></td>
                    <td><?=$usuario['passusu'];?></td>
                    <td>
                        <a href="<?=base_url('editarusuario/'.$usuario['idusu']);?>" class="btn btn-info" type="button">EDITAR</a>
                        <a href="<?=base_url('borrarusuario/'.$usuario['idusu']);?>" class="btn btn-danger" type="button">Borrar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

<?=$pie;?>