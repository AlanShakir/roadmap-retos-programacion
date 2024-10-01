
/*
 * EJERCICIO:
 * - Crea ejemplos utilizando todos los tipos de operadores de tu lenguaje:
 *   Aritméticos, lógicos, de comparación, asignación, identidad, pertenencia, bits...
 *   (Ten en cuenta que cada lenguaje puede poseer unos diferentes)
 * - Utilizando las operaciones con operadores que tú quieras, crea ejemplos
 *   que representen todos los tipos de estructuras de control que existan
 *   en tu lenguaje:
 *   Condicionales, iterativas, excepciones...
 * - Debes hacer print por consola del resultado de todos los ejemplos.
 *
 * DIFICULTAD EXTRA (opcional):
 * Crea un programa que imprima por consola todos los números comprendidos
 * entre 10 y 55 (incluidos), pares, y que no son ni el 16 ni múltiplos de 3.
 *
 * Seguro que al revisar detenidamente las posibilidades has descubierto algo nuevo.
 */
<?php
//Operadores aritmeticos

$num1 =10;
$num2 = 12;

echo 'La suma es igual a:' . $num1 + $num2.PHP_EOL;
echo 'La resta es igual a:' . $num1 -$num2 . PHP_EOL;
echo 'Multiplicacion = ' . $num1 * $num2 . PHP_EOL;
echo 'Division = ' . round(($num1 / $num2),2) . PHP_EOL; //FORMATEO LOS DECIMALES
echo 'El modulo es = '. ($num1 % $num2 !==0) .PHP_EOL;
//Operadores Logicos
//Se tiene que usar para comparar igualdad 2 signos iguales, ya que uno es de asignac.
if ($num1 && $num2 == 1) {
    echo 'Los 2 nros son iguales'.PHP_EOL;
}else {
    echo 'Los 2 nros son distintos'.PHP_EOL;
}
/*
Un ejemplo de operador AND en PHP podría ser para verificar 
si una persona puede acceder a un sitio web solo si es mayor de 18 años y tiene una cuenta activa.

La lógica sería algo como: "Si la persona tiene más de 18 años y su cuenta está activa, entonces puede acceder al sitio web."

Intenta implementarlo, verificando las dos condiciones usando el operador AND (&&).
*/

//Validacion de acceso web de venta de vinos y espirituosos

$edadCliente=37;
$cuentaActiva = false;

if($edadCliente>=18 && !$cuentaActiva){
    echo 'Acceso permitido'.PHP_EOL;
}else {
    echo'Bloqueado';
}
$estadoCliente = 'SUSPENDIDO';

if($estadoCliente =='SUSPENDIDO' || !$cuentaActiva){
    echo 'Por el momento no tienes acceso'.PHP_EOL;
}
//Operadores de comparacion
/* Trata de crear un programa que simule un sistema de inventario y realice diversas verificaciones usando los operadores de comparación:
    Ejercicio:
    
    Tienes una tienda que vende productos y necesitas implementar un sistema que evalúe las siguientes condiciones:
    
        Verificar si el stock de un producto es igual a 0 para marcarlo como "agotado".
        Comparar el precio de dos productos y mostrar cuál es más caro.
        Comprobar si el precio de un producto es mayor o igual a $100 para aplicar un descuento.
        Verificar si dos productos tienen el mismo nombre para determinar si son duplicados.
        Asegurarse de que el precio de un producto no sea menor que el costo de producción para evitar pérdidas.
        Comprobar si un producto cuesta menos de $10 para mostrar una advertencia de precio bajo.
        Verificar si dos variables de diferentes tipos (por ejemplo, una cadena y un número) tienen el mismo valor pero no el mismo tipo.
*/

$productoSeguroAuto =0;
$tarifaRCauto = 1000;
$tarifaRCcamion = 3220;
if($productoSeguroAuto == 0){
    echo 'Producto agotado'.PHP_EOL;
}
if($tarifaRCcamion > $tarifaRCauto){
    echo 'La tarifa mayor es: '.$tarifaRCcamion.PHP_EOL;
}
$descuento = 20;
$tarifaPromocional = 0;
if($tarifaRCauto > 100){
    $tarifaPromocional= ($tarifaRCauto / $descuento)* 100;
    echo'Tarifa con descuento: ' . $tarifaPromocional.PHP_EOL;
}
$producto001 = 'Auto';
$producto002 = 'Casa';

if($producto001 === $producto002) {
    echo 'Productos duplicados';
} else {
    echo 'Productos no duplicados';
}
$costoProducc = 123;
$producto003 = 500;
if($producto003 < $costoProducc){
    echo 'Atto producto con perdidas significativas'.PHP_EOL;
}
else{
    echo 'Producto ok' .PHP_EOL;
}
$varA = '50';
$varB = 50;

if($varA == $varB && $varA !== $varB) {
    echo 'Mismo valor, diferente tipo'.PHP_EOL;
} else {
    echo 'O son diferentes valores o son del mismo tipo'.PHP_EOL;
}

//Operadores de pertenencia

//isset - in_array - array_key_exists - empty - instanceof - 

$gato = 'Silvestre';

if(isset($gato)){
    echo 'Variable $gato esta definida' . PHP_EOL;
}
$gaterio = ['Pepo', 'Silvestre', 'Simon', 'Tita'];
if(in_array('Silvestre',$gaterio)){
    echo 'Gato dentro del array'.PHP_EOL;
}
$perros = '';
if(empty($perros)){
    echo 'No hay perros en este hogar'.PHP_EOL;
}

for ($i = 10; $i <= 55; $i++) {
    // Verificamos si el número es par, no es 16, y no es múltiplo de 3
    if ($i % 2 == 0 && $i != 16 && $i % 3 != 0) {
        echo $i . PHP_EOL;
    }
}



?>