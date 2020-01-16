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
                        <h1>Error <span>404</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Page Hero <<===== 
    =========================== -->


    <!-- ===========================
    =====>> Error 404 <<===== -->
    <section id="error-404-area" class="pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-body">
                        <div class="error-body-text">
                            <span>404</span>
                            <h2>Page not Found</h2>
                        </div>

                    </div>
                    <div class="error-p">
                        <p>The page you are looking is not available or has been removed. Try going to Home Page by using the button below.</p>
                        <a href="index-1.html" class="btn btn-7">Go to Home Page</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Error 404 <<===== 
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