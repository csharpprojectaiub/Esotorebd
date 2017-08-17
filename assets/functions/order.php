<?php
include "connect.php";
include "../inc/header.php";
session_start();

if(isset($_SESSION["shopping_cart"])==null){
    echo 'shopping car';
    header('Refresh:0.0001; url=http://localhost/phplogin/assets/index.php');

}

else {
        $cartdata = json_encode($_SESSION["shopping_cart"],true);


    }



?>