
<?php 


    
include("coneccion.php");



$codigo=$_POST["codigo"];

$nombre=$_POST["nombre"];


$precio=$_POST["precio"];
$categoria=$_POST["categoria"];

$imagen=addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));


$consulta="UPDATE productos set descripcion='$nombre',precio='$precio',imagen='$imagen',categoria='$categoria' where id='$codigo'";

$resultado2=mysqli_query($coneccion,$consulta);

if($resultado2)
    // echo "ENVIO EXITOSO";
    header("location: mostrar.php");
else
    echo "FALLA AL ENVIAR AL DOCUMENTO";

    
?>





