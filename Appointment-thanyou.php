<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Agency World</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->

<link rel="shortcut icon" href="img/logoav.png">


<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Slider
    ================================================== -->
<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
<link href="css/owl.theme.css" rel="stylesheet" media="screen">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a href="index.html"><img src="img/agencyworld.png" alt="" class="img-responsive"></a>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html" class="page-scroll ">Home</a></li>
        <li><a href="about-us.html" class="page-scroll">About Us</a></li>
        <li><a href="services.html" class="page-scroll">Services</a></li>
        <li><a href="portfolio.html" class="page-scroll">Portfolio</a></li>
        <li><a href="clients.html" class="page-scroll">Clients</a></li>
        <li><a href="careers.html" class="page-scroll">Careers</a></li>
        <li><a href="contact.html" class="page-scroll active">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!-- Header -->


<div class="wrapper">
    <div class="share facebook">
        <a href="https://www.facebook.com/Kashvi-Communications-263451883688745/" title="Kashvi Communications" alt="Kashvi Communications"><i class="fa fa-facebook" aria-hidden="true"></i>
    </a></div><a href="https://www.facebook.com/Kashvi-Communications-263451883688745/" title="Kashvi Communications" alt="Kashvi Communications">
    </a><div class="share linkedin"><a href="https://www.facebook.com/Kashvi-Communications-263451883688745/" title="Kashvi Communications" alt="Kashvi Communications">
        </a><a href="https://www.linkedin.com/company/kashvi-communications" title="Kashvi Communications" alt="Kashvi Communications"><i class="fa fa-linkedin" aria-hidden="true"></i>
    </a></div><a href="https://www.linkedin.com/company/kashvi-communications" title="Kashvi Communications" alt="Kashvi Communications">
     
    </a><div class="share twitter"><a href="https://www.linkedin.com/company/kashvi-communications" title="Kashvi Communications" alt="Kashvi Communications">
       </a><a href="https://twitter.com/kashvi09" title="Kashvi Communications" alt="Kashvi Communications"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
    </div>
    <div class="share whatsapp">
        <a href="https://api.whatsapp.com/send?phone=919892788255" title="Kashvi Communications" alt="Kashvi Communications"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
    </div>

</div>

<?php
$to = 'vinay.vscweb@gmail.com, sandeepnishad976943@gmail.com';
$subject = 'Required Job Details';
$from = 'info@vscweb.co.in';

// To send HTML mail, the Content-type header must be set

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$user_email ='info@vscweb.co.in';

// Create email headers

$headers .= 'From: '.$user_email."\r\n".
'Reply-To: '.$user_email."\r\n" .
'X-Mailer: PHP/' . phpversion();

// Compose a simple HTML email message

$message = '<html><body>';
$message .= '<h3 style="color:#f40;">Hi,</h3>';
$message .= '<p style="color:#080;font-size:18px;">Dear Sir/Madam,</p>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10" border="1">';
$message .= "<tr style='background: #eee;'><td><strong>Full Name:</strong> </td><td>" . $_POST['name'] . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Contact Number:</strong> </td><td>" .$_POST['contact'] . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Email:</strong> </td><td>" .$_POST['email'] . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Message:</strong> </td><td>" .$_POST['message'] . "</td></tr>";
$message .= '</body></html>';

// Sending email

if(mail($to, $subject, $message, $headers)){

echo "<div style='margin:auto;background:white;width:600px;color:#000;padding:100px 0;font-size:20px'>";
	print "<br /><br />Thanks & Regards :<br /><h2>Welcome to Our Website</h2>
	<strong>Thank you for submitting your request, Our Team will get in touch with you shortly!</strong>.";   
	echo "</div>";

    } else{

        echo 'Unable to send email. Please try again.';

    }

 ?>


<!-- Footer Section -->
<div id="footer"  style="border-top:1px solid #595959;">
  <div class="container text-center">
    <div class="col-md-8 col-md-offset-2">
      <div class="social">
        <ul>
          <li><a href="https://www.facebook.com/pages/Kashvi-Communications/263451883688745" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/kashvi09" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://www.linkedin.com/company/kashvi-communications" target="_blank"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="https://plus.google.com/114164112106310457251" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        </ul>
      </div>
      <p style="color:#000; ">Copyright © all rights reserved Agency World| 2016</p>
    </div>
  </div>
  </div>
 <div class="topbtn">
      <a href="#"><i class="fa fa-chevron-up"></i></a>
 </div>
 
 <script >
 $(document).ready(function(){
   $(window).scroll(function(){
    if ($(this).scrollTop() > 40){
      $('.topbtn').fadeIn();
        }else{
          $('.topbtn').fadeOut();
        }
      });
   $('.topbtn').click(function(){
        $('html, body').animate({scrollTop:0}, 800);
      });
    });
 </script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>

<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/owl.carousel.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<!-- <script type="text/javascript" src="js/contact_me.js"></script> --> 
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.vide.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
</body>
</html>