<style>
    body{
        overflow-x: hidden;
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
    .navbar-default {
        padding-bottom: 15px;
        padding-top: 15px;

        border: none;
        border-bottom: 1px solid #f4f4f4;
        background: #fff!important;
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
        margin-top: -40px;
        width: 52%;
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

<section id="header_menu">
    <div class="shop_header">
        <div class="container-fluid">
            <div class="row">
                <nav class="navbar navbar-default ">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="fa fa-user"></span>
                            </button>
                            <div class="navbar-brand">
                                <a href="http://localhost/phplogin/assets/index.php"><img class="img-responsive logo" src="./images/logo.png" alt="Creative Shop"></a>

                            </div>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <form class="navbar-form" role="search" action="../functions/search.php">
                                        <div class="input-group">
                                            <input type="text" class="form-control search" placeholder="Search" name="search">
                                            <div class="input-group-btn">
                                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                                <li><a href="#"data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart"></i><span class="space"></span> cart</a></li>
                                <li><a href="http://localhost/phplogin/assets/inc/login.php"><i class="fa fa-check"></i><span class="space"></span> sign in</a></li>
                                <li><a href="http://localhost/phplogin/assets/inc/register.php"><i class="fa fa-user-plus"></i><span class="space"></span> Register</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </div>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th width="40%">Item Name</th>
                                    <th width="10%">Quantity</th>
                                    <th width="20%">Price</th>
                                    <th width="25%">Total</th>
                                    <th width="5%">Action</th>
                                </tr>
                                <?php
                                if(!empty($_SESSION["shopping_cart"]))
                                {
                                    $total = 0;
                                    foreach($_SESSION["shopping_cart"] as $keys => $values)
                                    {
                                        ?>
                                        <tr>
                                            <td><?php echo $values["item_name"]; ?></td>
                                            <td><?php echo $values["item_quantity"]; ?></td>
                                            <td>$ <?php echo $values["item_price"]; ?></td>
                                            <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                                            <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                                        </tr>
                                        <?php
                                        $total = $total + ($values["item_quantity"] * $values["item_price"]);
                                    }
                                    ?>
                                    <tr>
                                        <td colspan="3" align="right">Total</td>
                                        <td align="right">$ <?php echo number_format($total, 2); ?></td>
                                        <td></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </table>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

