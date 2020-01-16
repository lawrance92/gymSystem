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
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="number" name="icNumber" placeholder="I/C Number" required>
                        <input type="date" name="dateOfBirth" placeholder="D.O.B" required>
                        <input type="number" name="age" placeholder="Age" required>
                        <select name="gender" required>
                            <option selected disabled value="">-- Choose Gender --</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <textarea name="postalAddress" placeholder="Postal Address"></textarea>
                        <input type="text" name="companyName" placeholder="Company Name">
                        <textarea name="companyAddress" placeholder="Company Address"></textarea>
                        <input type="text" name="telephoneNumber" placeholder="Telephone(Home)">
                        <input type="text" name="mobileNumber" placeholder="Mobile" required>  
                        <input type="email" name="email" placeholder="Email">
                        <select name="preferPersonalTrainer" required>
                            <option selected disabled value="">Do you prefer to have personal trainer?</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>         
                        <input type="text" name="emergencyName" placeholder="Emergency Contact Name" required>
                        <input type="text" name="emergencyRelationship" placeholder="Emergency Contact Relationship">
                        <input type="text" name="emergencyMobile" placeholder="Emergency Contact Mobile" required>
                        <select id="medicalCondition" name="medicalCondition" required>
                            <option selected disabled value="">Do you have any current medical conditions?</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        <textarea id="medicalText" name="medicalComments" placeholder="Specify if Yes"></textarea>
                        <button id="registerBtn" type="submit" class="btn btn-7">Register</button>
                    </form>
                    @if ('success')
                        <p class="form-message"></p>
                    @else 
                        <p class="form-message"></p>
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

<script>
    $(document).ready(function() {
        $('#medicalText').hide();
        $('#medicalCondition').change(function (){
            $(this).val() == 'yes' ? $('#medicalText').prop('required', true).show() : $('#medicalText').removeAttr('required').hide();
        });
    });
</script>

<!-- Mirrored from wpsprite.com/html/silverback/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Dec 2019 11:04:39 GMT -->
</html>