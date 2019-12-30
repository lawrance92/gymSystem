<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wpsprite.com/html/fitner/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Dec 2019 11:04:39 GMT -->
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
                    <form action="https://wpsprite.com/html/fitner/mail.php" method="POST" id="contact-form" class="contact-box">
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
                                <a href="#">Info@yourmail.com</a>
                                <br>
                                <a href="#">Info2@yourmail.com</a>
                            </li>
                        </ul>
                        <ul class="media">
                            <li><i class="fas fa-phone-volume"></i></li>
                            <li>
                                <a href="#">+00 12 123 4567</a> </br>
                                <a href="#">+1 222 345 342</a>
                            </li>
                        </ul>
                        <ul class="media">
                            <li><i class="fas fa-map-marker-alt"></i></li>
                            <li>
                                <a target="_blank" href="https://www.google.com/maps/place/New+York,+NY+10036,+USA/@40.7462126,-74.0089606,14z/data=!3m1!4b1!4m5!3m4!1s0x89c2585393f82307:0xf7d56896de1566ed!8m2!3d40.7602619!4d-73.9932872">143 castle road 517 </br>
                                    district, kiyev port south </br>
                                    Canada</a>
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


<!-- Mirrored from wpsprite.com/html/fitner/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Dec 2019 11:04:39 GMT -->
</html>