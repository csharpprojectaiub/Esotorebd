<?php
include '../functions/connect.php';


if(isset($_POST['addproduct'])){
    $productname=$_POST['pname'];
    $productprice=$_POST['pprice'];
    $productquantity=$_POST['pquantity'];
    $productcategory=$_POST['pcategory'];
    $productdesc=$_POST['pdesc'];
    //random number generaor for photo
    $img1=md5(rand(11111,999999));



    //image
    $productimage=$_FILES['pimage']['name'];
    $productstore="../products_images/".$img1.$productimage;
    $productstoredb="/products_images/".$img1.$productimage;
    $uploadTemp=$_FILES["pimage"]["tmp_name"];
    move_uploaded_file($uploadTemp,$productstore);

    //query for add product
    $sql ="insert into product(productname,productprice,productquantity,productimage,productcategory,pdesc)VALUES ('$productname','$productprice','$productquantity','$productstoredb','$productcategory','$productdesc')";
    $result =mysqli_query($connection,$sql);
    if($result>0){
        header('location:http://localhost/phplogin/assets/admin/addproduct_ui.php');

    }
    else{
        header('location:http://localhost/phplogin/assets/admin/admindashboard.php');

    }

}


