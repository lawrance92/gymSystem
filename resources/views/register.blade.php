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
                    <form id="contact-form" class="contact-box" onsubmit="doSomething()">
                        {{csrf_field()}}
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="number" name="identitynumber" placeholder="I/C Number" required>
                        <input type="date" name="dateofbirth" placeholder="D.O.B" required>
                        <input type="number" name="age" placeholder="Age" required>
                        <select name="gender" required>
                            <option selected disabled value="">-- Choose Gender --</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <textarea name="postaladdress" placeholder="Postal Address"></textarea>
                        <input type="text" name="companyname" placeholder="Company Name">
                        <textarea name="companyaddress" placeholder="Company Address"></textarea>
                        <input type="text" name="telephonenumber" placeholder="Telephone(Home)">
                        <input type="text" name="mobilenumber" placeholder="Mobile" required>  
                        <input type="email" name="email" placeholder="Email">
                        <select name="preferpersonaltrainer" required>
                            <option selected disabled value="">Do you prefer to have personal trainer?</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>         
                        <input type="text" name="emergencycontactname" placeholder="Emergency Contact Name" required>
                        <input type="text" name="emergencycontactrelationship" placeholder="Emergency Contact Relationship">
                        <input type="text" name="emergencymobilenumber" placeholder="Emergency Contact Mobile" required>
                        <select id="medicalCondition" name="medicalcondition" required>
                            <option selected disabled value="">Do you have any current medical conditions?</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                        <textarea id="medicalText" name="medicalcomments" placeholder="Specify if Yes"></textarea>
                        <button id="registerBtn" type="submit" class="btn btn-7">Register</button>
                    </form>
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

    function doSomething() {
        var data = $("#contact-form").serializeArray();
        console.log(data);
        $.ajax({
            type: "POST",
            url: "{{url('memberregister')}}",
            data: {data: data},
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('input[name=_token]').val()
            },
            error: function (data) {
                if(data.responseText == 'success') {
                    $('#contact-form').find('input[type="text"], input[type="number"], input[type="date"], input[type="email"], textarea').val('');
                    $('#contact-form').find('select option:first-child').prop('selected', true);
                    alert('Your Registration Have Done Wait Until Gym Management Will Call you');
                }
            }
        });
    }
</script>
</html>