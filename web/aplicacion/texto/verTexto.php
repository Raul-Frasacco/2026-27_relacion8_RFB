<?php
include_once(dirname(__FILE__) ."../../../cabecera.php");
include_once(dirname(__FILE__) ."/../clases/RegistroTexto.php");

session_start();


if (!isset($_SESSION["textos"])) {
    $_SESSION["textos"] = [];
}


if (isset($_POST["añadir"])) {
    $texto = $_POST["texto"];
    $_SESSION["textos"][] = new RegistroTexto($texto);

    header("Location: " . $_SERVER["PHP_SELF"]);
    exit();
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
    <textarea name="" id="" rows="10" cols="50"><?php
        foreach($_SESSION["textos"] as $item){
            echo "'$item'" . PHP_EOL;
        }
        ?>
    </textarea>
    </form>
<?php
}