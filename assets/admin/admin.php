<?php require_once '../inc/header.php';

?>

<style>
    .navbar-default{
        background-color: #48B4DF;
    }
    .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover ,.navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:visited {
        color: #fff;
        background-color: #60c8f2;
    }
    .navbar-default .navbar-nav>li>a {
        color: #fff;
    }
    .navbar-default .navbar-nav>li>a:hover {
        color: #fff;
        background-color: #60c8f2;
        transition: 0.2s ease-in;
    }
    ul.nav.navbar-nav.navbar-right {
        margin-right: 2%;
    }
    .navbar-default .navbar-brand {
        color: #fff !important;
    }

</style>
<div class="adminmenu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-default">

                        <div class="navbar-header">
                            <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>
                                Welcome Admin</a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#">Admin Home</a></li>
                            <li><a href="#">Manage User</a></li>
                            <li><a href="#">Manage Product</a></li>
                            <li><a href="#">Manage Order</a></li>
                        </ul>

                </nav>
            </div>
        </div>
    </div>
</div>
