<?php
include_once(dirname(__FILE__) . "/cabecera.php");




//controlador
$barraUbi = [
    [
        "TEXTO"=>"Inicio",
        "LINK" =>"/index.php"
    ]
];

//dibuja la plantilla de la vista
inicioCabecera("Mi aplicacion");
cabecera();
finCabecera();
inicioCuerpo("2DAW APLICACION INDEX", $barraUbi);
cuerpo();  //llamo a la vista
finCuerpo();
// **********************************************************

//vista
function cabecera() 
{
    ?>
    <!-- esto va en el head -->
     <?php   


}

//vista
function cuerpo()
{
?>
    <a href="./aplicacion/personalizar/personalizar.php">Personalizar</a><br>
    <a href="./aplicacion/personalizar/index.php">Contador</a><br>
    <a href="./aplicacion/texto/verTexto.php">Ver Textos</a><br>
<?php
}
