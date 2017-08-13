<?php
include 'header.php';
?>
<style>

    .slider{
        padding-top: 30px;
        padding-bottom: 30px;
        width: 96.6%;
        margin: 0 auto;
    }
    .carousel-indicators {
        top: 70%;
    }

    .fade-carousel {
        position: relative;
        height: 95vh;
    }

    .fade-carousel .carousel-inner .item {
        height: 95vh;
    }

    .fade-carousel .carousel-indicators > li {
        margin: 0 2px;
        background-color: #f39c12;
        border-color: #f39c12;
        opacity: .7;
    }

    .fade-carousel .carousel-indicators > li.active {
        width: 10px;
        height: 10px;
        opacity: 1;
    }

    .fade-carousel .carousel-indicators > li {
        margin: 0 2px;
        background-color: #00291f;
        border: 5px solid #f3f5f5;
    ;
    }


    /*********************slide Content Header*******************/

    .sliderContent {
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 3;
        color: #fff;
        text-align: center;
        text-transform: uppercase;
        text-shadow: 1px 1px 0 rgba(0, 0, 0, .75);
        -webkit-transform: translate3d(-50%, -50%, 0);
        -moz-transform: translate3d(-50%, -50%, 0);
        -ms-transform: translate3d(-50%, -50%, 0);
        -o-transform: translate3d(-50%, -50%, 0);
        transform: translate3d(-50%, -50%, 0);
    }

    .sliderContent h1 {
        font-size: 40px;
        font-weight: 500;
        margin: 0;
        padding: 0;
    }

    .fade-carousel .carousel-inner .item .sliderContent {
        opacity: 0;
        -webkit-transition: 2s all ease-in-out .1s;
        -moz-transition: 2s all ease-in-out .1s;
        -ms-transition: 2s all ease-in-out .1s;
        -o-transition: 2s all ease-in-out .1s;
        transition: 2s all ease-in-out .1s;
    }

    .fade-carousel .carousel-inner .item.active .sliderContent {
        opacity: 1;
        -webkit-transition: 2s all ease-in-out .1s;
        -moz-transition: 2s all ease-in-out .1s;
        -ms-transition: 2s all ease-in-out .1s;
        -o-transition: 2s all ease-in-out .1s;
        transition: 2s all ease-in-out .1s;
    }


    /*********************OverLay *******************/

    .overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 2;
        background-color: #080d15;
        opacity: .4;
    }


    /* Link Style slider */

    .sliderlink {
        padding-top: 20px;
    }

    .sliderlink a {
        padding: 10px 30px;
        border: 2px solid #fff;
        color: #fff;
        border-radius: 40px;
        text-decoration: none;
    }

    .sliderlink a:hover {
        -webkit-box-shadow: 1px -1px 65px -2px rgba(56, 65, 161, 1);
        -moz-box-shadow: 1px -1px 65px -2px rgba(56, 65, 161, 1);
        box-shadow: 1px -1px 65px -2px rgba(56, 65, 161, 1);
        transition: .2 all ease-in;
    }


    /*********************Carousel Background*******************/

    .fade-carousel .slides .slide-1,
    .fade-carousel .slides .slide-2,
    .fade-carousel .slides .slide-3 {
        height: 100vh;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }

    .fade-carousel .slides .slide-1,
    .fade-carousel .slides .slide-2,
    .fade-carousel .slides .slide-3,
    .fade-carousel .slides .slide-4,
    .fade-carousel .slides .slide-5{
        background-image: url(./images/slider3.jpg);
        background-attachment: fixed;
        height: 100vh;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }

</style>

<section id="slider">
    <div class="slider">
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
            <!-- Overlay -->
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#bs-carousel" data-slide-to="1"></li>
                <li data-target="#bs-carousel" data-slide-to="2"></li>
                <li data-target="#bs-carousel" data-slide-to="3"></li>
                <li data-target="#bs-carousel" data-slide-to="4"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slides active">
                    <div class="overlay"></div>
                    <div class="slide-1"></div>
                    <div class="sliderContent">
                        <hgroup>
                            <h1>We are creative</h1>
                            <h3>Get start your next awesome project</h3> </hgroup>

                        <div class="sliderlink"> <a href="#">Learn More</a> </div>
                    </div>
                </div>
                <div class="item slides">
                    <div class="overlay"></div>
                    <div class="slide-2"></div>
                    <div class="sliderContent">
                        <hgroup>
                            <h1>We are smart</h1>
                            <h3>Get start your next awesome project</h3> </hgroup>
                        <div class="sliderlink"> <a href="#">Learn More</a> </div>
                    </div>
                </div>
                <div class="item slides">
                    <div class="overlay"></div>
                    <div class="slide-3"></div>
                    <div class="sliderContent">
                        <hgroup>
                            <h1>We are amazing</h1>
                            <h3>Get start your next awesome project</h3> </hgroup>
                        <div class="sliderlink"> <a href="#">Learn More</a> </div>
                    </div>
                </div>
                <div class="item slides">
                    <div class="overlay"></div>
                    <div class="slide-4"></div>
                    <div class="sliderContent">
                        <hgroup>
                            <h1>We are smart</h1>
                            <h3>Get start your next awesome project</h3> </hgroup>
                        <div class="sliderlink"> <a href="#">Learn More</a> </div>
                    </div>
                </div>
                <div class="item slides">
                    <div class="overlay"></div>
                    <div class="slide-5"></div>
                    <div class="sliderContent">
                        <hgroup>
                            <h1>We are smart</h1>
                            <h3>Get start your next awesome project</h3> </hgroup>
                        <div class="sliderlink"> <a href="#">Learn More</a> </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>