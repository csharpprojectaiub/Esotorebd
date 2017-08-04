<?php
include '../inc/header.php';
include 'adminui.php';

?>


<style>
.addproductarea{
    margin-top: 5%;
    margin-left: 22%;
    overflow-x: hidden;

}
.addproductoption{
    margin-left: -30%;
    margin-top: 10%;
}
</style>

<div class="addproductarea">
    <div class="addprodct">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-6">
                    <div class="addproducttitle">
                        <h1 style="text-align: center;">Add Product</h1>
                    </div>
                    <div class="addproductoption">
                        <form action="addproduct.php" method="post" enctype="multipart/form-data" class="form-horizontal">

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="pname">Product Name</label>
                                <div class="col-md-6">
                                    <input id="pname" name="pname" type="text" placeholder="Enter Product Name" class="form-control " >

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="pprice">Product Price</label>
                                <div class="col-md-6">
                                    <input id="pprice" name="pprice" type="text" placeholder="Enter product Price" class="form-control" >

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="pquantity">Product Quantity</label>
                                <div class="col-md-6">
                                    <input id="pquantity" name="pquantity" type="text" placeholder="Enter product Quantity" class="form-control" >

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="pimage">Product Quantity</label>
                                <div class="col-md-6">
                                    <input id="pimage" name="pimage" type="file"class="form-control" >

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="pcategory">Product Category</label>
                                <div class="col-md-6">
                                    <select name="pcategory" id="pcategory" class="form-control">
                                        <option value="Mobile">Mobile</option>
                                        <option value="Tv">Tv</option>
                                        <option value="Gaming">Gaming</option>
                                        <option value="MensFashion">Mens Fashion</option>
                                        <option value="WoMensFashion">WoMens Fashion</option>

                                    </select>

                                </div>
                            </div>


                            <div class="col-md-offset-4"><input type="submit" value="Add Product" name="addproduct"></div>



                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
