    <!-- BOTONES --------------------------------------->


    <button onclick="eliminar()">borrar</button>



    <div class="container2">
        <input type="checkbox" id="btn-mas">
        <div class="redes">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa-brands fa-whatsapp"></a>


        </div>
        <div class="btn-mas">
            <label for="btn-mas" class="fa fa-plus"></label>
        </div>
    </div>
    <!-- ---------------------------------------------->

    <footer>
        <p class="author">🪐 by <a href="" target="_blank">FIS_UNCP</a></p>
    </footer>

    <script>
        function showCart(x) {
            document.getElementById("products-id").style.display = "block";

            cargar()



        }

        function closeBtn() {
            document.getElementById("products-id").style.display = "none";
        }

        function probando2() {
            console.log("vamos con todo")
        }

        // if(Storage){

        //     localStorage.nombre="probando123"
        // } 
    </script>
    <script src="custom2.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- <script src="productos.js"></script> -->


    <!-- <br><br><br>
    <form action="">
    <div value="" onclick="imprimir()">probando</div>
    </form>

            <br><br>

        -->

    <script>
        function imprimir() {

            localStorage.one = "vamos con";

        }

        imprimir()

        function eliminar() {

            localStorage.clear()
        }
    </script>




    </body>


    </html>