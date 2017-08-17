


<style>
    p.productname.pull-left,p.productname.pull-right {
        color: #000!important;

    }

    .productname {
        background: #D8EBF8;
        padding: 10px;
        position: relative;
        top: 9px;
    }
    .pimage{
        width:100%;
        height:250px;
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
    h2.products-page {
        margin-left: 20px;
    }
    input.form-control.qty {
        width: 30%;
        position: relative;
        top: -35px;
        left: 116px;
    }
    input.btn.btn-warning.btncart {
        position: relative;
        top: -19px;
        left: -10px;
        width: 100%;
    }
    .col-md-9.productdesign {
        margin-top: 5%;
    }
    .category {
        margin-top: 26%;
    }
</style>
<div class="slider">
    <?php include "./inc/slider.php";?>
</div>
<?php
include './functions/connect.php';

//session destroy after 100s
/*$inactive = 100;
if( !isset($_SESSION['timeout']) )
    $_SESSION['timeout'] = time() + $inactive;

$session_life = time() - $_SESSION['timeout'];

if($session_life > $inactive)
{  session_destroy(); header("Location:index.php");     }

$_SESSION['timeout']=time();*/
if(isset($_POST["add_to_cart"]))
{
    if(isset($_SESSION["shopping_cart"]))
    {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if(!in_array($_GET["id"], $item_array_id))
        {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id'        =>     $_GET["id"],
                'item_name'      =>     $_POST["hidden_name"],
                'item_price'     =>     $_POST["hidden_price"],
                'item_quantity'  =>     $_POST["quantity"]
            );

            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
            echo '<script>window.location="index.php"</script>';
        }
    }
    else
    {
        $item_array = array(
            'item_id'      =>     $_GET["id"],
            'item_name'    =>     $_POST["hidden_name"],
            'item_price'   =>     $_POST["hidden_price"],
            'item_quantity'=>     $_POST["quantity"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}
if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["item_id"] == $_GET["id"])
            {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="index.php"</script>';
            }
        }
    }
}

if(isset($_SESSION['username'])==null){
    include "./inc/navmenu.php";
}
else{
    include "./inc/LoggedMenu.php";
}
include './inc/header.php';


$sql="select *from product";
$result=mysqli_query($connection,$sql);
?>
<div class="container-fluid">
    <div class="row ">
        <div class="col-md-3 categories">
            <?php
            include "./inc/categories.php";

            ?>
        </div>

        <div class="col-md-9 productdesign">
            <div class="row products-page">
                <div class="productadded">
                        <h1 id="demo"></h1>
                </div>
                <h2 class="products-page">Products</h2>
            </div>
            <?php


            while($row=mysqli_fetch_array($result))
            {


                    ?>

                    <div class="productshow">

                        <div class="col-md-4">
                            <form method="post" action="index.php?action=add&id=<?php echo $row["productid"]; ?>">
                                <div class="products">
                                    <div class="row pnamecat">
                                        <p class="productname pull-left"><?php echo $row["productname"]; ?> </p>
                                        <p class="productname pull-right"><?php echo $row["productcategory"]; ?> </p>
                                    </div>
                                    <a href="./functions/productshow.php?action=view&id=<?php echo $row["productid"]; ?>"><img
                                                class="pimage" src="../assets<?php echo $row["productimage"]; ?>"
                                                alt=""></a>
                                    <div class="row cartprice ">

                                        <div class="pull-left">
                                            <h4 class="price">Price :$<?php echo $row["productprice"] ?></h4>
                                        </div>
                                        <div class="pull-right">
                                            <input type="number" name="quantity" class="form-control qty" value="1"/>
                                            <input type="hidden" name="hidden_name"
                                                   value="<?php echo $row["productname"]; ?>"/>
                                            <input type="hidden" name="hidden_price"
                                                   value="<?php echo $row["productprice"]; ?>"/>
                                            <input onclick="productadd();" type="submit" name="add_to_cart"
                                                   class="btn btn-warning btncart" value="Add to Cart"/>

                                        </div>

                                    </div>

                                </div>
                        </div>
                        </form>
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


