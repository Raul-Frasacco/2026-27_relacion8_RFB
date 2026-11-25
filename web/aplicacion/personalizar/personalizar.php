<?php
include_once(dirname(__FILE__) ."../../../cabecera.php");

$colorTexto = $_COOKIE["colorTexto"] ?? "black";
$colorFondo = $_COOKIE["colorFondo"] ?? "white";

if(isset($_POST["colorFondo"]))
    $colorFondo = $_POST["colorFondo"];

if(isset($_POST["colorTexto"]))
    $colorTexto = $_POST["colorTexto"];

setcookie("colorTexto", $colorTexto, time() + (86400 * 30), "/");
setcookie("colorFondo", $colorFondo, time() + (86400 * 30), "/");

//controlador
$barraUbi = [
    [
        "TEXTO"=>"Inicio",
        "LINK" =>"/index.php"
    ],
    [
        "TEXTO"=>"Personalizar",
        "LINK" =>""
    ]
];


//dibuja la plantilla de la vista
inicioCabecera("Personalizar");
cabecera($colorFondo, $colorTexto);
finCabecera();
inicioCuerpo("2DAW APLICACION INDEX", $barraUbi);
cuerpo();  //llamo a la vista
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
function cuerpo()
{
?>

<?php
 formulario();
   



}

function formulario(){
    ?>
    <form method="post">
    <label for="">Color de fondo :</label>
    <select name="colorFondo" id="">
        <?php
        foreach(COLORESFONDO as $espa => $ing){
            echo "<option value='$ing'>$espa</option>";
        }
        ?>
    </select>
    <br>
    <label for="">Color de texto :</label>
    <select name="colorTexto" id="">
        <?php
        foreach(COLORESTEXTO as $espa => $ing){
            echo "<option value='$ing'>$espa</option>";
        }
        ?>
    </select>
    <br>
    <button type="submit">Aplicar cambios</button>
    </form>
    <?php
}