

<?php include("pagina/cabecera.php") ?>



    <div class="btn-flotante" onmouseover="showCart()" id="btnCarrito">
        <i class="fa-solid fa-cart-shopping"></i>
        Carrito <span class="badge bg-success count-product1" id="carrito">0</span>
    </div>


    <header>
        <div class="header-section container">

            <div class="cart-products " id="products-id">
                <p class="close-btn" onclick="closeBtn()">X</p>
                <h4>CARRITO FIS-UNCP</h4>
                <div class="card-items">

                    Ingrese pedidos

                </div>
                <h4>Total: <strong class="price-total">0</strong> $</h4>
            </div>



        </div>
    </header>



    <section class="container">
        <div class="products">


<!-- 
            <div class="carts">
                <div>
                    <img src="./images/products/keyboard-1.jpg" alt="">
                    <p><span>20</span>$</p>
                </div>
                <p class="title">Tempest Cataclysm Combo 3 En 1 Gaming Teclado</p>
                <a href="" data-id="1" class="btn-add-cart">add to cart</a>
            </div> -->


            <?php
            include("admin/coneccion.php");

            $consulta = "SELECT * FROM productos";

            $resultado2 = mysqli_query($coneccion, $consulta);

            while ($arreglo = mysqli_fetch_assoc($resultado2)) {
            ?>

                <div class="carts">
                    <div>
                        <img src="data:image/jpg;base64,<?php echo base64_encode($arreglo["imagen"]) ?>"" alt="" height="300px">
                        <p>S/ <span><?php echo $arreglo["precio"] ?></span></p>
                    </div>
                    <p class="title"><?php echo $arreglo["descripcion"] ?></p>
                    <a href="" data-id="<?php echo $arreglo["id"] ?>" class="btn-add-cart">add to cart</a>
                </div>


            <?php  } ?>



        </div>
    </section>





<?php include("pagina/foot.php") ?>