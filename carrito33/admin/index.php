<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vamos con todo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <div class="container blanco py-5 mt-5" style="width:400px;">

    <h1 class="text-center text-primary mb-5">AÑADIR PRODUCTOS</h1>


        <form action="guardar.php" method="post" enctype="multipart/form-data">


            <div class="mb-3">

            <label for="usuario" class="form-label">Nombre del producto:</label>
            <input type="text" class="form-control" placeholder="Producto" name="nombre" required>
            </div>

            <div class="mb-3">

            <label for="usuario" class="form-label">Precio:</label>
            <input type="number" class="form-control" placeholder="0" name="precio" required>
            </div>


            <div class="mb-3">
            <label for="usuario" class="form-label">Categoria:</label>
             <br>   
            <select name="categoria" id="" >

                <option value="1" class="form-label">1. Teclado</option>
                <option value="2">2. Mouse</option>
                <option value="3">3. Monitor</option>


            </select>

            </div>


            <div class="mb-3">
            <label for="usuario" class="form-label">Añadir imagen</label>
            <input type="file" name="imagen" id="" class="form-control" required  onchange="preliminar(event)" >

            </div>

<div class="text-center ">
<img src="" alt="" id="foto" width="250px">

</div>



            <div class="d-grid gap-2">
            <input type="submit"  class="btn btn-success" value="Enviar">
            </div>



        </form>


        <br><br><br>
        <a href="mostrar.php">Ver Productos</a>


    </div>


    <script>

        let preliminar = () => {

            let leer_img = new FileReader();

            let id_img = document.getElementById("foto");

            leer_img.onload = () => {
                if (leer_img.readyState == 2) {

                    id_img.src = leer_img.result

                }
            }
            leer_img.readAsDataURL(event.target.files[0])

        }

    </script>


</body>

</html>