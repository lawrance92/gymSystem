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
                        <h1>register <span>member</span></h1>
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
                        <h2>Register now for your healthy life</h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form action="https://wpsprite.com/html/silverback/mail.php" method="POST" id="contact-form" class="contact-box">
                        <input type="text" name="name" placeholder="Name">
                        <input type="text" name="icNumber" placeholder="I/C Number">
                        <input type="date" name="dateofbirth" placeholder="D.O.B">
                        <input type="number" name="age" placeholder="Age">
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Gender
                            </a>      
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Male</a>
                                <a class="dropdown-item" href="#">Female</a>
                            </div>
                        </div>
                        <textarea name="address" id="address" placeholder="Address" style="margin-top: 50px;"></textarea>
                        <input type="text" name="companyName" placeholder="Company Name">
                        <textarea name="companyAddress" id="companyAddress" placeholder="Company Address"></textarea>
                        <input type="email" name="email" placeholder="Email">
                        <input type="number" name="number" placeholder="Phone">
                        <button type="submit" class="btn btn-7">Register</button>
                    </form>
                    <p class="form-message"></p>
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


<!-- Mirrored from wpsprite.com/html/silverback/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Dec 2019 11:04:39 GMT -->
</html>