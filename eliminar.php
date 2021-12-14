<?php

require_once "clases/Crud.php";

$crud = new Crud();
$id = $_POST['_id'];
$datos = $crud->obtenerDocumento($id);

$idMongo = new MongoDB\BSON\ObjectId($datos->_id);
//////////////////////////
//vamos a traer bva variable en una tabla
print_r($_POST);
?>

<?php require_once "header.php"; ?>


<div class="container mt-4">
    <br>
    <br>
    <br>
    <br>


    <div class="jumbotron" style="background-color: rgba(255, 255, 255, 0.6);">
        <h1 class="display-4" style="font-family:'Algerian';  text-align: center;"><img
                src="https://img.icons8.com/external-flatart-icons-solid-flatarticons/64/000000/external-play-button-arrow-flatart-icons-solid-flatarticons-1.png" />&nbsp;&nbsp;ELIMINAR
            UN REGISTRO &nbsp;&nbsp;<img
                src="https://img.icons8.com/external-flatart-icons-solid-flatarticons/64/000000/external-play-button-arrow-flatart-icons-solid-flatarticons-1.png" />
        </h1>
        <p class="lead">
            <!---->
            <!--colocamos el color rojo en este trabajo-->
            <br>
        <div class="alert alert-danger" role="alert">

            <h4 class="alert-heading" style="font-family:'Algerian';">Advertencia!</h4>
            <p><a href="index.php" class="btn btn-outline-dark">regresar</a></p>
            <p style="font-family:'Algerian';">estas seguro de eliminar este registro!!!!</p>
            <!----------------->
            <p>
            <table>
                <thead>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Fecha de nacimiento</th>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $datos->nombre; ?></td>
                        <td><?php echo $datos->paterno; ?></td>
                        <td><?php echo $datos->materno; ?></td>
                        <td><?php echo $datos->fecha_nacimiento; ?></td>

                    </tr>

                </tbody>
            </table>
            </p>
            <!----------------->
            <hr>
            <p class="mb-0">
                <form action="procesos/Eliminar.php" method="POST">
                    <input type="text" hidden name="idEliminar" value="<?php echo $idMongo; ?>">

                <button class="btn btn-danger btn-lg btn-block" style="font-family:'Algerian';"><img
                        src="https://img.icons8.com/ios-glyphs/30/000000/delete.png" /> eliminar</button>
                </form>
            </p>
        </div>
        <!---->
        <!--tenemos que ordenar todo por secciones
vamos a estyar -->
        </p>
    </div>
</div>
</div>




<?php require_once "scripts.php"; ?>