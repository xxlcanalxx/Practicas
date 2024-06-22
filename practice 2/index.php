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

    <section class="personajes">
        <h2>Personajes de Harry Potter</h2>
        <ul>
            <?php
            
            //DEFINIR COMO UN ARRAY
            /*$personajes = array("harry", 3, true);

            print $personajes[0] . "<br>";
            print $personajes[2] . "<br>";
            print $personajes[1] . "<br>";

            //ejemplo de una array asociativo
            $personajes_datos = array("nombre" => "harry", "edad" => 13, "hechizo" => false);

            print "nombre:" . $personajes_datos["nombre"] . "<br>";
            print "edad:" . $personajes_datos["edad"] . "<br>";
            print "Hechizo:" . ($personajes_datos["hechizo"] ? "Si" : "No" ). "<br>";
            */

            $lista_personajes =  array(
                "Harry Potter" => "Protagonista de la serie, conocido como el 'El niño que vivio'." , "Hermione" => "Amiga cercana de Harry y Ron, Conocida por su inteligencia y habilidades magicas.", "Ron" => "Mejor amigo de Harry, proviene de una familia de magos.", "Albus Dumbeldore" => "Director de haward");
 


            foreach ($lista_personajes as $nombre => $descripcion){
                print "<li> <span class= 'items' > $nombre:</span> $descripcion </li>";}
            
            
            ?>
        </ul>
    </section>

    <footer class="footer">
        <p>Derecho reservado &copy: 2024</p>
    </footer>

</body>

</html>