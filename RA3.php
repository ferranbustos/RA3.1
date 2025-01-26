<!DOCTYPE html>
<html>
<body>

<?php

echo '<h1>Ejercicio 1</h1>';
$valors = array("Dato 1º"=>"Ana", "Dato 2º"=>"Martinez", "Dato 3º"=>"23", "Dato 4º"=>"Barcelona");
foreach ($valors as $x => $y) {
    echo "$x: $y <br>";
}

echo '<h1>Ejercicio 2</h1>';
    $valors = array("Nombre"=>"Ana", "Apellido"=>"Martinez", "Edad"=>"23", "Poblacion"=>"Barcelona");
    foreach ($valors as $x => $y) {
        echo "$x: $y <br>";
}

echo '<h1 >Ejercicio 3</h1>';
$valors ["Edad"]= 24;
foreach ($valors as $key => $values) {
    echo "$key: $values <br>";
}

echo '<h1>Ejercicio 4</h1>';
$valors = array("Nombre"=>"Sara", "Apellido"=>"Martinez", "Edad"=>"24");
var_dump($valors);



echo '<h1>Ejercicio 5</h1>';
$letters = "a,b,c,d,e,f";

$array_letters = explode(",", $letters);
rsort($array_letters);
foreach ($array_letters as $letter) {
    echo $letter . "\n";
}


echo '<h1>Ejercicio 6</h1>';
$notas = array(
    "Miguel" => 5, "Luis" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1
);

arsort($notas);
echo "Notas de los estudiantes:\n";
foreach ($notas as $nombre => $nota) {
    echo "$nombre: $nota\n";
}
echo '<h1>Ejercicio 7</h1>';
echo "<p>Media de las notas:</p>";
$nota = [ "" => 5.85, ];

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


echo '<h1>Ejercicio 8</h1>';


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


echo '<h1>Ejercicio 9</h1>';
$inventario = [
    ["titulo" => "Naruto", "stock" => 10, "precio" => 8.50],
    ["titulo" => "Spider-Man", "stock" => 5, "precio" => 12.00],
    ["titulo" => "One Piece", "stock" => 8, "precio" => 9.00],
    ["titulo" => "Batman", "stock" => 7, "precio" => 11.50]
];

function mostrarValorAlmacen($inventario) {
    $valorTotal = 0;
    foreach ($inventario as $comic) {
        $valorTotal += $comic["stock"] * $comic["precio"];
    }
    return $valorTotal;
}

echo "Valor total del almacén: " . mostrarValorAlmacen($inventario) . "\n";

?>

</body>
</html>

