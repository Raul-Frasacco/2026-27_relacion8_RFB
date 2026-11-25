<?php
include_once(dirname(__FILE__) ."../../../cabecera.php");
include_once(dirname(__FILE__) ."/../clases/RegistroTexto.php");

$arrayTextos = [];

if(isset($_POST["añadir"])){
    $texto = $_POST["texto"];
    $arrayTextos = new RegistroTexto($texto);
}

//controlador
$barraUbi = [
    [
        "TEXTO"=>"Inicio",
        "LINK" =>"/index.php"
    ],
    [
        "TEXTO"=>"verTexto",
        "LINK" =>""
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
    
     <?php   


}

//vista
function cuerpo()
{
?>

<?php
formulario();

}

function formulario(){

?>
    <form method="post">
    <label for="">Texto a Registrar: </label><br>
    <input type="text" name="texto"><br>
    <button name="añadir">Añadir</button>
    <br>
    <textarea name="" id=""></textarea>
    </form>
<?php
}