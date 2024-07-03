<?php 

//while
  
$i = 1;

print "Contar hasta 5 <br>";

while($i <= 5){
    print $i . "<br>";
    $i++;
}


// $estudiantes = [["harry", 1], ["Hermaione"], ["Ron" , "Wesley"]];
// print $estudiantes[2][1]; 

//en lo de abajo estamos estableciendo el valor a la clave valor, en el de arriba se asigna por default numeros a los arrays

// $estudiantes = [['nombre' => "Harry" , 'apellido' => "Potter"] , ['nombre' => "Hermione"] , ['nombre' => "Ron", 'apellido' => "Wesley"]];
// print $estudiantes[2]['nombre']; 


// en el ejemplo siguiente vamos a utilziar el while para imprimir el valor de 'estudiantes' sin tener que hacerlo uno a uno


$estudiantes = [
    ['nombre' => "Harry" , 'apellido' => "Potter" , 'casa' => "Gryffindor"] ,
    ['nombre' => "Hermione", 'apellido' => "Granger", 'casa' => "Gryffindor"] ,
    ['nombre' => "Ron", 'apellido' => "Wesley", 'casa' => "Gryffindor" ],
    ['nombre' => "Neville", 'apellido' => "Longbottom", 'casa' => "Gryffindor"] ,
    ['nombre' => "Ginny", 'apellido' => "Wesley", 'casa' => "Gryffindor"], 
    ['nombre' => "Draco", 'apellido' => "Malfoid", 'casa' => "Slythering"],
];
// print $estudiantes[2]['nombre'];

//total estudiantes los vamos a calcular, creando primero una variable para el bucle
print "<hr>";

// $i = 0;
// $total_estudiantes = count($estudiantes);

// while ($i < $total_estudiantes){

//     if ($estudiantes [$i]['casa'] == 'Gryffindor'){

//     print $estudiantes [$i]['nombre'] . ' '. $estudiantes [$i]['apellido'] . '<br>';
// }
// $i++;
// }

print "<hr>";

//DO WHILE
 
// Inicializacion del bucle

/*
$i = 1;
do{
    print "El numero es:" . $i . "<br>";
    $i++;
}
while ($i <=5);
*/
/*

FOR
for($i = 1; $i <= 5; $i++){
    print "El numero es:" . $i . "<br>";
}



*/

/*

$personajes = array ("Harry", "Hermione", "Ron", "Dumbledore", "Snape", "Draco");

print "<ul>";

for($i = 0; $i < count($personajes); $i++){
    print "<li>" . $personajes[$i] . "</li>";
};

print "</ul>";
*/
/*

$estudiantes = [
    ['nombre' => "Harry" , 'apellido' => "Potter" , 'casa' => "Gryffindor"] ,
    ['nombre' => "Hermione", 'apellido' => "Granger", 'casa' => "Gryffindor"] ,
    ['nombre' => "Ron", 'apellido' => "Wesley", 'casa' => "Gryffindor" ],
    ['nombre' => "Neville", 'apellido' => "Longbottom", 'casa' => "Gryffindor"] ,
    ['nombre' => "Ginny", 'apellido' => "Wesley", 'casa' => "Gryffindor"], 
    ['nombre' => "Draco", 'apellido' => "Malfoid", 'casa' => "Slythering"],
];

*/
//FOR EACH

/*
print "<h3>Estudiantes de Hogwarts</h3>";

print "<ul>";

foreach($estudiantes as $estudiante){
    print "<li>";
        print "Nombre: " . $estudiante['nombre'] . " " . $estudiante['apellido'] . " - Casa " . $estudiante['casa'];
    print "</li>";
}
print "</ul>";
*/

//TABLA DE MULTIPLICACION: 

/*
print "<hr>";

print "<h2> Tablas  de multiplicacion </h2>";

for($i = 1; $i <= 10; $i++){
    print "<h3>Tabla del indice $i </h3>";
    print "<ul>";
    for($numero = 1; $numero <= 10; $numero++){
        
    $resultado = $i * $numero;
        print "<li> $i x $numero = $resultado </li>";
    }

    print "</ul>";

};

*/

