<?php
session_start();
include 'connect.php';

if(isset($_SESSION['username'])==null){
    include "../inc/navmenu.php";
}
else{
    include "../inc/LoggedMenu.php";
}
include '../inc/header.php';

if(isset($_GET["id"])==null){
    echo "No Product TO show";
}
else {
}
?>












<?php
include "../inc/footer.php";
?>
