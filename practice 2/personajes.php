<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <header class="header">
        <h1 class="titulo">Bienvenidos a nuestra pagina</h1>
        <nav class="menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="#">Tienda</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="personajes.php">Personajes</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <h1>Personajes</h1>

        <div class="botonera_personajes">
            <ul>
                <!--                       aca se declara           -->

                <li><a href="personajes.php?nombre=hp"> Harry Potter</a></li>
                <li><a href="personajes.php?nombre=hg"> Hermione granger</a></li>
                <li><a href="personajes.php?nombre=rw"> Ron Wesley</a></li>
            </ul>
        </div>
        <?php
        //usamos el metodo GET, este llama a la variable  
        if (isset($_GET['nombre'])) {

            $personaje = $_GET['nombre'];

            switch ($personaje) {
                case "hp":
                    $nombre = "Harry Potter";
                    $descripcion = "Protagonista de la serie, conocido como el 'El niño que vivio'.";
                    // print "Hola, soy Harry Potter <br>";
                    $img = "./img/aa.jpeg";
                    break;
                case "hg":
                    $nombre = "Hermione Granger";
                    $descripcion = "Amiga cercana de Harry y Ron, Conocida por su inteligencia y habilidades magicas.";
                    $img = "./img/aa.jpeg";
                    // print "Hola, soy Ron Wesley <br>";
                    break;
                case "rw":
                    // print "Hola, soy Hermaione <br>";
                    $nombre = "Ron Wesley";
                    $descripcion = "Mejor amigo de Harry, proviene de una familia de magos.";
                    $img = "./img/aa.jpeg";
                    break;
                /*default:
                    print "No seleccionaste ningun personaje"; */
                    
            }
        
        ?>
        
        <div class="contenedor_personajes">
            <h3><?php print $nombre; ?></h3>
            <p><?php print $descripcion; ?></p>
            <div class="box_img">
                <img src="<?php print $img ;?>" alt="">
            </div>
        </div>
    <?php } ?>
    </section>