<?php
/**
 * Created by PhpStorm.
 * User: nsmajm
 * Date: 7/16/2017
 * Time: 5:38 PM
 */
$dbHost ="localhost";
$dbUsername = "root";
$dbPassword = "";
$errorMessage = "Failed to Connect Database";

$connection = mysqli_connect($dbHost,$dbUsername,$dbPassword);
if(!$connection){

    echo $errorMessage;
}


$checkDatabase = mysqli_select_db($connection,"ecommercestore");
if(!$checkDatabase){
    echo $errorMessage.die(mysqli_error($connection));
}
