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
    =====>> Page Hero <<===== -->
    <section id="page-hero" class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title text-center">
                        <h1>contact <span>us</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Page Hero <<===== 
    =========================== -->


    <!-- ===========================
    =====>> Contact <<===== -->
    <section id="contact-area" class="pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contaict-title">
                        <h2>keep in touch with us</h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form action="https://wpsprite.com/html/silverback/mail.php" method="POST" id="contact-form" class="contact-box">
                        <input type="text" name="name" placeholder="Name">
                        <input type="email" name="email" placeholder="Email">
                        <input type="number" name="number" placeholder="Phone">
                        <textarea name="commet" id="commet" placeholder="Comment"></textarea>
                        <button type="submit" class="btn btn-7">Send Message</button>
                    </form>
                    <p class="form-message"></p>
                </div>
                <div class="col-lg-4 ">
                    <div class="contact-ditels m-lg-2">
                        <ul class="media">
                            <li><i class="fas fa-envelope"></i></li>
                            <li>
                                <a href="#">admin@silverbacktroops.com</a>
                            </li>
                        </ul>
                        <ul class="media">
                            <li><i class="fas fa-phone-volume"></i></li>
                            <li>
                                <a href="#">+6017 200 3696</a>
                            </li>
                        </ul>
                        <ul class="media">
                            <li><i class="fas fa-map-marker-alt"></i></li>
                            <li>
                                <a target="_blank" href="https://www.google.com/maps/place/Silverback+Troops/@3.0357732,101.7666576,17z/data=!3m1!4b1!4m5!3m4!1s0x31cc352b8ac7026b:0xcf2271f762bc8d06!8m2!3d3.0357678!4d101.7688463">                    <li><a target="_blank" href="https://www.google.com/maps/place/Silverback+Troops/@3.0357732,101.7666576,17z/data=!3m1!4b1!4m5!3m4!1s0x31cc352b8ac7026b:0xcf2271f762bc8d06!8m2!3d3.0357678!4d101.7688463">1-1 Jalan Tengah Cheras Selatan,</br>
                                    118, 43200 Batu 9 Cheras, Selangor</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Contact <<===== 
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