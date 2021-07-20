<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from html.kodesolution.live/s/counseling/v3.0/demo/form-register-style1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jun 2021 09:21:37 GMT -->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Counseling - Best Psychology & Counseling HTML5 Template" />
<meta name="keywords" content="chiropractor, counseling, healthcare, psychiatrist, psychologist, psychology" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>CareerVision</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/choosefile.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-green.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img class="floating ml-5 mb-5" src="images/preloaders/13.png" alt="">
      <h5 class="line-height-50 font-18">Loading...</h5>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- Header -->
    @include('FrontEnd.header')

  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h3 class="font-28 text-white">Sign Up</h3>
              
            </div>
          </div>
        </div>
      </div>      
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-push-1">
            <form name="reg-form" class="register-form" method="post">
              <div class="icon-box mb-0 p-0">
                <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                  <i class="pe-7s-users"></i>
                </a>
                <h4 class="text-gray pt-10 mt-0 mb-30">Don't have an Account? Register Now.</h4>
              </div>
              <hr>
              <div class="row">
                <div class="form-group col-md-6">
                  <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option1" onClick="hidecounselor()" checked> Student
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option2" onClick="hidestudent()"> Counselor
                  </label>
                </div>
              </div>
              
              <div class="row">
                <div class="form-group col-md-6">
                  <label>Name</label>
                  <input name="form_name" class="form-control" type="text">
                </div>
                <div class="form-group col-md-6">
                  <label>Mobile No .</label>
                  <input name="form_mobile" class="form-control" type="number">
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-12">
                  <label for="form_choose_username">Email Address</label>
                  <input id="form_choose_username" name="form_email" class="form-control" type="email">
                </div>
              </div>
              

              <div class="row" id="hide1">
                <div class="form-group col-md-6">
                  <label>Qualification</label>
                  <input name="form_name" class="form-control" type="text">
                 
                </div>
                <div class="file-upload col-md-6" >
                  <label>Qualification Image</label>
                  <div class="file-select">
                    <div class="file-select-button" id="fileName">Choose File</div>
                    <div class="file-select-name" id="noFile">No file chosen...</div> 
                    <input type="file" name="chooseFile" id="chooseFile">
                  </div>
                </div>
              </div>

              <div class="row" id="hide2">
                <div class="form-group col-md-6">
                  <label>Experience</label>
                  <input name="form_name1" class="form-control" type="text">
                 
                </div>
                <div class="file-upload col-md-6" >
                  <label>Experience Image</label>
                  <div class="file-select">
                    <div class="file-select-button" id="fileName1">Choose File</div>
                    <div class="file-select-name" id="noFile1">No file chosen...</div> 
                    <input type="file" name="chooseFile1" id="chooseFile1">
                  </div>
                </div>
              </div>

              <div class="row" id="hide3">
                <div class="form-group col-md-6">
                  <label>Adhar No.</label>
                  <input name="form_name2" class="form-control" type="number">
                 
                </div>
                <div class="file-upload col-md-6" >
                  <label>Adharcard Image</label>
                  <div class="file-select">
                    <div class="file-select-button" id="fileName2">Choose File</div>
                    <div class="file-select-name" id="noFile2">No file chosen...</div> 
                    <input type="file" name="chooseFile2" id="chooseFile2">
                  </div>
                </div>
              </div>
              

              <div class="row">
                <div class="form-group col-md-6" id="hides1">
                  <label>Study</label>
                  <input name="form_study" class="form-control" type="text">
                </div>
                <div class="form-group col-md-6" id="hide4">
                  <label>Pincode</label>
                  <input name="form_study" class="form-control" type="number">
                </div>
                <div class="form-group col-md-3">
                  <label>City</label>
                  <select class="form-control" name="form_city">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label>State</label>
                  <select class="form-control" name="form_state">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-6">
                  <label for="form_choose_password">Password</label>
                  <input type="password" id="form_choose_password" name="form_choose_password" class="form-control" type="text">
                </div>
                <div class="form-group col-md-6">
                  <label>Re-enter Password</label>
                  <input type="password" id="form_re_enter_password" name="form_re_enter_password"  class="form-control" type="text">
                </div>
              </div>
              <div class="form-group">
                <button class="btn btn-dark btn-lg btn-block mt-15" type="submit">Register Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

  <!-- Footer -->
    @include('FrontEnd.footer')


  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>
<script >
  $('#chooseFile').bind('change', function () {
      var filename = $("#chooseFile").val();
      if (/^\s*$/.test(filename)) {
        $(".file-upload").removeClass('active');
        $("#noFile").text("No file chosen..."); 
      }
      else {
        $(".file-upload").addClass('active');
        $("#noFile").text(filename.replace("C:\\fakepath\\", "")); 
      }
    });
    
  $('#chooseFile1').bind('change', function () {
      var filename1 = $("#chooseFile1").val();
      if (/^\s*$/.test(filename1)) {
        $(".file-upload").removeClass('active');
        $("#noFile1").text("No file chosen..."); 
      }
      else {
        $(".file-upload").addClass('active');
        $("#noFile1").text(filename1.replace("C:\\fakepath\\", "")); 
      }
    });
    
  $('#chooseFile2').bind('change', function () {
      var filename2 = $("#chooseFile2").val();
      if (/^\s*$/.test(filename2)) {
        $(".file-upload").removeClass('active');
        $("#noFile2").text("No file chosen..."); 
      }
      else {
        $(".file-upload").addClass('active');
        $("#noFile2").text(filename2.replace("C:\\fakepath\\", "")); 
      }
    });
    
  </script>

<script language="Javascript">
  function hidestudent()
  {
  
      document.getElementById("hides1").style.visibility="hidden";
      document.getElementById("hide1").style.visibility="visible";
      document.getElementById("hide2").style.visibility="visible";
      document.getElementById("hide3").style.visibility="visible";
      document.getElementById("hide4").style.visibility="visible";    
  
  }
  
  function hidecounselor()
  {
    document.getElementById("hides1").style.visibility="visible";
      document.getElementById("hide1").style.visibility="hidden";
      document.getElementById("hide2").style.visibility="hidden";
      document.getElementById("hide3").style.visibility="hidden";
      document.getElementById("hide4").style.visibility="hidden";
  
  }
  </script>

</body>

<!-- Mirrored from html.kodesolution.live/s/counseling/v3.0/demo/form-register-style1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Jun 2021 09:21:37 GMT -->
</html>