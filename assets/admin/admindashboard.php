<?php
include '../inc/header.php';
include 'adminui.php';

?>



<div class="maincontent">
    <div class="container">
        <div class="row">
            <div class="col-md-4 totalmember">
                <div class="row">
                    <div class="col-md-2 userleft">
                        <i class="fa fa-user fa-5x icon"></i>
                    </div>
                    <div class="col-md-10">
                        <h1 class="dashboadtitle">Total User</h1><br>
                        <h1 class="dashboadtitle">
                            <?php
                            include "../functions/connect.php";
                            $sql="select * from user";
                            $result=mysqli_query($connection,$sql);

                            echo mysqli_num_rows($result);
                            ?>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4 totalsales">
                <div class="row">
                    <div class="col-md-2 userleft">
                        <i class="fa fa-user fa-5x icon"></i>
                    </div>
                    <div class="col-md-10">
                        <h1 class="dashboadtitle">Total Product</h1><br>
                        <h1 class="dashboadtitle">
                            <?php
                            include "../functions/connect.php";
                            $sql="select * from product";
                            $result=mysqli_query($connection,$sql);

                            echo mysqli_num_rows($result);
                            ?>
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4 totalearning">
                <div class="row">
                    <div class="col-md-2 userleft">
                        <i class="fa fa-user fa-5x icon"></i>
                    </div>
                    <div class="col-md-10">
                        <h1 class="dashboadtitle">Total Order </h1><br>
                        <h1 class="dashboadtitle">
                            UnderConstruction
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subcontent">
        <div class="container">
            <div class="row">
                <div class="col-md-4 totalmember">
                    <div class="row">
                        <div class="col-md-2 userleft">
                            <i class="fa fa-user fa-5x icon"></i>
                        </div>
                        <div class="col-md-10">
                            <h1 class="dashboadtitle">Total Earning</h1><br>
                            <h1 class="dashboadtitle">
                                <?php
                                include "../functions/connect.php";
                                $sql="select * from user";
                                $result=mysqli_query($connection,$sql);

                                echo mysqli_num_rows($result);
                                ?>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 totalsales">
                    <div class="row">
                        <div class="col-md-2 userleft">
                            <i class="fa fa-user fa-5x icon"></i>
                        </div>
                        <div class="col-md-10">
                            <h1 class="dashboadtitle">Total Comments</h1><br>
                            <h1 class="dashboadtitle">
                                <?php
                                include "../functions/connect.php";
                                $sql="select * from product";
                                $result=mysqli_query($connection,$sql);

                                echo mysqli_num_rows($result);
                                ?>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 totalearning">
                    <div class="row">
                        <div class="col-md-2 userleft">
                            <i class="fa fa-user fa-5x icon"></i>
                        </div>
                        <div class="col-md-10">
                            <h1 class="dashboadtitle">Total Janina </h1><br>
                            <h1 class="dashboadtitle">
                                UnderConstruction
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>