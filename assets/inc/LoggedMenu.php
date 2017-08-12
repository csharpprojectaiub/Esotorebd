<style>


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

    .navbar-default {
        padding-bottom: 15px;
        padding-top: 15px;

        border: none;
        border-bottom: 1px solid #f4f4f4;
        background: #fff !important;
    }
    .navbar-default .navbar-nav>li>a {

        color: #1fc0a0!important;

    }
    .navbar-default .navbar-nav>li>a {
        color: #1fc0a0!important;
    }
    .navbar-default .navbar-nav>li>a:hover {
        color: #777;
        transition: .2s ease-in;
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
input.form-control.search {
    margin-left: -3px;
    position: relative;
    left: -2%;
    border-color:#1fc0a0;
}
    .input-group-btn:last-child>.btn, .input-group-btn:last-child>.btn-group {
        z-index: 2;
        margin-left: -1px;
        position: relative;
        top: 6px;
        padding: 9.5px 20px;
        left: -8px;
        background-color: #1fc0a0!important;
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
                            <img class="img-responsive logo" src="./images/logo.png" alt="">
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                   <div class="search">
                                       <form class="navbar-form" role="search" action="../functions/search.php">
                                           <div class="input-group search">
                                               <input type="text" class="form-control search" placeholder="Search" name="search">
                                               <div class="input-group-btn">
                                                   <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                               </div>
                                           </div>
                                       </form>
                                   </div>
                                </li>
                                <li><a href="#"><i class="fa fa-user"></i><span class="space"></span> Account</a></li>
                                <li><a href="http://localhost/phplogin/assets/functions/wishlist.php"><i class="fa fa-heart"></i><span class="space"></span> WishList</a></li>
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

