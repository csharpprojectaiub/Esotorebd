<?php
include_once '../inc/header.php';
session_start();
if(session_destroy()) {

    header('Refresh:1; url=http://localhost/phplogin/assets/');

}

?>
   