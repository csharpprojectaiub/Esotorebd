<?php
include 'header.php';


?>
<style>
    .hader
    {
        position: relative;
        width: 100%;
    }

    /* Shutter Out Horizontal */
    .navbar-default .navbar-nav > li > a{
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: perspective(1px) translateZ(0);
        transform: perspective(1px) translateZ(0);
        box-shadow: 0 0 1px transparent;
        position: relative;
        background: transparent;
        -webkit-transition-property: color;
        transition-property: color;
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
        border-bottom: 1px solid transparent;
    }
    .navbar-default .navbar-nav > li > a:before {
        content: "";
        position: absolute;
        z-index: -1;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        border-bottom: 2px solid #000 ;
        -webkit-transform: scaleX(0);
        transform: scaleX(0);
        -webkit-transform-origin: 50%;
        transform-origin: 50%;
        -webkit-transition-property: transform;
        transition-property: transform;
        -webkit-transition-duration: 0.3s;
        transition-duration: 0.3s;
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
        color: #000;
        transition: ease 0.5s;
    }
    .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a:active {
        color: #000;
        transition: ease 0.5s;
    }
    .navbar-default .navbar-nav > li > a:hover:before, .navbar-default .navbar-nav > li > a:focus:before, .navbar-default .navbar-nav > li > a:active:before {
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
        transition: ease 0.5s;
    }
    .video-part
    {
        width: 100%;
        float: left;
        position: relative;
        overflow: hidden;
        height: 500px;
    }
    .video-part video
    {
        margin-top: -15%;
        width: 100%;


    }
    .video-part-content
    {
        position: absolute;
        top: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
        padding-top: 8%;
        background:rgba(87, 117, 189, 0.5) ;
    }

    .video-part-content .carousel-caption
    {
        position: relative !important;
        left: 0%;
        right: 0%;
    }
    .video-part-content .carousel-indicators
    {
        top: 316px;
    }
    .hader
    {
        margin-top: 2%;
    }
    .video-part-content .carousel-caption h1
    {
        font-size: 50px;
    }
    .video-part-content .carousel-caption p
    {
        font-size: 20px;
    }

    .navbar-default.affix .navbar-nav > li > a {
        color: #333;
    }
    .btn-info
    {
        background: #5674bc;
        border: 1px solid #5674bc;
        border-radius: 0px;
        transition: ease 0.5s;
    }
    .btn-info
    {
        color: #5674bc;
        transition: ease 0.5s;
    }
    .full-width
    {
        width: 100%;
        float: left;
    }
    .video-part-content .btn-info:hover {
        color: #fff;
        border: 1px solid #fff;
        transition: ease 0.5s;
        background: transparent;
    }

    .navbar-default .navbar-nav > li > a {
        color: #fff;
    }
    .navbar-nav > li > a {
        padding-bottom: 6px;
        padding-top: 15px;
    }
    .btn-info {
        background: #5674bc none repeat scroll 0 0;
        border: 1px solid #5674bc;
        border-radius: 0;
        color: #fff;
        transition: all 0.5s ease 0s;
    }

    @-webkit-keyframes fadeInDown {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }

    @keyframes fadeInDown {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }

    .fadeInDown {
        -webkit-animation-name: fadeInDown;
        animation-name: fadeInDown;
    }

    @-webkit-keyframes fadeInUp {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            -webkit-transform: translate3d(0, 100%, 0);
            transform: translate3d(0, 100%, 0);
        }

        to {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }

    .fadeInUp {
        -webkit-animation-name: fadeInUp;
        animation-name: fadeInUp;
        animation-delay:1s;
        animation-duration:2s;
    }

</style>
<div class="hader">

<div class="video-part">
    <video autoplay="autoplay" loop="loop" muted="muted">
        <source src="http://lightofweb.com/zanzo-website/video/Typing.mp4" type="video/mp4">
    </video>

    <div class="container">
        <div class="video-part-content">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="carousel-caption ">
                            <center>
                                <img src="http://lightofweb.com/zanzo-website/img/light-bulb.png" class="img-responsive animated fadeInDown">
                            </center>
                            <div class="full-width animated fadeInUp">
                                <h1>Racing your ideas to reality</h1>
                                <p>Transforming ideas to successful business goal,
                                    with your extended IT team. </p>
                                <a href="#" class="btn btn-info">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-caption ">
                            <center>
                                <img src="http://lightofweb.com/zanzo-website/img/light-bulb.png" class="img-responsive  animated fadeInDown">
                            </center>
                            <div class="full-width animated fadeInUp">
                                <h1>Racing your ideas to reality</h1>
                                <p>Transforming ideas to successful business goal,
                                    with your extended IT team. </p>
                                <a href="#" class="btn btn-info">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-caption">
                            <center>
                                <img src="http://lightofweb.com/zanzo-website/img/light-bulb.png" class="img-responsive animated fadeInDown">
                            </center>
                            <div class="full-width animated fadeInUp">
                                <h1>Racing your ideas to reality</h1>
                                <p>Transforming ideas to successful business goal,
                                    with your extended IT team. </p>
                                <a href="#" class="btn btn-info">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Controls -->

            </div>
        </div>
    </div>

</div>



</div>
