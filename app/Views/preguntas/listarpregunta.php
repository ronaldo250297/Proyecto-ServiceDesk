<?=$cabecera;?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="../template/js/buscador.js"></script>

<a  class="btn btn-success"  href="<?=base_url('crearpregunta')?>">Crear Escalabilidad</a>
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

        <?php
        $conexion = mysqli_connect("localhost","root","","servicedesk");
        $where = "";
        if(isset($_GET['enviar'])){
            $busqueda = $_GET['busqueda'];
            if(isset($_GET['busqueda'])){
                $where = "WHERE preguntas.pregun LIKE'%".$busqueda."%'";
            }
        }
        ?>


<br/>
        <table class="table table-striped table-dark table_id">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>INCIDENCIA</th>
                    <th>ESCALABILIDAD</th>
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

