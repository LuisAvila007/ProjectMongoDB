<?php
require_once "clases/Crud.php";
//SIEMPRE FALTA UN ;
$obj = new Crud();
//aqui hay un error
$datos = $obj->mostrar();
// echo "<pre>";
// print_r($datos);
// echo "</pre>";
//echo - > es para imprimir
?>
<!------------------------>
<?php require_once "header.php"; ?>
<div class="container mt-4">
    <br>


    <div class="row">
        <div class="col">
            <div class="jumbotron" style="background-color: rgba(255, 255, 255, 0.6);">
                <br>
                <div class="container">
                    <!----------------------------------------------->
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled">Disabled</a>
                                </li>
                            </ul>
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </div>
                    </nav>
                    <br>
                    <!-------------------------------------------------->
                    <h1 class="text-center" style="font-family: 'Be True To Your School';"><img
                            src="https://img.icons8.com/external-flatart-icons-solid-flatarticons/64/000000/external-play-button-arrow-flatart-icons-solid-flatarticons-1.png" />
                        &nbsp;CRUD CON PHP Y MONGODB &nbsp;<img
                            src="https://img.icons8.com/external-flatart-icons-solid-flatarticons/64/000000/external-play-button-arrow-flatart-icons-solid-flatarticons-1.png" />
                    </h1>
                    <p class="lead">

                        <!-- <a href="agregar.php" class="btn btn-primary"> agregar persona</a> -->
                        <!--falta colocar el link de los demas-->
                        <hr>
                    <div class="table-responsive">
                        <table class="table table-hover table-sm table-bordered">
                            <thead>
                                <th style="font-family: 'Bernard MT Condensed'; text-align: center;">NOMBRES</th>
                                <th style="font-family: 'Bernard MT Condensed'; text-align: center;">APELLIDO PATERNO
                                </th>
                                <th style="font-family: 'Bernard MT Condensed'; text-align: center;">APELLIDO MATERNO
                                </th>
                                <th style="font-family: 'Bernard MT Condensed'; text-align: center;">fECHA DE NACIMIENTO
                                </th>
                                <th style="font-family: 'Bernard MT Condensed'; text-align: center;">ELIMINAR</th>
                                <!------>

                                <!------------>
                                <th style="font-family: 'Bernard MT Condensed'; text-align: center;">EDITAR</th>
                                <!------>
                            </thead>
                            <tbody>
                                <!------------------>
                                <?php foreach ($datos as $key) :
                                    $idMongo = new MongoDB\BSON\ObjectId($key->_id);
                                    ?>
                                <tr>
                                    <!------------------>
                                    <td><?php echo $key->nombre; ?></td>
                                    <td><?php echo $key->paterno; ?></td>
                                    <td><?php echo $key->materno; ?></td>
                                    <td><?php echo $key->fecha_nacimiento; ?></td>
                                    <!---------------------------------->
                                    <td>
                                         <form action="eliminar.php" method="POST">
                                        <input type="text" name="_id" hidden value="<?php echo $idMongo ?>">
                                       <button class="btn btn-warning" id="Eliminar">Eliminar </button>
                                       
                                    </form>
                                    <td>

                                        <form action="actualizar.php" method="POST">
                                            <input type="text" name="idActualizar" hidden
                                                value="<?php echo $idMongo ?>">

                                       

      
                                        <button class="btn btn-danger">Editar</button>

                                        </form>

                                        
                                    </td>
                                    </td>
                                    <!------------------------------>
                                   

                                    </td>


                                </tr>
                                <?php endforeach; ?>
                            </tbody>

                        </table>
                        </p>

                    </div>
                </div>

                <a href="agregar.php" class="btn btn-secondary btn-lg btn-block" style="font-family: 'Algerian';"><img
                        src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/30/000000/external-agenda-interface-kiranshastry-lineal-kiranshastry.png" />
                    AGREGAR PERSONA</a>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <iframe width="560" height="315" src="https://www.youtube.com/embed/lWMemPN9t6Q"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <br>
                <br>
                <!--parte de las cards--->
                <div class="row">
                    <div class="col ">
                        <div class="card border-0" style="width: 18rem; background-color: rgba(255, 255, 255, 0.6);">
                            <img src="img/mogo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0" style="width: 18rem; background-color: rgba(255, 255, 255, 0.6);">
                            <img src="img/php.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <br>

                            </div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="card border-0" style="width: 18rem; background-color: rgba(255, 255, 255, 0.6);">
                            <img src="img/mongodb.jfif" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------------->

    <?php require_once "scripts.php"; ?>