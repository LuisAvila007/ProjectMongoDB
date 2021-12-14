<?php

  require_once  "clases/Crud.php";

  $crud = new Crud();

  $id = $_POST['idActualizar'];

  $datos = $crud->obtenerDocumento($id);

  $idMongo = new MongoDB\BSON\ObjectId($datos->_id);



?>


<?php require_once "header.php"; ?>

<div class="container">
    <!----->
    <br>
    <br>
    <br>
    <br>
    <br>
    <!---forma que te va a regresar al inicio-->
    <div class="jumbotron" style="background-color: rgba(255, 255, 255, 0.6);">
        <!----->
        <h1 class="display-4" style="font-family: 'Bernard MT Condensed';  text-align: center;"><img
                src="https://img.icons8.com/external-flatart-icons-solid-flatarticons/64/000000/external-play-button-arrow-flatart-icons-solid-flatarticons-1.png" />
            &nbsp;&nbsp; ACTUALIZAR UN REGISTRO &nbsp;&nbsp; <img
                src="https://img.icons8.com/external-flatart-icons-solid-flatarticons/64/000000/external-play-button-arrow-flatart-icons-solid-flatarticons-1.png" />
        </h1>
        <p class="lead">
        <form action="procesos/agregar.php" method="POST" >
                <!------------->
                <input type="text" name="idActualizar"
                value="<?php echo $idMongo; ?>"
                hidden>
            <!----------->
            <label for="nombre" style="font-family: 'Bernard MT Condensed';"><img
                    src="https://img.icons8.com/bubbles/30/000000/circled-play.png" /> Nombre </label>
            <input type="text" name="nombre" value="<?php echo $datos->nombre;?>" class="form-control" required>
            <!----------->
            <label for="paterno" style="font-family: 'Bernard MT Condensed';"><img
                    src="https://img.icons8.com/bubbles/30/000000/circled-play.png" /> Apellido Paterno </label>
            <input type="text" name="paterno" value="<?php echo $datos->paterno;?>" class="form-control" required>

            <!----------->
            <label for="materno" style="font-family: 'Bernard MT Condensed';"><img
                    src="https://img.icons8.com/bubbles/30/000000/circled-play.png" /> Apellido Materno </label>
            <input type="text" name="materno" value="<?php echo $datos->materno;?>" class="form-control" required>

            <!----------->
            <label for="fecha_nacimiento" style="font-family: 'Bernard MT Condensed';"><img
                    src="https://img.icons8.com/bubbles/30/000000/circled-play.png" /> Fecha de nacimiento </label>
            <input type="date" name="fecha_nacimiento" value="<?php echo $datos->fecha_nacimiento;?>"
                class="form-control" required>
            <br>
            <!----------->
            <p>
                <a href="index.php" class="btn btn-info btn-lg btn-block"
                    style="font-family: 'Bernard MT Condensed';"><img
                        src="https://img.icons8.com/glyph-neue/30/000000/add-bookmark.png" /> REGRESAR</a>
            </p>
            <!------->
            <button class="btn btn-warning btn-lg btn-block" style="font-family: 'Bernard MT Condensed';"><img
                    src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/30/000000/external-agenda-interface-kiranshastry-lineal-kiranshastry.png" />
                ACTUALIZAR</button>
        </form>

        </p>

    </div>
</div>




<?php require_once "scripts.php"; ?>