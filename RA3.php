<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Práctica Arrays PHP</title>
</head>
<body>

<?php
// EJERCICIO 1
echo '<h2>Ejercicio 1</h2>';
$valors = array("nombre" => "Sara", "apellido" => "Martínez", "edad" => 23, "ciudad" => "Barcelona");
foreach ($valors as $valor) {
    echo $valor;
    echo "<br>";
}
echo "<hr>";

// EJERCICIO 2
echo '<h2>Ejercicio 2</h2>';
foreach ($valors as $clave => $valor) {
    echo "$clave: $valor<br>";
}
echo "<hr>";

// EJERCICIO 3
echo '<h2>Ejercicio 3</h2>';
$valors["edad"] = 24;
foreach ($valors as $clave => $valor) {
    echo "$clave: $valor<br>";
}
echo "<hr>";

// EJERCICIO 4
echo '<h2>Ejercicio 4</h2>';
unset($valors["ciudad"]);
var_dump($valors);
echo "<hr>";

// EJERCICIO 5
echo '<h2>Ejercicio 5</h2>';
$letters = "a,b,c,d,e,f";
$array_letters = explode(",", $letters);
rsort($array_letters);
foreach ($array_letters as $letter) {
    echo $letter;
    echo "<br>";
}
echo "<hr>";

// EJERCICIO 6
echo '<h2>Ejercicio 6</h2>';
$notas = array(
    "Miguel" => 5,
    "Luis" => 7,
    "Marta" => 10,
    "Isabel" => 8,
    "Aitor" => 4,
    "Pepe" => 1
);
arsort($notas);
foreach ($notas as $nombre => $nota) {
    echo "$nombre: $nota<br>";
}
echo "<hr>";

// EJERCICIO 7
echo '<h2>Ejercicio 7</h2>';
$suma = 0;
foreach ($notas as $nota) {
    $suma += $nota;
}
$media = $suma / count($notas);
echo "Media de la clase: " . number_format($media, 2) . "<br>";

echo "Alumnos con nota por encima de la media:<br>";
foreach ($notas as $nombre => $nota) {
    if ($nota > $media) {
        echo "$nombre: $nota<br>";
    }
}
echo "<hr>";

// EJERCICIO 8
echo '<h2>Ejercicio 8</h2>';
$mejorAlumno = "";
$notaMaxima = -1;

foreach ($notas as $nombre => $nota) {
    if ($nota > $notaMaxima) {
        $notaMaxima = $nota;
        $mejorAlumno = $nombre;
    }
}
echo "El mejor alumno es $mejorAlumno con una nota de $notaMaxima.";
echo "<hr>";

// EJERCICIO 9
echo '<h2>Ejercicio 9</h2>';
$inventario = [
    ["titulo" => "Naruto", "stock" => 10, "precio" => 8.50, "idioma" => "japonés"],
    ["titulo" => "Spider-Man", "stock" => 5, "precio" => 12.00, "idioma" => "inglés"],
    ["titulo" => "One Piece", "stock" => 8, "precio" => 9.00, "idioma" => "japonés"],
    ["titulo" => "Batman", "stock" => 7, "precio" => 11.50, "idioma" => "inglés"]
];

// Función para calcular el valor del almacén
function mostrarValorAlmacen($inventario) {
    $valorTotal = 0;
    foreach ($inventario as $comic) {
        $valorTotal += $comic["stock"] * $comic["precio"];
    }
    return $valorTotal;
}

// Función para aplicar descuento del 30% si es japonés
function aplicarDescuentoManga(&$inventario) {
    foreach ($inventario as &$comic) {
        if ($comic["idioma"] == "japonés") {
            $comic["precio"] *= 0.7;
        }
    }
}

// Aplico el descuento
aplicarDescuentoManga($inventario);

// Muestro valor total del almacén con el descuento aplicado
echo "Valor total del almacén (descuento aplicado): " . number_format(mostrarValorAlmacen($inventario), 2) . " €<br><br>";

// Muestro los cómics con su nuevo precio
echo "Cómics tras aplicar el descuento:<br>";
foreach ($inventario as $comic) {
    echo $comic["titulo"] . " (" . $comic["idioma"] . ") - Precio: " . number_format($comic["precio"], 2) . " €<br>";
}

?>

</body>
</html>

