<style>
    .front-img{
        background-image: url('/img/87.jpg');
        position: relative;
        /* opacity: 0.65; */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .banner-techno span.techno{
        background-color: #e2703a;
        color: #fff;
        padding: 18px;
        font-size: 25px;
        letter-spacing: 10px;
        float: right;
    }
    .banner-techno{
        position: absolute;
        left: 0;
        top: 40%;
        width: 100%;
        text-align: center;
    }
    .techo-intro h2{
        text-align: center;
        font-weight: bolder;
        color: #d44000;
        padding-bottom: 3%;
        letter-spacing: 5px;
    }
    .techo-intro h4{
        text-align: justify;
        padding-top: 1%;
    }
    #product{
        background-image: url('/img/techno.png');
        width: 100%;
        position: relative;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .flip-card {
        background-color: transparent;
        width: 300px;
        height: 400px;
        /* border: 1px solid #f1f1f1; */
        perspective: 1000px; /* Remove this if you don't want the 3D effect */
    }

    /* This container is needed to position the front and back side */
    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s;
        transform-style: preserve-3d;
    }

    /* Do an horizontal flip when you move the mouse over the flip box container */
    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    /* Position the front and back side */
    .flip-card-front, .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden; /* Safari */
        backface-visibility: hidden;
    }

    /* Style the front side (fallback if image is missing) */
    .flip-card-front {
        background-color: #5b8a72;
        border-radius: 30px;
        border: 10px solid #99bbad;
        color: black;
    }

    /* Style the back side */
    .flip-card-back {
        background-color: #5b8a72;
        border-radius: 30px;
        color: white;
        transform: rotateY(180deg);
        /* text-align: center; */
        padding:15%;
    }
    .flip-card-back p{
        text-align: justify;
    }
    .section-title h2{
        color:white;
        background-color: #e2703a;
        padding: 18px;
        letter-spacing: 10px;
        text-shadow: 2px 2px 1px black;
    }
    .section-title{
        position: absolute;
        left: 0;
        width: 100%;
        text-align: center;
        /* color: #000; */
        font-weight: bolder;
    }
    #card-one{
        background-image: url('/img/momo.jpg');
        background-position: center;
        background-size: cover;
        opacity: 0.8;
        padding:5%;
    }
    #card-two{
        background-image: url('/img/nayeon.jpg');
        background-position: center;
        background-size: cover;
        padding:5%;
        opacity: 0.8;
    }
    #card-three{
        background-image: url('/img/tzuyu.jpg');
        background-position: center;
        background-size: cover;
        padding:5%;
        opacity: 0.8;
    }
    #card-four{
        background-image: url('/img/mina.jpg');
        background-position: center;
        background-size: cover;
        padding:5%;
        opacity: 0.8;
    }
    #testimonials{
        padding-top:8%;
        padding-bottom:5%;
    }
    
</style>
@extends('layouts.app')
@section('content')
<div class="jumbotron-fluid">
    <div class="front-img" style="width: 100%; height: 500px; margin-top: -30px;">
        <div class="banner-techno">
            <span class="techno">EMPOWERING PEOPLE IMPROVING LIVES</span>
        </div>
    </div>
</div>
<div class="jumbotron-fluid">
    <div class="container">
        <div class="techo-intro pt-5 pb-5">
            <h2>TECHNOHEALTH INTERNATIONAL MARKETING CORPORATION</h2>
            <hr>
            <h4>TechnoHealth International Marketing Corp. was founded out of a dream for a sustainable source of
                livelihood for all Filipinos from all walks of life while promoting a healthy lifestyle.
                It is backed-up by one of the best E-Commerce system
                developers in the country. It also has its own manufacturing facility, thereby giving an
                assurance for a continuous supply of world class quality products to the general public.  </h4>
        </div>
    </div>
</div>
<div class="jumbotron-fluid" id="product">
    <div class="section-title">
        <h2>OUR PRODUCTS</h2>
    </div>
