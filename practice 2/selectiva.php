

<?php 


$edad = 17;

if ($edad >= 18){
    echo "Sos mayor de edad <br>";
} else {
    echo "Sos menor de edad <br>";
}


// el if/else evalua los rangos que se establecen (valores)
echo "<hr>"; 


$calificacion = 50;


if ($calificacion >= 90){
    echo "Excelente <br>";
} elseif($calificacion >=80 ){
    echo "Muy bien <br>";
} elseif($calificacion >=70 ){
    echo "bien <br>";
}   
 

else {
    echo "Podes mejorar <br>";
}

echo "<hr>";

$nro_personaje = 5;

// el switch es evalua los datos 
switch($nro_personaje){
    case "1":
        print "Hola, soy Harry Potter <br>";
    break;
    case "2":
        print "Hola, soy Ron Wesley <br>";
    break; 
    case "3":
        print "Hola, soy Hermaione <br>";
    break;

    default:
    print "No seleccionaste ningun personaje";


}


print "Continua con la ejecucion del programa";
