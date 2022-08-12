


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  

</head>
<body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<div class="container blanco py-5 mt-5" style="width:600px;">     

<h1 class="text-center text-primary mb-5">MOSTRAR PRODUCTOS</h1>




<table class="table table-primary">

<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Imagen</th>
    <th>Operaciones</th>
    <!-- <th></th> -->
</tr>


<?php
include("coneccion.php");

$consulta="SELECT * FROM productos";

$resultado2=mysqli_query($coneccion,$consulta); 

while ($arreglo = mysqli_fetch_assoc($resultado2)){
?>
<tr>
    <td><?php echo $arreglo["id"] ?></td>
    <td><?php echo $arreglo["descripcion"] ?></td>
    <td><?php echo $arreglo["precio"] ?></td>

    
    <td><img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($arreglo["imagen"]) ?>"></td>
    <td><a href="update.php?idd=<?php echo $arreglo["id"] ?>" class="btn btn-info">modificar</a></td>

    <!-- <td><a href="#" class="btn btn-danger">eliminar</a></td> -->


</tr>
<?php  }?>


</table>

<br><br><br>


<a href="index.php">Volver inicio</a>

</div>

</body>
</html>