<center>
    <div class="container col-md-12" id="card" style=" padding-top: 8%">
        <div class="row">
            <div class="col-md-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="/img/kchoco.png" alt="Avatar" style="width:230px;height:80%;margin-top: 15%">
                        </div>
                        <div class="flip-card-back">
                            <h1>KETO LIFE</h1>
                            <h3>BULLETPROOF CHOCO MIX</h3>
                            <p>Architect & Engineer</p>
                            <p>We love that guy</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="/img/eg.png" alt="Avatar" style="width:230px;height:80%;margin-top: 15%">
                        </div>
                        <div class="flip-card-back">
                            <h1>ENERGREEN</h1>
                            <h3>COFFEE DRINK MIX</h3>
                            <p>Health Benefits:</p>
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="/img/kcoffee.png" alt="Avatar" style="width:230px;height:80%;margin-top: 15%">
                        </div>
                        <div class="flip-card-back">
                            <h1>KETO LIFE</h1>
                            <h3>BULLETPROOF CHOCO MIX</h3>
                            <p>Architect & Engineer</p>
                            <p>We love that guy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container col-md-12" id="card" style=" padding: 5%">
        <div class="row">
            <div class="col-md-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="/img/vprime.png" alt="Avatar" style="width:230px;height:80%;margin-top: 15%">
                        </div>
                        <div class="flip-card-back">
                            <h1>VENUS PRIME</h1>
                            <h3>COLLAGEN DRINK MIX</h3>
                            <p>Venus Prime Collagen is a refreshing Food Supplement drink that is
                                specially formulated with 2500 milligrams Hydrolyzed Collagen,
                                125 milligrams L-Glutathione, 50 milligrams Apricot Extract,
                                50 milligrams MSM and 50 milligrams Sodium Ascorbate.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="/img/ultimate.png" alt="Avatar" style="width:230px;height:80%;margin-top: 15%">
                        </div>
                        <div class="flip-card-back">
                            <h1>ULTIM8 BOTANICAL </h1>
                            <h3>BEVERAGE MIX </h3>
                            <p>ULTIM8 Botanical Beverage Mix is a combination of
                                eight wonder fruits that exhibit great antioxidant properties
                                and help promote a healthy body and total wellness.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="/img/vcoffee.png" alt="Avatar" style="width:230px;height:80%;margin-top: 15%;">
                        </div>
                        <div class="flip-card-back">
                            <h1>VENUS</h1>
                            <h3>COFFEE DRINK MIX</h3>
                            <p>Venus Coffee Drink Mix on the other hand is a delicious
                                beverage that contains Hydrolyzed Collagen Powder,
                                Acai Berry, Grapeseed, Pomegranate and
                                Sakura Flower extracts.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</center>
</div>
<div class="jumbotron-fluid">
    <div class="section-title">
        <h2>TESTIMONIALS</h2>
    </div>
    <center>
        <div id="testimonial">
        <div class="container col-md-12">
            <div class="row" id="testimonials">
                <div class="col-md-3" >
                    <div class="card" style="width: 15rem; height: 20rem" id="card-one">
                        <div class="card-body" style="background: rgba(0, 0, 0, 0.5); color: white;">
                            <h5 class="card-title">TESTIMONIAL 1</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" >
                    <div class="card" style="width: 15rem; height: 20rem" id="card-two">
                        <div class="card-body" style="background: rgba(0, 0, 0, 0.5); color: white;">
                            <h5 class="card-title">TESTIMONIAL 2</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" >
                    <div class="card" style="width: 15rem; height: 20rem" id="card-three">
                        <div class="card-body" style="background: rgba(0, 0, 0, 0.5); color: white;">
                            <h5 class="card-title">TESTIMONIAL 3</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" >
                    <div class="card" style="width: 15rem; height: 20rem" id="card-four">
                        <div class="card-body" style="background: rgba(0, 0, 0, 0.5); color: white;">
                            <h5 class="card-title">TESTIMONIAL 4</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </center>
</div>
@endsection