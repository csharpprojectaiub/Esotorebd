<?php require_once '../inc/header.php';
session_start();
?>
<style>

    .nav-side-menu {
        overflow: auto;
        font-family: verdana;
        font-size: 12px;
        font-weight: 200;
        background-color: #2e353d;
        position: absolute;
        top: 0px;
        width: 300px;
        height: 100%;
        color: #e1ffff;
    }
    .nav-side-menu .brand {
        background-color: #23282e;
        line-height: 50px;
        display: block;
        text-align: center;
        font-size: 14px;
    }
    .nav-side-menu .toggle-btn {
        display: none;
    }
    .nav-side-menu ul,
    .nav-side-menu li {
        list-style: none;
        padding: 0px;
        margin: 0px;
        line-height: 64px;
        cursor: pointer;

    }
    .nav-side-menu ul :not(collapsed) .arrow:before,
    .nav-side-menu li :not(collapsed) .arrow:before {
        font-family: FontAwesome;
        content: "\f078";
        display: inline-block;
        padding-left: 10px;
        padding-right: 10px;
        vertical-align: middle;
        float: right;
    }
    .nav-side-menu li a {
        text-decoration: none;
        color: #e1ffff;
        font-size: 17px;
    }
    .nav-side-menu ul .active,
    .nav-side-menu li .active {
        border-left: 3px solid #d19b3d;
        background-color: #4f5b69;
    }
    .nav-side-menu ul .sub-menu li.active,
    .nav-side-menu li .sub-menu li.active {
        color: #d19b3d;
    }
    .nav-side-menu ul .sub-menu li.active a,
    .nav-side-menu li .sub-menu li.active a {
        color: #d19b3d;
    }
    .nav-side-menu ul .sub-menu li,
    .nav-side-menu li .sub-menu li {
        background-color: #181c20;
        border: none;
        line-height: 28px;
        border-bottom: 1px solid #23282e;
        margin-left: 0px;
    }
    .nav-side-menu ul .sub-menu li:hover,
    .nav-side-menu li .sub-menu li:hover {
        background-color: #020203;
    }
    .nav-side-menu ul .sub-menu li:before,
    .nav-side-menu li .sub-menu li:before {
        font-family: FontAwesome;
        display: inline-block;
        padding-left: 10px;
        padding-right: 10px;
        vertical-align: middle;
    }
    .nav-side-menu li {
        padding-left: 0px;
        border-left: 3px solid #2e353d;
        border-bottom: 1px solid #23282e;
    }
    .nav-side-menu li a {
        text-decoration: none;
        color: #e1ffff;
    }
    .nav-side-menu li a i {
        padding-left: 10px;
        width: 20px;
        padding-right: 20px;
    }
    .nav-side-menu li:hover {
        border-left: 3px solid #d19b3d;
        background-color: #4f5b69;
        -webkit-transition: all 1s ease;
        -moz-transition: all 1s ease;
        -o-transition: all 1s ease;
        -ms-transition: all 1s ease;
        transition: all 1s ease;
    }
    @media (max-width: 767px) {
        .nav-side-menu {
            position: relative;
            width: 100%;
            margin-bottom: 10px;
        }
        .nav-side-menu .toggle-btn {
            display: block;
            cursor: pointer;
            position: absolute;
            right: 10px;
            top: 10px;
            z-index: 10 !important;
            padding: 3px;
            background-color: #ffffff;
            color: #000;
            width: 40px;
            text-align: center;
        }
        .brand {
            text-align: left !important;
            font-size: 22px;
            padding-left: 20px;
            line-height: 50px !important;
        }
    }

    @media (min-width: 767px) {
        .nav-side-menu .menu-list .menu-content {
            display: block;
        }
    }
    body {
        margin: 0px;
        padding: 0px;
    }
    .topbar {
        background-color: #fff;
        width: 100%;
        height: 51px;
        position: fixed;
        left: 22.5%;
        border-bottom: 2px solid #EDF1F5;

    }
    .topbar ul{
        list-style: none;
    }
    .topbar ul li{
        float: left;
        padding: 10px;
    }
    .topbar ul li a{
        text-decoration: none;
        color: #686868;
        padding: 10px 20px;
    }
    .topbar ul li a:hover{
        background-color: #e6e6e6 ;
        transition: 0.3s ease-in;

    }
    .img-circle {
        position: relative;
        border-radius: 50%;
        width: 148px;
        height: 148px;
        left: 20%;
    }
    .totalsales{

        background-color: #9BC43E;
        text-align: center;
    }
    .totalmember{
        background-color: #5bc0eb;
        text-align: center;
    }
    .totalearning{
        background-color: #E55A35;
        text-align: center;
    }
    .icon {
        padding-left: 30%;
        padding-top: 50%;
        color: #fff;
    }
    .dashboadtitle {
        color: #fff;
    }
    .maincontent {
        margin-top: 10%;

    }
    .subcontent {
        padding-top: 50px;
    }
</style>

<div class="nav-side-menu">
    <div class="brand"><h1>Creative Admin</h1></div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

    <div class="menu-list">

        <ul id="menu-content" class="menu-content collapse out">
            <li>
                <img class="img-circle" src="../images/nsmajm.jpg" alt="">
            </li>
            <li>
                <a href="http://localhost/phplogin/assets/admin/admindashboard.php">
                    <i class="fa fa-dashboard fa-lg"></i> Dashboard
                </a>
            </li>
            <li>
            <li>
                <a href="http://localhost/phplogin/assets/admin/manageuser.php">
                    <i class="fa fa-users fa-lg"></i> Manage User
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-users fa-lg"></i> Manage Product
                </a>
            </li>
            <li>
                <a href="http://localhost/phplogin/assets/admin/addproduct_ui.php">
                    <i class="fa fa-users fa-lg"></i> Add Product
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-users fa-lg"></i> Add Member
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-users fa-lg"></i> Total Sales
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-user fa-lg"></i> contact Support
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-users fa-lg"></i> HelpLine
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="Content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-10 topbar">
                    <div class="topbar">
                        <ul>
                            <li><a href="#">Nasim</a></li>
                            <li><a href="">Ahmed</a></li>
                            <li><a href="">Atish</a></li>
                            <li><a href="">Shampa</a></li>
                            <li class="adminsearch"><input class="form-control" type="text" name="adminsearch" placeholder="search here"></li>
                            <li><a href=""><i class="fa fa-search"></i></a></li>
                            <li class="adminprofile"><a href="../functions/member_profile.php"><?php echo $_SESSION['username'];?></a></li>
                            <li class="adminprofile"><a href="../functions/logout.php">Sign Out</a></li>
                        </ul>
                    </div>

            </div>
        </div>
    </div>

</div>