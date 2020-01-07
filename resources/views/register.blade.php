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
    =====>> Title <<===== -->
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
    <!-- =====>> End Title <<===== 
    =========================== -->


    <!-- ===========================
    =====>> Register Form <<===== -->
    <section id="contact-area" class="pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contaict-title">
                        <h2>Register now for your healthy life</h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form action="{{url('memberregister')}}" method="POST" id="contact-form" class="contact-box">
                        {{csrf_field()}}
                        <input type="text" name="name" placeholder="Name">
                        <input type="number" name="icNumber" placeholder="I/C Number">
                        <input type="date" name="dateOfBirth" placeholder="D.O.B">
                        <input type="number" name="age" placeholder="Age">
                        <div class="box">
                            <select name="gender">
                                <option selected disabled>-- Choose Gender --</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <textarea name="postalAddress" placeholder="Postal Address" style="margin-top: 50px;"></textarea>
                        <input type="text" name="companyName" placeholder="Company Name">
                        <textarea name="companyAddress" placeholder="Company Address" style="margin-top: 50px;"></textarea>
                        <input type="text" name="telephoneNumber" placeholder="Telephone">
                        <input type="text" name="mobileNumber" placeholder="Mobile">  
                        <input type="email" name="email" placeholder="Email">
                        <div class="box">
                            <select name="preferPersonalTrainer">
                                <option selected disabled>Do you prefer to have personal trainer?</option>
                                <option value="male">Yes</option>
                                <option value="female">No</option>
                            </select>
                        </div>          
                        <input type="text" name="emergencyName" placeholder="Emergency Contact Name" style="margin-top: 50px;">
                        <input type="text" name="emergencyRelationship" placeholder="Emergency Contact Relationship">
                        <input type="text" name="emergencyMobile" placeholder="Emergency Contact Mobile">
                        <div class="box">
                            <select name="medicalCondition">
                                <option selected disabled>Do you have any current medical conditions?</option>
                                <option value="male">Yes</option>
                                <option value="female">No</option>
                            </select>
                        </div>
                        <textarea name="medicalComments" placeholder="Specify if Yes" style="margin-top: 50px;"></textarea>
                        <button type="submit" class="btn btn-7">Register</button>
                    </form>
                    @if(count($errors) > 0)
                        @foreach ($errors->all() as $error)
                            <p class="form-message">{{$error}}</p>
                        @endforeach
                    @endif
                    @if(\Session::has('success'))
                        <p class="form-message">{{\Session::get('success')}}</p>
                    @endif
                    <p class="form-message"></p>
                </div>
            </div>
        </div>
    </section>
    <!-- =====>> End Register Form <<===== 
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