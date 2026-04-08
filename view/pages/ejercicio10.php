<?php 
// Ejercicio 10 – Crear una nueva pagina php y agregar el código <?php phpinfo();. Subir la
// pagina al servidor web y analizar cuáles de los datos que se están mostrando son conocidos
// para ustedes.
include_once '../layouts/header.php'; 
?>

<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-[#0054a6] mb-4">Trabajo Práctico 1 - Ejercicio 10</h2>
    <p><?php 
            phpinfo();
    ?></p>
</div>

<?php 
include_once '../layouts/footer.php'; 
?>