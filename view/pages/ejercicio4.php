<?php 
// Ejercicio 4 – Realizar un programa que, a partir de tres variables enteras llamadas $a, $b y $c,
// muestre por pantalla el valor de la mayor y la menor de ellas. Si por ejemplo asignamos los
// valores 15, 94 y 73 a $a, $b y $c respectivamente, por pantalla debe mostrarse:
// El mayor valor de 15, 94 y 73 es 94
// El menor valor de 15, 94 y 73 es 15
include_once '../layouts/header.php'
?>

<div class="bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-[#0054a6] mb-4">Trabajo Práctico 1 Ejercicio 4</h2>
    <p><?php 
        // $a, $b, $c -> son variables del tipo int (entero)
        $a = 15;
        $b = 94;
        $c = 73;
        // $mayor y $menor -> inicializamos en vacio (0)
        $mayor = 0;
        $menor = 0;

        if ($a > $b){
            $mayor = $a;
            $menor = $b;
        } else {
            $mayor = $b;
            $menor = $a;
        }

        if ($c > $mayor){
            $mayor = $c;
        }

        if ($c < $menor){
            $menor = $c;
        }

        // El mayor valor de 15, 94 y 73 es 94
        $textoMayor = "El mayor valor de $a , $b , $c es: $mayor"; 
        echo $textoMayor;

        echo "<br>";
        // El menor valor de 15, 94 y 73 es 15
        $textoMenor = "El menor valor de $a , $b , $c es: $menor";
        echo $textoMenor;
    ?></p>
</div>

<?php 
include_once '../layouts/footer.php'
?>