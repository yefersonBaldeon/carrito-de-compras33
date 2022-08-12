var product=[

{id: 1,descripcion: "Tempest Cataclysm Combo 3 En 1 Gaming Teclad",precio:20,img:"./images/products/keyboard-1.jpg"},
{id: 2,descripcion: "Newskill Suiko Ivory Teclado Mecánico Gaming Full RGB",precio:20,img:"./images/products/keyboard-2.jpg"},
{id: 3,descripcion: "Probando 123",precio:40,img:"./images/products/keyboard-2.jpg"},
{id: 4,descripcion: "Probando 123",precio:40,img:"./images/products/keyboard-2.jpg"},
{id: 5,descripcion: "Probando 123",precio:40,img:"./images/products/keyboard-2.jpg"},
{id: 6,descripcion: "Probando 123",precio:40,img:"./images/products/keyboard-2.jpg"},
{id: 7,descripcion: "Tempest Cataclysm Combo 3 En 1 Gaming Teclad",precio:20,img:"./images/products/keyboard-1.jpg"},
{id: 8,descripcion: "Newskill Suiko Ivory Teclado Mecánico Gaming Full RGB",precio:20,img:"./images/products/keyboard-2.jpg"},



]


var new_element=document.querySelector(".products");


product.forEach(element => {

    let div=document.createElement("carts");

    div.classList.add('item');


    div.innerHTML=`
    <div class="carts">
    <div>
        <img src="${element.img}" alt="" >
        <p><span>${element.precio}</span>$</p>
    </div>
    <p class="title" id="carta">${element.descripcion}</p>
    <a href="" data-id="${element.id}"  class="btn-add-cart">add to cart</a> 
    
    `

    new_element.appendChild(div)
    
});



// <?php
// include("coneccion.php");

// $consulta="SELECT * FROM productos";

// $resultado2=mysqli_query($coneccion,$consulta);

// while ($arreglo = mysqli_fetch_assoc($resultado2)){
// ?>
// <tr>
//     <td><?php echo $arreglo["id"] ?></td>
//     <td><?php echo $arreglo["nombre"] ?></td>
//     <td><img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($arreglo["imagen"]) ?>"></td>
//     <td><a href="#">modificar</a></td>
//     <td><a href="#">eliminar</a></td>

// </tr>
// <?php  }?>













