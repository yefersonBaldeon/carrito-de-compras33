
<?php 

    
    include("coneccion.php");

    $nombre=$_POST["nombre"];
    $precio=$_POST["precio"];
    $categoria=$_POST["categoria"];
    
    $imagen=addslashes(file_get_contents($_FILES["imagen"]["tmp_name"]));


    $consulta="INSERT into productos(descripcion,precio,imagen,categoria) values('$nombre','$precio','$imagen','$categoria')";

    $resultado2=mysqli_query($coneccion,$consulta);

    if($resultado2)
        // echo "ENVIO EXITOSO";
        header("location: index.php");
    else
        echo "FALLA AL ENVIAR AL DOCUMENTO";


?>
