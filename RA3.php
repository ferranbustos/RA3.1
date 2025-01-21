<!DOCTYPE html>
<html>
<body>

<?php
//Ejercicio 1 Arrays
echo '<h1 style="text-align: left; font-size: 20px; margin-bottom: 15px;">Ejercicio 1</h1>';
$valors = array("Dato 1º"=>"Ana", "Dato 2º"=>"Martinez", "Dato 3º"=>"23", "Dato 4º"=>"Barcelona");
foreach ($valors as $x => $y) {
    echo "$x: $y <br>";
}
//Ejercicio 2 Arrays
echo '<h1 style="text-align: Left; font-size: 20px; margin-bottom: 15px;">Ejercicio 2</h1>';
    $valors = array("Nombre"=>"Ana", "Apellido"=>"Martinez", "Edad"=>"23", "Poblacion"=>"Barcelona");
    foreach ($valors as $x => $y) {
        echo "$x: $y <br>";
}
//Ejercicio 3 Arrays
echo '<h1 style="text-align: Left; font-size: 20px; margin-bottom: 15px;">Ejercicio 3</h1>';
$valors ["Edad"]= 24;
foreach ($valors as $key => $values) {
    echo "$key: $values <br>";
}
//Ejercicio 4 Arrays
echo '<h1 style="text-align: Left; font-size: 20px; margin-bottom: 15px;">Ejercicio 4</h1>';
$valors = array("Nombre"=>"Sara", "Apellido"=>"Martinez", "Edad"=>"24");
var_dump($valors);



//Ejercicio 5 Arrays
echo '<h1 style="text-align: Left; font-size: 20px; margin-bottom: 15px;">Ejercicio 5</h1>';
$letters = "a,b,c,d,e,f";

$array_letters = explode(",", $letters);
rsort($array_letters);
foreach ($array_letters as $letter) {
    echo $letter . "\n";
}

//Ejercicio 6 Arrays
echo '<h1 style="text-align: Left; font-size: 20px; margin-bottom: 15px;">Ejercicio 6</h1>';
$notas = array(
    "Miguel" => 5, "Luis" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1
);

arsort($notas);
echo "Notas de los estudiantes:\n";
foreach ($notas as $nombre => $nota) {
    echo "$nombre: $nota\n";
}
//Ejercicio 7 Arrays
echo '<h1 style="text-align: Left; font-size: 20px; margin-bottom: 15px;">Ejercicio 7</h1>';
echo "<p>Media de las notas:</p>";
$nota = [
    "" => 5.85, 

];
foreach ($nota as $nombre => $notas) {
    echo "$nombre: $notas<br>";
}

echo "<p>Alumnos con nota por encima de la media:</p>";
$medias = [
    "Marta",  "Isabel",  "Luis", 
];
foreach ($medias as $nombre => $media) {
    echo "$nombre: $media<br>";
}

//Ejercico 8 Arrays
echo '<h1 style="text-align: Left; font-size: 20px; margin-bottom: 15px;">Ejercicio 8</h1>';


$alumnos = [
    ["nombre" => "Marta", "nota" => 10],
    ["nombre" => "Isabel", "nota" => 8],
    ["nombre" => "Miguel", "nota" => 5],
    ["nombre" => "Pepe", "nota" => 1],
    ["nombre" => "Aitor", "nota" => 4],
    ["nombre" => "Lluis", "nota" => 7],
];


$mejorAlumno = null;
$notaMaxima = -1;


foreach ($alumnos as $alumno) {
    if ($alumno["nota"] > $notaMaxima) {
        $notaMaxima = $alumno["nota"];
        $mejorAlumno = $alumno["nombre"];
    }
}


echo "El mejor alumno es $mejorAlumno con una nota de $notaMaxima.";


?>

</body>
</html>

