<style>
    p.productname.pull-left,p.productname.pull-right {
        color: #000!important;
    }
    .col-md-9.productdesign {
        margin-left: -2%;
    }
    .productname {
        background: #D8EBF8;
        padding: 10px;
        position: relative;
        top: 9px;
    }
    .pimage{
        width:100%;
        height:300px;
    }
    .row.products-page {
        background-color: #D8EBF8;
        margin-left: 14px;
        margin-right: 14px;
    }
    .productdesign{
        border: 1px solid #f0f0f0;
    }
    a.btn.btn-warning.addtocart {
        position: relative;
        top: 2px;


    }
    .price{
        position: relative;
        left:20px;
    }
    .row.cartprice {
        background-color: #D8EBF8;
        margin-right: 0px;
        margin-left: 0px;
    }
    .products{
        border: 1px solid #DEECD8;
        padding: 20px;
    }
    .row.pnamecat {
        background-color: #D8EBF8;
        overflow: hidden;
        margin-left: 0;
        margin-right: 0px;
    }

</style>

<?php
include "./inc/LoggedMenu.php";
include './inc/header.php';
include './functions/connect.php';


$sql="select *from product";
$result=mysqli_query($connection,$sql);
?>
<div class="container-fluid">
    <div class="row ">
        <div class="col-md-3">
            <?php
            include "./inc/categories.php";
            ?>
        </div>
        <div class="col-md-9 productdesign">
            <div class="row products-page">
                <h2 class="products-page">Products</h2>
            </div>
            <?php
            while($row=mysqli_fetch_array($result))
            {
                ?>

                <div class="productshow">

                    <div class="col-md-4">
                        <div class="products">
                            <div class="row pnamecat">
                                <p class="productname pull-left"><?php echo $row["productname"];?> </p>
                                <p class="productname pull-right"><?php echo $row["productcategory"];?> </p>
                            </div>
                            <img class="pimage" src="../assets<?php echo $row["productimage"];?>" alt="">
                            <div class="row cartprice " >

                                  <div class="pull-left">
                                      <h4 class="price">Price :$<?php echo $row["productprice"] ?></h4>
                                  </div>
                                  <div class="pull-right">
                                      <a  href="#"   style="text-align: center" class="btn btn-warning addtocart">Add to Cart</a>

                                  </div>

                            </div>

                        </div>
                    </div>
                </div>
                <?php

            }
            ?>
        </div>
    </div>
</div>
<?php
include "./inc/footer.php";
?>