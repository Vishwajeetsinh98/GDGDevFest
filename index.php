<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GDG Devfest '16</title>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/Materialize/dist/js/materialize.min.js"></script>
    <script src="js/jquery.smooth-scroll.min.js"></script>
    <link rel="stylesheet" href="bower_components/Materialize/dist/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="bower_components/font-awesome/css/font-awesome.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/speakers.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/pastevents.css">
    <link rel="stylesheet" href="css/sponsor.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <meta name="theme-color" content="#232240">
    <link rel="icon" href="images/gdg.png">
    <style>
    body{
      overflow-x: hidden;
      }
      .header-image img{
        position: absolute;
        left: 10%;
        z-index: 1;
        top: 25%;
      }
    </style>
    <?php
if ($_GET['registered']=='True') {
    ?>
<script type="text/javascript">
     Materialize.toast("Registered Successfully!", 4000)
</script>
<?php
}
$email = $_POST['email'];
if(isset($email)){
$con=mysqli_connect("localhost","root","","devfest");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries
mysqli_query($con,"INSERT INTO subscribers (email)
VALUES ('$email')");

mysqli_close($con);

header('Location: index.php?registered=True');
}
else{

?>

</head>

<body>
<nav class="transparent">
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo"><img src="images/gdglogo_w.png"></a>
    <!-- activate side-bav in mobile view -->
    <!-- navbar for mobile -->
  </div>
</nav>
<!--Header-->
<div class="header">
    <div  class="header-image" id="particles-js">
      <img src="images/new1.png" style="width: 80%">
    </div>
    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <div class="center register-button"><a href="#register_form" class="btn custom-yellow-background white-text">Register</a></div>
    </div>
<!--End of header-->

<!--Registration-->
<div class="row register" >
    <br><br>
    <div class="row">
        <div class="col m6 push-m3">
        </div>
        <div class="container">
            <div class="row">
                <div class="col m6 s12 custom-right-border">
                    <div class="col custom-m4 offset-m8 s12 badge">
                        When?
                    </div>
                    <div class="col m6 offset-m6 s10 push-s2">
                        <div class="col m3 offset-m3 date">15</div> <div class="col m6 white-text month-and-date"><span class="month">October</span> <br><span class="year">2016</span></div>
                    </div>
                </div>
                <div class="col  m5 s12 custom-padding">
                    <div class="col m3 s12 badge">
                        Where?
                    </div><div class="col m9 offset-m3"></div>
                    <div class="col m8 s12 push-s2 white-text where-content">
                        Homi Bhabha Gallery,<br>
                        SJT, VIT University<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="register_form">
        <div class="row contact white-text">
            <div class="col m6">
                <!-- <div class="input-field col s12">
                    <input id="full_name" type="text" class="validate" name="first_name">
                    <label class="active" for="full_name">Full Name</label>
                </div>
                <div class="input-field col s12">
                    <input id="reg_no" type="text" class="validate" name="reg_no">
                    <label class="active" for="reg_no">Register Number</label>
                </div>
                <div class="input-field col s12">
                    <input id="contact_no" type="text" class="validate" name="contact_no">
                    <label class="active" for="contact_no">Contact Number</label>
                </div> -->
                 <form action="index.php" method="POST">
                 <div class="input-field col s12">
                    <input type="text" id="email" class="validate" name="email" class="col s12">
                    <label class="active" for="email">Email</label>
                </div>
                <div class="center"><input type="submit" value="Send" class="btn waves-effect waves-light custom-yellow-background"><i class=""></i></div>
                </form>

            </div>
            <div class="col m6 push-m3 terms">
                <p>We believe that spreading knowledge should not come at a cost, so all our events are free. For DevFest’16, we will be screening participants after the online registration.<br><br>We plan on making the event public so that we can attract developers from around Bangalore and Chennai regions.</p>
            </div>
        </div></div>
</div>
<!--End of Registration-->
<!--Info-->

<div class="info-icons row">
    <div class="container">
    <div class="col s4 m4 l4 center">
        <img src="images/collaboration-512.png" style="width: 50%">
        <p style="color: white">3 Speakers</p>
    </div>
    <div class="col s4 m4 l4 center">
        <img src="images/timeline-512.png" style="width: 50%">
        <p style="color: white">5 Phases</p>
    </div>
    <div class="col s4 m4 l4 center">
        <img src="images/sales_performance-512.png" style="width: 50%">
        <p style="color: white">Prices Worth 30k+</p>
    </div>
    </div>
</div>
<!--End of Info-->
<!--Speakers-->
<div class="row speakers">
    <h1 class="center heading">Speakers</h1>
    <div class="row">
    <!--div class="col m3">
      COMING SOON
    </div-->
    <h2>Coming Soon</h2>
    <!--<div class="col m4 s12 speaker center">
        <img src="images/chadhart.jpg" class="rounded"><br>
        Chad Hart<br>
        CTO, Tokbox
    </div>
    <div class="col m4 s12 speaker center">
        <img src="images/pragatirai.jpg" class="rounded"><br>
        Pragati Ogal Rai<br>
        Director, Deutsche Bank Labs
    </div>
    <div class="col m4 s12 speaker center">
        <img src="images/janakiram.jpg" class="rounded"><br>
        Janakiram MSV<br>
        Google Developer Expert
    </div>
    </div>
    <div class="col m4 s12 speaker center">
        <img src="images/vanikola.jpg" class="rounded"><br>
        Vani Kola<br>
        Kalaari Capital
    </div>
    <div class="col m4 s12 speaker center">
        <img src="images/abhinav.jpg" class="rounded"><br>
        Abhinav Asthana<br>
        CEO, Postman
    </div-->
  </div>
</div>

<!--End of speakers-->
<!--Agenda-->
<div class="agenda">
  <h1 class="center heading">Agenda</h1>
  <h2 class="center white-text" style="font-weight:200; font-size:24px;">Coming Soon</h2>
</div>
<!-- <div class="agenda"><h1 class="center heading">Agenda</h1>

    <section class="cd-horizontal-timeline">
            <div class="timeline">
                <div class="events-wrapper" style="width: 100%!important">
                    <div class="events">
                        <ol>
                            <li><a href="#0" data-date="09:00" class="selected">09:00 am</a></li>
    					<li><a href="#0" data-date="10:00">10:00 am</a></li>
              <li><a href="#0" data-date="13:00">01:00 pm</a></li>
              <li><a href="#0" data-date="16:00">03:00 pm</a></li>
                        </ol>

                        <span class="filling-line" aria-hidden="true"></span>
                    </div>
                </div>

                <ul class="cd-timeline-navigation">
                    <li><a href="#0" class="prev inactive">Prev</a></li>
                    <li><a href="#0" class="next">Next</a></li>
                </ul> .cd-timeline-navigation
            </div>

            <div class="events-content">
		<ol>
    			<li class="selected" data-date="09:00">
	            		<div class="agenda-item-data">
                  		<p>15 Oct, 14:00-15:00</p>
	                        <p>Registration</p>
        		        </div>
    			</li>
<li data-date="10:00">
	            		<div class="agenda-item-data">
                  		<p>15 Oct, 14:00-15:00</p>
	                        <p>Registration</p>
        		        </div>
    			</li>
<li data-date="13:00">
	            		<div class="agenda-item-data">
                  		<p>15 Oct, 14:00-15:00</p>
	                        <p>Registration</p>
        		        </div>
    			</li>
<li data-date="16:00">
	            		<div class="agenda-item-data">
                  		<p>15 Oct, 14:00-15:00</p>
	                        <p>Registration</p>
        		        </div>
    			</li>

    		</ol>

        </section>
    </div>    <script src="js/scroll.js"></script> -->
<!--End of Agenda-->
<!--Past events-->
<div class="past-events">
<div class="past-events-header row">
    <h1 class="center heading">Our events so far</h1>
</div>
<div class="past-events-events row">
    <div class="col s12 m4 l4 event event-1" style="min-height: 400px;max-width: 90%;margin-left: 3%!important; background:url('images/node.jpg'); background-size:cover;">
        <h5 style="background:rgba(0,0,0,0.5); padding:10px;">NodeJS Workshop</h5>
    </div>
    <div class="col s12 m4 l4" style="margin-left: -0.8%!important;">
        <div class="row">
            <div class="col s12 m12 l12 event event-2" style="min-height: 150px; background:url('images/DevFest15.jpg') 50px; background-size:cover;">
                <h5 style="background:rgba(0,0,0,0.5); padding:10px;">Devfest'15</h5>
            </div>
        </div>
        <div class="row" style="margin-top: -10%!important">
            <div class="col s12 m12 l12 event event-4" style="min-height: 250px; background:url('images/iwd.JPG'); background-size:cover;">
                <h5 style="background:rgba(0,0,0,0.5); padding:10px;">IWD'16</h5>
            </div>
        </div>
    </div>
    <div class="col s12 m3 l3" style="margin-left: -1.7%;">
        <div class="row">
            <div class="col s12 m12 l12 event event-5" style="min-height: 400px; background:url('images/study_jam.jpg'); background-size:cover;">
                <h5 style="background:rgba(0,0,0,0.5); padding:10px;">Android Study Jam</h5>
            </div>
        </div>
    </div>
</div>
</div><!--End of Past events-->

<!-- Our Patrons -->
  <div class="row patrons">
    <h1 class="heading center">Our Patrons</h1>
    <div class="row">
      <div class="col m6 s12 push-m3 center">
        <img src="images/gv.jpg" class="rounded"><br>
        G. Viswanathan<br>
        Chancellor
    </div>
    </div>
    <div class="col m4 s12 center"><img src="images/vpa_small.jpg" class="rounded " style="border-radius:100% !important;"><br>Sankar Viswanathan</div>
    <div class="col m4 s12 center"><img src="images/vpua_small.jpg" class="rounded"><br>Sekar Viswanathan</div>
    <div class="col m4 s12 center"><img src="images/vpc_small.jpg" class="rounded"><br>G. V. Selvam</div>

    <div class="col m4 s12 center"><img src="images/v_raju.JPG" class="rounded"><br>Dr. V. Raju</div>
    <div class="col m4 s12 center"><img src="images/provc.jpg" class="rounded"><br>Prof. S. Narayanan</div>
    <div class="col m4 s12 center"><img src="images/anand.jpg" class="rounded"><br>Dr. Anand A. Samuel</div>
  </div>
<!-- End of Patrons! -->
<!--Sponsors-->
<div class="row sponsors">
<h1 class="heading center">Sponsors</h1>
<div class="container">
    <div class="row col s12">
        <div class="col m8 s12 l8 offset-l2 offset-m2 sponsor center ">General sponsor<br><img src="images/logo_420_color_2x.png"></div>
        <div class="col m8 s12 l8 offset-l2 offset-m2 sponsor center ">Title sponsor<br><img src="images/1024px-Idea_Cellular_Logo.svg.png"></div>
         <!-- <div class ="col m8 s12 l8 offset-l2 offset-m2 sponsor center">Platform sponsor<br><img src ="images/topcoder_logo.png"></div> -->
       <!--
	 <div class="col m12 l12 s12 center">Platinum sponsors</div>

        <div class="col m6 s6 l3 sponsor center "><img src="images/gdm-foot-logo.png"></div>
        <div class="col m6 s6 l3 sponsor center "><img src="images/product_logo_128.png"></div>
        <div class="col m6 s6 l3 sponsor center "><img src="images/product_logo_128.png"></div>
        <div class="col m6 s6 l3 sponsor center "><img src="images/gdm-foot-logo.png"></div>

        <div class="col s12 m12 l12 center">Gold Sponsors</div>
        <div class="col m2 s4 l2 sponsor center"><img src="images/debian-logo.png"></div>
        <div class="col m2 s4 l2 sponsor center"><img src="images/Ubuntu.png"></div>
        <div class="col m2 s4 l2 sponsor center"><img src="images/debian-logo.png"></div>
        <div class="col m2 s4 l2 sponsor center"><img src="images/Ubuntu.png"></div>
        <div class="col m2 s4 l2 sponsor center"><img src="images/debian-logo.png"></div>
        <div class="col m2 s4 l2 sponsor center"><img src="images/Ubuntu.png"></div>

 </div>-->
    </div>
</div>
</div><!--End of sponsors-->
<!--Footer-->
    <div class="container">
<div class="footer row">
        <div class="footer-first col s12 m6 l6 ">
            <div class="footer-content black-text">Stay in the loop. Be the first to know when we make a move!</div>
        </div>
        <div class="footer-second col s12 m6 l6 black-text">
            <form action = "index.php" method="POST">
            <div class="row">
            <div class="col m8 s8"><h5 class="black-text">Are you ready to witness the awesomeness?</h5></div>
            <div class="input-field footer-email col m8 s8">
                <input name="email" id="email_newsletter" type="email" class="col s12">
                <label for="email_newsletter">Email</label>
            </div>
            <div class="input-field col m4 s4">
                <button class="submit-button col s12">Notify Me</button>
            </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!--End of Footer-->
<!--Footer with GDG Logo-->
    <footer class="page-footer custom-blue">
        <div class="row">
          <div class="col m4 s12 center">
            <a href="http://facebook.com/gdgvitvellore" target="_blank"><i class="fa fa-facebook custom-social-icon custom-facebook"></i></a>
            <a href="https://plus.google.com/+gdgvitvellore" target="_blank"><i class="fa fa-google-plus custom-social-icon"></i></a>
            <!-- <i class="fa fa-twitter  custom-social-icon"></i> -->
          </div>
          <div class="col m4 s12 center">
            <img src="images/gdg.png" style="width:15%;">
          </div>
          <div class="col m4 s12 center">
              <img src="images/gdglogo_w.png" style="width:60%; margin-top:-15px !important;">
          </div>
        </div>
        <div class="row">
          <div class="col s8 push-s2">
            <div class="col m4 s12 center grey-text" style="font-weight:700 !important;">
              <i style="font-size:24px;" class="grey-text fa fa-envelope"></i><br>
              MAIL<br>
              <a class="grey-text" href="mailto:gdgvitvellore@gmail.com">gdgvitvellore@gmail.com</a>
            </div>
            <div class="col m4 s12 center grey-text" style="font-weight:700px;">
              <i style="font-size:24px;" class="grey-text fa fa-phone"></i><br>
              CALL<br>
              <a class="grey-text" href="tel:+917708150636">+917708150636</a>
            </div>
            <div class="col m4 s12 center grey-text" style="font-weight:700px;">
              <i style="font-size:24px;" class="grey-text fa fa-map-marker"></i><br>
              FIND US<br>
              <a class="grey-text" href="">GDG, VIT UNIVERSITY</a>
            </div>
          </div>
        </div>
    </footer>
<!-- End of Second Footer-->
<script>
  $(document).ready(function(){
    $('div.register-button').on('click', function() {
      $.smoothScroll({
        scrollElement: $('body'),
        scrollTarget: '#register_form',
        offset: 450
      });
      return false;
    });
  });
</script>
</body>
</html>
<?php
}
?>
