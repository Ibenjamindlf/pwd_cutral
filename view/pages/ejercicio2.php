<?php 
// Ejercicio 2 – Crear un script php que guarde en diferentes variables su nombre, apellido, edad y dirección y luego muestre en pantalla estos datos con letra mayúscula. strtoupper()
// Cuando ejecute la pagina dentro del navegador, observe el código fuente y analice las
// diferencias entre el código escrito y el código que esta viendo. 
include_once '../layouts/header.php'; 
?>

<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-[#0054a6] mb-4">Trabajo Práctico 1 Ejercicio 2</h2>
    <p><?php 
        $nombre = "benjamin";
        $apellido = "de la Fuente";
        $edad = 23;
        $direcccion = "Neuquen";

        $nombreMayuscula = strtoupper($nombre);
        $apellidoMayuscula = strtoupper($apellido);
        $direccionMayuscula = strtoupper($direcccion);

        $texto = "Mi nombre es: $nombreMayuscula  $apellidoMayuscula tengo $edad años y vivo en $direccionMayuscula";

        echo $texto;
    ?></p>
</div>

<?php 
include_once '../layouts/footer.php'; 
?>