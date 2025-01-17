<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body>
    <!-- ===========================
    =====>> Top Preloader <<===== -->
    <div id="preloader">
        <div class="lds-css">
            <div class="preloader-3">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- =====>> End Top Preloader <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Top Menu <<===== -->

    <header class="top-nav">
        @include('header')
    </header>
    <!-- =====>> End Top Menu <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Hero <<===== -->
    <section id="Home-area" class="header">
        <div class="fullslider owl-carousel owl-theme ">
            <!-- slider item -->
            <div class="item slider-bg-1 ">
                <div class="container ">
                    <div class="row ">
                        <div class="col-lg-8 text-left dis-tab ">
                            <div class="slider-all-text ">
                                <h1>Where amazing fitness are made </h1>
                                <p>Our instructors & personal trainers will help you
                                    <br> with all your fitness goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider item -->
            <div class="item slider-bg-2">
                <div class="container ">
                    <div class="row ">
                        <div class="col-lg-8 text-left dis-tab ">
                            <div class="slider-all-text ">
                                <h1>Where amazing fitness are made </h1>
                                <p>Our instructors & personal trainers will help you
                                    <br> with all your fitness goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider item -->
            <div class="item slider-bg-6">
                <div class="container ">
                    <div class="row ">
                        <div class="col-lg-8 text-left dis-tab ">
                            <div class="slider-all-text ">
                                <h1>Where amazing fitness are made </h1>
                                <p>Our instructors & personal trainers will help you
                                    <br> with all your fitness goals.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Hero <<===== 
    =========================== -->

    <!-- ===========================
    =====>> About Box <<===== -->
    <section id="about-box">
        <div class="container-fluid ">
            <div class="row ">
                <div class="col-lg-3 about-box-left-bc p-0 ">
                    <!-- <img src="img/home/kidsposter.jpg" style="max-width:95%" alt="logo"> -->
                    <img src="{{url('storage/'.$image[0]->image)}}" style="max-width:95%" alt="{{$image[0]->description}}">
                </div>
                <div class="col-lg-9 p-0 ">
                    <div class="about-box-right media">
                        <div class="about-box-right-img "></div>
                        <h2>Kick your feet up!
                            <br> <span> With a designed  gym around you</span></h2>
                        <a href="contact.html" class="btn btn-1">Contact us</a>
                    </div>
                    <div id="main">
                        <div class="slideFrame" id="slider-0">
                            <ul class="slideGuide left ">
                                <li class="slideCell ">
                                    <img src="img/home/ab-1.jpg" alt=" ">
                                    <div class="sliderCell-text ">
                                        <h2>Fit Plans </h2>
                                        <h3>For Every Goal</h3>
                                        <p>Let our knowledgeable team get you started with a one-on-one workout session</p>
                                    </div>
                                </li>
                                <li class="slideCell ">
                                    <img src="img/home/ab-2.jpg" alt=" ">
                                    <div class="sliderCell-text ">
                                        <h2>Fit Plans </h2>
                                        <h3>For Every Goal</h3>
                                        <p>Let our knowledgeable team get you started with a one-on-one workout session</p>
                                    </div>
                                </li>
                                <li class="slideCell ">
                                    <img src="img/home/ab-3.jpg" alt=" ">
                                    <div class="sliderCell-text ">
                                        <h2>Fit Plans </h2>
                                        <h3>For Every Goal</h3>
                                        <p>Let our knowledgeable team get you started with a one-on-one workout session</p>
                                    </div>
                                </li>
                                <li class="slideCell ">
                                    <img src="img/home/ab-4.jpg" alt=" ">
                                    <div class="sliderCell-text ">
                                        <h2>Fit Plans </h2>
                                        <h3>For Every Goal</h3>
                                        <p>Let our knowledgeable team get you started with a one-on-one workout session</p>
                                    </div>
                                </li>
                                <li class="slideCell ">
                                    <img src="img/home/ab-5.jpg" alt=" ">
                                    <div class="sliderCell-text ">
                                        <h2>Fit Plans </h2>
                                        <h3>For Every Goal</h3>
                                        <p>Let our knowledgeable team get you started with a one-on-one workout session</p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End About Box <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Silverbacktroops <<===== -->
    <section id="silverback-area" class="pt-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-title text-center">
                        <h2>Why join <span>Silverbacktroops</span> </h2>
                        <p>Kick your feet up! With a gym designed around you, we think
                            <br> you’ll love it here.</p>
                    </div>
                </div>
            </div>
            <div class="silverback-content pt-40 ">
                <div class="row ">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!-- silverback item -->
                        <div class="silverback-item silverback-border mt-40">
                            <img src="img/icon/1.png" alt=" ">
                            <h2> Fitness Training </h2>
                            <p>Over 50 group training sessions per week There is no one type or way in our diverse community. Come as you are!</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!-- silverback item -->
                        <div class="silverback-item silverback-border mt-40">
                            <img src="img/icon/2.png" alt=" ">
                            <h2>Tons of Cardio & Strength </h2>
                            <p>Over 50 group training sessions per week There is no one type or way in our diverse community. Come as you are!</p>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-sm-6 offset-sm-3">
                        <!-- silverback item -->
                        <div class="silverback-item mt-40">
                            <img src="img/icon/3.png" alt=" ">
                            <h2>Memberships</h2>
                            <p>Over 50 group training sessions per week There is no one type or way in our diverse community. Come as you are!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Silverback <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Services <<===== -->
    <section id="services-area" class="pt-150">
        <div class="container ">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 ">
                    <div class="section-title text-center ">
                        <h2>What you get from <span>Silverbacktroops membership</span> </h2>
                        <p>Kick your feet up! With a gym designed around you, we think
                            <br> you’ll love it here.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-content pt-40 ">
            <div class="container-fluid ">
                <div class="row ">
                    <!-- Service Item -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="services-box effect-item mt-40">
                            <div class="services-item content-overlay">
                                <img src="img/services/s1.jpg" alt=" ">
                                <div class="content-details fadeIn-top">
                                    <i class="flaticon-male-silhouette-variant-showing-muscles "></i>
                                    <h3>fat burn</h3>
                                    <p>Over 50 group training sessions per week There is no one type or way in our diverse community.</p>
                                </div>
                            </div>
                            <div class="services-text text-center">
                                <i class="flaticon-male-silhouette-variant-showing-muscles "></i>
                                <h3>fat burn</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="services-box effect-item mt-40">
                            <div class="services-item content-overlay">
                                <img src="img/services/s2.jpg" alt=" ">
                                <div class="content-details fadeIn-top">
                                    <i class="flaticon-male-arm-muscles "></i>
                                    <h3>Muscle Sculpe</h3>
                                    <p>Over 50 group training sessions per week There is no one type or way in our diverse community.</p>
                                </div>
                            </div>
                            <div class="services-text text-center">
                                <i class="flaticon-male-arm-muscles "></i>
                                <h3>Muscle Sculpe</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="services-box effect-item mt-40">
                            <div class="services-item content-overlay">
                                <img src="img/services/s3.jpg" alt=" ">
                                <div class="content-details fadeIn-top">
                                    <i class="flaticon-calories "></i>
                                    <h3>pilates & stretching </h3>
                                    <p>Over 50 group training sessions per week There is no one type or way in our diverse community. </p>
                                </div>
                            </div>
                            <div class="services-text text-center">
                                <i class="flaticon-calories "></i>
                                <h3>pilates & stretching </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Service Item -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="services-box effect-item mt-40">
                            <div class="services-item content-overlay">
                                <img src="img/services/s4.jpg" alt=" ">
                                <div class="content-details fadeIn-top">
                                    <i class="flaticon-treadmill "></i>
                                    <h3>Cycling</h3>
                                    <p>Over 50 group training sessions per week There is no one type or way in our diverse community.</p>
                                </div>
                            </div>
                            <div class="services-text text-center">
                                <i class="flaticon-treadmill "></i>
                                <h3>Cycling</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Services <<===== 
    =========================== -->


    <!-- ===========================
    =====>> Pricing <<===== -->
    <section id="pricing-area" class="pt-150">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-8 offset-lg-2 ">
                    <div class="section-title text-center ">
                        <h2>Silverbacktroops membership <span>Pricing</span></h2>
                        <p>New Membership Price
                            <br> 2020</p>
                    </div>
                </div>
            </div>
            <div class="pricing-content pt-40">
                <div class="row">
                    <!-- Silver Membership Pricing -->
                    <div class="col-lg-6 mt-40">
                        <div class="pricing-item media">
                            <div class="pricing-item-left">
                                <ul>
                                    <li>
                                        <h3 class="pricing-item-left-h3">SILVER MEMBERSHIP </h3>
                                    </li>
                                    <li>
                                        <h3 class="pricing-item-left-h3" style="text-decoration: underline; padding-bottom: 10px;">Basic Price</h4>
                                        <h4 class="pricing-item-left-h6" style="padding-bottom: 10px;">Per Month</h6>
                                        <h2 class="pricing-item-left-h2" style="padding-bottom: 10px;">RM98.00</h3>
                                        <h4 class="pricing-item-left-h6" style="padding-bottom: 10px;">Per Entry</h6>
                                        <h2 class="pricing-item-left-h2">RM18.00</h3>
                                    </li>
                                    <li>
                                        <h3 class="pricing-item-left-h3" style="text-decoration: underline; padding-bottom: 10px;">Lump Sum</h4>
                                        <h4 class="pricing-item-left-h6" style="padding-bottom: 10px;">6 months</h6>
                                        <h2 class="pricing-item-left-h2" style="padding-bottom: 10px;">RM498</h3>
                                        <h4 class="pricing-item-left-h6" style="padding-bottom: 10px;">12 months</h6>
                                        <h2 class="pricing-item-left-h2">RM938</h3>
                                    </li>
                                </ul>
                            </div>
                            <div class="pricing-item-right" style="padding-top: 100px;">
                                <ul>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Changing Room Provided</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Sauna and Steam Bath</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Locker provided</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Body Building Gym</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Fitness Studio & Classes</li>
                                </ul>
                                <a href="contact.html" class="btn btn-3">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <!-- Gold Membership Pricing -->
                    <div class="col-lg-6 mt-40">
                        <div class="pricing-item media pricing-item-bgc">
                            <div class="pricing-item-left pricing-right">
                                <ul>
                                    <li>
                                        <h3 class="pricing-item-left-h3">GOLD MEMBERSHIP </h3>
                                    </li>
                                    <li>
                                        <h3 class="pricing-item-left-h3" style="text-decoration: underline; padding-bottom: 10px;">Basic Price</h4>
                                        <h4 class="pricing-item-left-h6" style="padding-bottom: 10px;">Per Month</h6>
                                        <h2 class="pricing-item-left-h2" style="padding-bottom: 10px;">RM118.00</h3>
                                        <h4 class="pricing-item-left-h6" style="padding-bottom: 10px;">Per Entry</h6>
                                        <h2 class="pricing-item-left-h2">RM28.00</h3>
                                    </li>
                                    <li>
                                        <h3 class="pricing-item-left-h3" style="text-decoration: underline; padding-bottom: 10px;">Lump Sum</h4>
                                        <h4 class="pricing-item-left-h6" style="padding-bottom: 10px;">6 Months</h6>
                                        <h2 class="pricing-item-left-h2" style="padding-bottom: 10px;">RM648</h3>
                                        <h4 class="pricing-item-left-h6" style="padding-bottom: 10px;">12 Months</h6>
                                        <h2 class="pricing-item-left-h2">RM1178</h3>
                                    </li>
                                </ul>
                            </div>
                            <div class="pricing-item-right pricing-right" style="padding-top: 80px;">
                                <ul>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Changing Room Provided</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Sauna and Steam Bath</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Locker provided</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Body Building Gym</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Fitness Studio & Classes</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Exclusive Training Area</li>
                                </ul>
                                <a href="contact.html" class="btn btn-3">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <!-- Platinum Membership Pricing -->
                    <div class="col-lg-6 mt-40">
                        <div class="pricing-item media pricing-item-bgc">
                            <div class="pricing-item-left pricing-right">
                                <ul>
                                    <li>
                                        <h3 class="pricing-item-left-h3">PLATINUM MEMBERSHIP </h3>
                                    </li>
                                    <li>
                                        <h3 class="pricing-item-left-h3" style="text-decoration: underline; padding-bottom: 10px;">Basic Price</h4>
                                        <h4 class="pricing-item-left-h6" style="padding-bottom: 10px;">Per Month</h6>
                                        <h2 class="pricing-item-left-h2" style="padding-bottom: 10px;">RM149.00</h3>
                                        <h4 class="pricing-item-left-h6" style="padding-bottom: 10px;">Per Entry</h6>
                                        <h2 class="pricing-item-left-h2">RM38.00</h3>
                                    </li>
                                    <li>
                                        <h3 class="pricing-item-left-h3" style="text-decoration: underline; padding-bottom: 10px;">Lump Sum</h4>
                                        <h4 class="pricing-item-left-h6" style="padding-bottom: 10px;">6 months</h6>
                                        <h2 class="pricing-item-left-h2" style="padding-bottom: 10px;">RM798</h3>
                                        <h4 class="pricing-item-left-h6" style="padding-bottom: 10px;">12 months</h6>
                                        <h2 class="pricing-item-left-h2">RM1418</h3>
                                    </li>
                                </ul>
                            </div>
                            <div class="pricing-item-right pricing-right" style="padding-top: 60px;">
                                <ul>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Changing Room Provided</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Sauna and Steam Bath</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Locker provided</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Body Building Gym</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Fitness Studio & Classes</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Exclusive Training Area</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Wall Climbing (Bouldering)</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Silverback Warrior (Obstacle Course)</li>
                                </ul>
                                <a href="contact.html" class="btn btn-3">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <!-- Free Membership Pricing -->
                    <div class="col-lg-6 mt-40">
                        <div class="pricing-item media">
                            <div class="pricing-item-left">
                                <ul>
                                    <li>
                                        <h3 class="pricing-item-left-h3">MMA MEMBERSHIP </h3>
                                    </li>
                                    <li>
                                        <h3 class="pricing-item-left-h3" style="text-decoration: underline; padding-bottom: 10px;">Basic Price</h4>
                                        <h4 class="pricing-item-left-h6" style="padding-bottom: 10px;">Per Month</h6>
                                        <h2 class="pricing-item-left-h2" style="padding-bottom: 10px;">RM288.00</h3>
                                        <h4 class="pricing-item-left-h6" style="padding-bottom: 10px;">Per Entry</h6>
                                        <h2 class="pricing-item-left-h2">RM48.00</h3>
                                    </li>
                                    <li>
                                        <h3 class="pricing-item-left-h3" style="text-decoration: underline; padding-bottom: 10px;">Lump Sum</h4>
                                        <h4 class="pricing-item-left-h6" style="padding-bottom: 10px;">6 Months</h6>
                                        <h2 class="pricing-item-left-h2" style="padding-bottom: 10px;">RM1598</h3>
                                        <h4 class="pricing-item-left-h6" style="padding-bottom: 10px;">12 Months</h6>
                                        <h2 class="pricing-item-left-h2">RM2978</h3>
                                    </li>
                                </ul>
                            </div>
                            <div class="pricing-item-right" style="padding-top: 30px;">
                                <ul>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Changing Room Provided</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Sauna and Steam Bath</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Locker provided</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Body Building Gym</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Fitness Studio & Classes</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Exclusive Training Area</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Wall Climbing (Bouldering)</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> Silverback Warrior (Obstacle Course)</li>
                                    <li><a href="#"><i class="fas fa-check-circle "></i> MMA Gym & Classes</li>
                                </ul>
                                <a href="contact.html" class="btn btn-3">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Pricing <<===== 
    =========================== -->

    <!-- ===========================
    =====>>Classes <<===== -->
    <section id="silverback-classes-area" class="pt-150">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2>Silverbacktroops <span>classes</span></h2>
                    </div>
                </div>
            </div>
            <div class="silverback-classes-content pt-50">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="silverback-classes-tab">
                            <!-- tab nav -->
                            <ul class="classes-tabs classes-tab-btn">
                                <li class="tab-link current" data-tab="tab-1">Gym Classes</li>
                                <li class="tab-link" data-tab="tab-2">MMA Classes</li>
                            </ul>

                            <!-- Tab 1 Gym Classes -->
                            <div id="tab-1" class="tab-content current">
                                <div class="silverback-tab-all">
                                    <h5>sunday</h5>
                                    <ul>
                                        <li><span>no class</span></li>
                                        <li><span>no class</span></li>
                                        <li><span>no class</span></li>
                                        <li><span>no class</span></li>
                                    </ul>
                                </div>
                                <div class="silverback-tab-2 silverback-tab-all">
                                    <h5>monday</h5>
                                    <ul>
                                        <li><span>HILO (CHRISTY)</span>9.30 A.M.</li>
                                        <li><span>YOGA (ALEXA)</span>10.45 A.M.</li>
                                        <li><span>TO BE ANNOUNCED</span></li>
                                        <li><span>POUND FITNESS (SHA)</span>8.30 P.M.</li>
                                    </ul>
                                </div>
                                <div class="silverback-tab-3 silverback-tab-all">
                                    <h5>tuesday</h5>
                                    <ul>
                                        <li><span>CHAIR YOGA (AU YONG)</span>9.30 A.M.</li>
                                        <li><span>POUND FITNESS (SHA)</span>10.45 A.M.</li>
                                        <li><span>HI-LO AEROBIC</span>7.30 P.M.</li>
                                        <li><span>ZUMBA (CASSY LEE)</span>8.30 P.M</li>
                                    </ul>
                                </div>
                                <div class="silverback-tab-4 silverback-tab-all">
                                    <h5>wednesday</h5>
                                    <ul>
                                        <li><span>TO BE ANNOUNCED</span></li>
                                        <li><span>ZUMBA (WENNY)</span>10.45 A.M.</li>
                                        <li><span>TO BE ANNOUNCED</span></li>
                                        <li><span>METAFIT (THARANI)</span>8.30 P.M.</li>
                                    </ul>
                                </div>
                                <div class="silverback-tab-5 silverback-tab-all">
                                    <h5>thursday</h5>
                                    <ul>
                                        <li><span>pilates(christy)</span>9:30 A.M.</li>
                                        <li><span>nirvana yoga(ming jie)</span>10.45 A.M.</li>
                                        <li><span>TO BE ANNOUNCED</span></li>
                                        <li><span>zumba(mun yee)</span>8.30 P.M.</li>
                                    </ul>
                                </div>
                                <div class="silverback-tab-6 silverback-tab-all">
                                    <h5>friday</h5>
                                    <ul>
                                        <li><span>flow yoga(xiang)</span>9:30 A.M.</li>
                                        <li><span>zumba(ming jie)</span>10.45 A.M.</li>
                                        <li><span>pilates(christy)</span>7.30 P.M.</li>
                                        <li><span>zumba(regine)</span>8.30 P.M.</li>
                                    </ul>
                                </div>
                                <div class="silverback-tab-7 silverback-tab-all">
                                    <h5>saturday</h5>
                                    <ul>
                                        <li><span>yoga(liang)</span>9:00 A.M.</li>
                                        <li><span>no class</span></li>
                                        <li><span>cardio dance</span>3.00 P.M.</li>
                                        <li><span>no class</span></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Tab 2 MMA Classes -->
                            <div id="tab-2" class="tab-content ">
                                <div class="silverback-tab-all">
                                    <h5>sunday</h5>
                                    <ul>
                                        <li><span>no class</span></li>
                                        <li><span>no class</span></li>
                                        <li><span>no class</span></li>
                                        <li><span>no class</span></li>
                                    </ul>
                                </div>
                                <div class="silverback-tab-2 silverback-tab-all">
                                    <h5>monday</h5>
                                    <ul> 
                                        <li><span>boxing</span>8:15 A.M.</li>
                                        <li><span>open mats</span></li>
                                        <li><span>kick boxing</span>6.30 P.M.</li>
                                        <li><span>OPEN MATS</span></li>
                                    </ul>
                                </div>
                                <div class="silverback-tab-3 silverback-tab-all">
                                    <h5>tuesday</h5>
                                    <ul>
                                        <li><span>KICK boxing</span>8:15 A.M.</li>
                                        <li><span>open mats</span></li>
                                        <li><span>boxing</span>6.30 P.M.</li>
                                        <li><span>OPEN MATS</span></li>
                                    </ul>
                                </div>
                                <div class="silverback-tab-4 silverback-tab-all">
                                    <h5>wednesday</h5>
                                    <ul>
                                        <li><span>MUAY THAI</span>8:15 A.M.</li>
                                        <li><span>open mats</span></li>
                                        <li><span>MUAY THAI</span>6.30 P.M.</li>
                                        <li><span>KICK BOXING</span>8.00 P.M.</li>
                                    </ul>
                                </div>
                                <div class="silverback-tab-5 silverback-tab-all">
                                    <h5>thursday</h5>
                                    <ul>
                                        <li><span>NO GI MMA</span>8:15 A.M.</li>
                                        <li><span>open mats</span></li>
                                        <li><span>BOXING</span>6.30 P.M.</li>
                                        <li><span>nogi mma</span>8.00 P.M.</li>
                                    </ul>
                                </div>
                                <div class="silverback-tab-6 silverback-tab-all">
                                    <h5>friday</h5>
                                    <ul>
                                        <li><span>OPEN SPARRING</span>8:15 A.M.</li>
                                        <li><span>open mats</span></li>
                                        <li><span>open sparring</span>6.30 P.M.</li>
                                        <li><span>muay thai</span>8.00 P.M.</li>
                                    </ul>
                                </div>
                                <div class="silverback-tab-7 silverback-tab-all">
                                    <h5>saturday</h5>
                                    <ul>
                                        <li><span>MMA</span></span>9:30 A.M.</li>
                                        <li><span>JUNIOR MMA</span>11:00 A.M.</li>
                                        <li><span>no class</span></li>
                                        <li><span>no class</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- =====>> End Silverback classes <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Team <<===== -->
    <section id="team-area" class="pt-150 pb-150">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-title text-center">
                        <h2>silverback <span>COACHES</span></h2>
                        <p>Kick your feet up! With a gym designed around you, we think
                            <br> you’ll love it here.</p>
                    </div>
                </div>
            </div>
            <div class="team-content pt-40">
                <div class="row">
                    <!-- team item -->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team-box effect-item mt-40">
                            <div class="team-item content-overlay">
                                <img src="img/team/1.jpg" alt="">
                                <div class="content-details fadeIn-top">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                    <p>Over 50 group training sessions per week There is no one type or way in our diverse community.</p>
                                </div>
                            </div>
                            <div class="team-title text-center">
                                <h3><a href="#">Arial hedger</a></h3>
                                <p>Fitness & Body</p>
                            </div>
                        </div>
                    </div>
                    <!-- team item -->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="team-box effect-item mt-40">
                            <div class="team-item content-overlay">
                                <img src="img/team/2.jpg" alt="">
                                <div class="content-details fadeIn-top">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                    <p>Over 50 group training sessions per week There is no one type or way in our diverse community.</p>
                                </div>
                            </div>
                            <div class="team-title text-center">
                                <h3><a href="#">marina aring</a></h3>
                                <p>Fitness & Body</p>
                            </div>
                        </div>
                    </div>
                    <!-- team item -->
                    <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-3 col-sm-6 offset-sm-3">
                        <div class="team-box effect-item mt-40">
                            <div class="team-item content-overlay">
                                <img src="img/team/3.jpg" alt="">
                                <div class="content-details fadeIn-top">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                    <p>Over 50 group training sessions per week There is no one type or way in our diverse community.</p>
                                </div>
                            </div>
                            <div class="team-title text-center">
                                <h3><a href="#">alan lynda</a></h3>
                                <p>Fitness & Body</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Team <<===== 
    =========================== -->

     <!-- ===========================
    =====>> Footer <<===== -->
    <footer id="footer-area" class="pt-100 pb-150">
        @include('footer')
    </footer>
    <!-- =====>> End Footer <<===== 
    =========================== -->
</body>
</html>