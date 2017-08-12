<style>
    .pimage{
        width:270px;
        height:300px;
    }

</style>

<?php
include '../functions/connect.php';

$sql="select *from product";
$result=mysqli_query($connection,$sql);
$getProduct=mysqli_fetch_array($result);
while($row=$getProduct)
{

    ?>

    <div class="productshow">
                <div class="col-md-3">
                    <div class="products">
                        <img class="pimage" src="../products_images/93b8943d815461fc975a64192a1bf69a001.jpg" alt="">

                        <p></p>
                        <h2>Price :$<?php echo $row["productprice"] ?></h2>
                        <a href="#"   style="text-align: center" class="btn btn-primary">Add to Cart</a>

                    </div>
                </div>
    </div>

    <?php

}
?>
