<style>

#subCategory {
        padding-top: 5%;
        padding-left: 30px;
    }
    button{
        background-color: none;
        border: none;
    }
    a{
        text-transform: capitalize;
        text-decoration: none;
        list-style: none;
        font-size: 16px;
        font-weight: 500;
    }
    h3{
        font-size: 18px;
        color: #333;
        font-weight: 600;
    }
    ul{
        list-style: none;
    }
    .space {
        padding-right: 5px;
    }
    .btn-default {
        border: none;
        font-size: 20px;
        color: #777;
        margin-top: -15px;
    }
    /*User Icon For Responsive Screen*/
    .fa-user {
        font-size: 20px;
    }
    .fa-search {
        color: #777;
        font-size: 20px;
    }
    .fa-phone {
        color: #1fc0a0;
    }
    .fa-shopping-bag {
        font-size: 33px;
        margin-top: 24px;
        margin-left: 22px;
        color: #1fc0a0;
    }
    .dropdown-toggle {
        list-style: none;
    }
    .navbar-default {
        padding-bottom: 15px;
        padding-top: 15px;

        border: none;
        border-bottom: 1px solid #f4f4f4;
        background: #fff;
    }
    .navbar-default .navbar-nav>li>a {

        color: #1fc0a0;

    }
    .navbar-default .navbar-nav>li>a {
        color: #1fc0a0;
    }
    .navbar-default .navbar-nav>li>a:hover {
        color: #777;
        transition: .2s ease-in;
    }


    #logo_cart {
        margin-top: 20px;
    }

    .contact_call.text-right {
        font-size: 18px;
        line-height: 2;
        color: #333;
        padding-right: 20px;
        border-right: 2px solid #777;
    }


    #Time {
        color: #777;
    }
    .badge-default {
        margin-top: -64px;
        font-size: 20px;
        background-color: #e8e8e8;
        color: #000;

    }
    /*main Menu*/
    #mainMenu {
        margin-top: 20px;
    }
    .navbar-center {
        padding: 13px;
        border-radius: 0px;
        margin-left: 70px;
    }
    .navbar-center>li>a {
        padding-right: 50px;
        font-size:18px;
        font-weight: 500;

    }

    .navbar-inverse .navbar-nav>li>a {
        color: #fff;
        transition: .5s ease-out;
    }
    .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
        color: #fff;

        border-bottom: 6px solid #1fc0a0;
    }
    .navbar-center>li>a:hover {
        margin-top: -8px;
        border-bottom: 6px solid #1fc0a0;
        transition: .3s ease-in;

    }
    .dropdown-menu {
        background-color: #fff;
        border-radius: 5px;

    }
    .dropdown-menu>li>a {
        border-bottom: 1px solid #f5f5f5;
        padding: 10px;
        padding-right: 50px;
        padding-bottom: 20px;
    }



    .navbar-inverse .navbar-nav>.open>a, .navbar-inverse .navbar-nav>.open>a:focus, .navbar-inverse .navbar-nav>.open>a:hover {
        color: #fff;
        background-color: transparent;
    }
    img.img-responsive.logo {
        width:67%;
      margin-top: -31px;
}
</style>
<?php
session_start();

?>
<section id="header_menu">
    <div class="shop_header">
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <img class="img-responsive logo" src="../images/logo.png" alt="">
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#"><i class="fa fa-user"></i><span class="space"></span> Account</a></li>
                                <li><a href="#"><i class="fa fa-heart"></i><span class="space"></span> WishList</a></li>
                                <li><a href="#"><i class="fa fa-check"></i><span class="space"></span> CheckOut</a></li>
                                <li><a href="http://localhost/phplogin/assets/functions/member_profile.php"><i class="fa fa-check"></i><span class="space"></span> <?php echo $_SESSION['username'];?></a></li>
                                <li><a href="http://localhost/phplogin/assets/functions/logout.php"><i class="fa fa-user-plus"></i><span class="space"></span> Sign out</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
    </div>
</section>

<section id="mainMenu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-inverse ">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav navbar-center">
                                <li class="active"><a href="http://localhost/phplogin/assets/index.php">Home</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mobile</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Htc</a></li>
                                        <li><a href="#">Apple</a></li>
                                        <li><a href="#">Xiaomi</a></li>
                                        <li><a href="#">Nokia</a></li>
                                        <li><a href="#">Oppo</a></li>
                                        <li><a href="#">Samsung</a></li>
                                        <li><a href="#">Walton</a></li>
                                        <li><a href="#">Sysphony</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Computing</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Notebook</a></li>
                                        <li><a href="#">Laptop</a></li>
                                        <li><a href="#">Desktop</a></li>
                                        <li><a href="#">Macbook</a></li>
                                        <li><a href="#">Monitor</a></li>
                                        <li><a href="#">Harddrive</a></li>
                                        <li><a href="#">Ram</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Men'Fashion</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Tshirt</a></li>
                                        <li><a href="#">Underwear</a></li>
                                        <li><a href="#">Socks</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Boots</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Women's Fashions</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Tops</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Sarees</a></li>
                                        <li><a href="#">Salwar Kameez</a></li>
                                        <li><a href="#">Hats,caps and gloves</a></li>
                                    </ul>
                                </li>
                                
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Other</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Bikes</a></li>
                                        <li><a href="#">cycles</a></li>
                                        <li><a href="#">football accessories</a></li>
                                        <li><a href="#">books</a></li>
                                        <li><a href="#">Cara accessories</a></li>
                                        <li><a href="#">Cara accessories</a></li>
                                    </ul>
                                </li>

                            </ul>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>