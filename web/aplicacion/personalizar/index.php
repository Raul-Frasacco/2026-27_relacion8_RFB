<?php
include_once(dirname(__FILE__) ."../../../cabecera.php");

$colorTexto = $_COOKIE["colorTexto"] ?? "black";
$colorFondo = $_COOKIE["colorFondo"] ?? "white";

$contador = $_COOKIE["contador"] ?? 0;
$contador = $contador + 1;
setcookie("contador", $contador, time() + 86400, "/");
//controlador
$barraUbi = [
    [
        "TEXTO"=>"Inicio",
        "LINK" =>"/index.php"
    ],
    [
        "TEXTO"=>"Contador",
        "LINK" =>""
    ]
];

//dibuja la plantilla de la vista
inicioCabecera("Mi aplicacion");
cabecera($colorFondo, $colorTexto);
finCabecera();
inicioCuerpo("2DAW APLICACION INDEX", $barraUbi);
cuerpo($contador);  //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera($colorFondo, $colorTexto) 
{
    ?>
    <style>
        #documento{
            background-color: <?php echo $colorFondo?>;
            color: <?php echo $colorTexto?>;
        }
    </style>
     <?php   


}

//vista
function cuerpo($contador)
{
?>
<h4>Numero total de veces que se ha accedido a esta pagina index.php</h4>
<?php
    echo $contador;
?>
<?php


}