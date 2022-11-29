<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>TAREA clase 3</h1>
    <br>
    <p>Crear un archivo “tp2_backend.php” y realizar los siguientes ejercicios:
        1. Crear una variable n y validar que sea un número positivo.
        2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.
        3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.
        4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
        mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
        mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
        numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”</p>

    <hr>
    <h1>1</h1>
    <br>

    <?php
    $n = 5;
    if ($n >= 0) {
        echo "n es un numero positivo";
    } else {
        "n es un numero negativo";
    }
    ?>
    <hr>
    <h1>2</h1>
    <br>
    <?php
    if ($n >= 1 & $n <= 10) {
        echo "n es mayor a 1 y menor que 10";
    }
    ?>
    <hr>
    <h1>3</h1>
    <br>
    <?php
    if ($n > 10 or $n < 2) {
        echo "es mayor que 10 o menor que 2";
    } else {
        echo "no es mayor que 10 o menor que 2";
    }
    ?>
    <hr>
    <h1>4</h1>
    <br>
    <?php
    $numero1 = 9;
    $numero2 = 1;
    $suma = $numero1 + $numero2;
    $multi = $numero1 * $numero2;
    $div = $numero1 / $numero2;
    $mod = $numero1 % $numero2;
    if ($numero1 > $numero2) {
        echo "la suma de los numeros es $suma";
    } elseif ($numero1 == $numero2) {
        echo "los numeros son iguales";
    } else {
        echo "la multiplicacion es $multi";
        echo "la divicion es $div";
        echo "el mod es $mod";
    }
    ?>




</body>

</html>