<?php
include "header.php";
?>

<style>

.category{

}
    .category-titile{
        background-color: #1fc0a0;
        padding: 20px;

    }
    .category li a {
        color: #666;
        display: block;
        padding: 8px 0;
        border-bottom: 1px solid #f0f0f0;
        text-decoration: none;
    }
    .category li a:hover {
        color: #00bbff;
    }
    .category li a {
        display: block;
        line-height: 30px;
        color: #666;
        text-decoration: none;
    }
    .category li a:hover {
        color: #00bbff;
    }
    .category li a::before {
        font-family: FontAwesome;
        display: inline-block;
        padding-right: 3px;
        vertical-align: middle;
    }
    .category h3 {
        font-size: 18px;
        text-transform: uppercase;
    }
    .category ul li a::before {
        content: "\f115";
    }
    .list-unstyled{
        border-right: 1px solid #f0f0f0;
        border-left: 1px solid #f0f0f0;
    }


</style>
<div class="container">
<div class="row">
<div class="col-sm-3">
    <div class="cat">
<div class="category">
<h3 class="category-titile">Categories</h3>
<ul class="list-unstyled">
<li><a href="http://localhost/phplogin/assets/">Home</a></li>
<li><a href="http://localhost/phplogin/assets/">Home</a></li>
<li><a href="">Computer</a></li>
<li><a href="">Gamings</a></li>
<li><a href="">Mobile</a></li>
<li><a href="">Mobile</a></li>
<li><a href="">Mobile</a></li>

</ul>
</div>
</div>
</div>
</div>
</div>