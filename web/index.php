<?php
include_once(dirname(__FILE__) . "/cabecera.php");
//controlador

$usuario=getenv("MYSQL_USER");

$barra = [
    ["TEXTO" => "Ejercicio 1", "ENLACE" => "/practica2/Ej1.php"],
    ["TEXTO" => "Ejercicio 2", "ENLACE" => "/practica2/Ej2.php"],
    ["TEXTO" => "Ejercicio 3", "ENLACE" => "/practica2/Ej3.php"],
    ["TEXTO" => "Ejercicio 4", "ENLACE" => "/practica2/Ej4.php"],
    ["TEXTO" => "Ejercicio 5", "ENLACE" => "/practica2/Ej5.php"]

];

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("2DAW APLICACION");
cuerpo($barra);  
finCuerpo();
// **********************************************************

//vista
function cabecera() 
{}

//vista
function cuerpo($barra)
{
    
    mostrarBarra($barra);

?>
<?php
}
