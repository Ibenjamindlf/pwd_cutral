<?php 
// Ejercicio 1 – En un nuevo archivo con extensión php:
// a) Cree una variable, asignarle un valor y muestre su contenido con una instrucción
// echo.
// b) Escriba el valor de la variable de forma que aparezca en un párrafo explicativo (por
// ejemplo: “El valor de X es: …”)
include_once '../layouts/header.php'; 
?>

<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-[#0054a6] mb-4">Trabajo Práctico 1</h2>
    <p><?php 
            // ejercicio A
            $materia = "programacion web dinamica";
            // echo $materia;
            // ejercicio B
            echo "La materia en la que estamos es $materia";
    ?></p>
</div>

<?php 
include_once '../layouts/footer.php'; 
?>