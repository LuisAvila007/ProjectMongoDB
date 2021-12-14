<?php require_once "header.php"; ?>


<div class="container">
    <!----->
    <br>
    <br>
    <div class="jumbotron" style="background-color: rgba(255, 255, 255, 0.6);">

        <h1 class="display-4" style="font-family:'Bernard MT Condensed'; text-align: center;"><img
                src="https://img.icons8.com/external-flatart-icons-solid-flatarticons/64/000000/external-play-button-arrow-flatart-icons-solid-flatarticons-1.png" />
            &nbsp;&nbsp; AGREGAR REGISTRO DE NUEVO &nbsp;&nbsp;<img
                src="https://img.icons8.com/external-flatart-icons-solid-flatarticons/64/000000/external-play-button-arrow-flatart-icons-solid-flatarticons-1.png" />
        </h1>
        <p class="lead">
        <form action="procesos/agregar.php" method="POST">
            <!----------->
            <label for="nombre" style="font-family: 'Bernard MT Condensed';"><img
                    src="https://img.icons8.com/bubbles/30/000000/circled-play.png" /> NOMBRE </label>
            <input type="text" name="nombre" class="form-control" required>
            <!----------->
            <label for="paterno" style="font-family: 'Bernard MT Condensed';"><img
                    src="https://img.icons8.com/bubbles/30/000000/circled-play.png" /> APELLIDO PATERNO </label>
            <input type="text" name="paterno" class="form-control" required>

            <!----------->
            <label for="materno" style="font-family: 'Bernard MT Condensed';"><img
                    src="https://img.icons8.com/bubbles/30/000000/circled-play.png" /> APELLIDO MATERNO </label>
            <input type="text" name="materno" class="form-control" required>

            <!----------->
            <label for="fecha_nacimiento" style="font-family: 'Bernard MT Condensed';"><img
                    src="https://img.icons8.com/bubbles/30/000000/circled-play.png" /> FECHA DE NACIMIENTO </label>
            <input type="date" name="fecha_nacimiento" class="form-control" required>
            <br>

            <!---forma que te va a regresar al inicio-->
            <p>
                <a href="index.php" class="btn btn-info btn-lg btn-block"
                    style="font-family: 'Bernard MT Condensed';"><img
                        src="https://img.icons8.com/glyph-neue/30/000000/add-bookmark.png" /> REGRESAR</a>
            </p>
            <!----->


            <!----------->
            <button class="btn btn-warning btn-lg btn-block" style="font-family: 'Bernard MT Condensed';"><img
                    src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/30/000000/external-agenda-interface-kiranshastry-lineal-kiranshastry.png" />
                AGREGAR</button>
        </form>

        </p>
    </div>
</div>





<?php require_once "scripts.php"; ?>