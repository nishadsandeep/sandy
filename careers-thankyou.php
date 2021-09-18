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
        <li><a href="about-us.html" class="page-scroll ">About Us</a></li>
        <li><a href="services.html" class="page-scroll">Services</a></li>
        <li><a href="portfolio.html" class="page-scroll">Portfolio</a></li>
        <li><a href="clients.html" class="page-scroll">Clients</a></li>
        <li><a href="carrers.html" class="page-scroll active">Carrers</a></li>
        <li><a href="contact.html" class="page-scroll">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!-- Header -->

<!-- <header id="header" class="vide" data-vide-bg="video/video-bg">
  <div class="intro">
       <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1 style="color:#f58634; text-shadow:3px 0px 5px #000;margin-top:-10px;"><b style="font-size:40px;">Kashvi The Shining One,</b></h1><br>
             <p style="color:#fff;font-size:30px; text-shadow:3px 0px 5px #000;margin-bottom:250px;">we help your brand shine</p>
             </div>
        </div>
      </div>
    </div>
  </div>
</header> -->
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
$fname = $_POST['fname'];

$mime_boundary = "==Multipart_Boundary_x" . md5(mt_rand()) . "x";

// Now Store the file information to a variables for easier access
//print_r($_REQUEST);
//print_r($_FILES);
$name = $_REQUEST['fname'];
$id = rand(0, 999);
// exit;
$allowedExts = array(
    "pdf",
    "doc",
    "jpg",
    "jpeg",
    "png",
    "webp",
    "docx");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
$today = date("Y-m-d");

$new_file_name = $today . '_' . $name . '_' . $id . '.' . $extension;
// exit;
//$flag=false;
if (($_FILES["file"]["size"] < 200000000) && in_array($extension, $allowedExts)) {
    if ($_FILES["file"]["error"] > 0) {
        // echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    } else {
       if (file_exists("cv/" . $_FILES["file"]["name"])) {
            echo $_FILES["file"]["name"] . " already exists. ";
        } else {
            //$flag=true;
            move_uploaded_file($_FILES["file"]["tmp_name"], "cv/" . $new_file_name);
            // echo "Stored in: " . "cv/" . $new_file_name;
        }
    }
} else {
    // echo "Invalid file";
}


$filename = $new_file_name;
//$to = 'datafireflysolutions@gmail.com';
$to = 'vinay.vscweb@gmail.com';
$subject = 'Employment Form';
$from = 'info@vscweb.co.in';

$message = 'info@vscweb.co.in';

//The Attachment
$cr = "\n";
// $data = "";
$fp = @fopen('cv/' . $filename, 'r');
$data = @file_get_contents('cv/' . $filename);
@fclose($fp);
//print_r($data);

$attachments[] = array(
    'data' => $data,
    'name' => $filename,
    'type' => 'Application/pdf');

$semi_rand = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";


//Add the headers for a file attachment
$headers = "MIME-Version: 1.0\n" . "From: website Info <info@vscweb.co.in>\n" .
    "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

//Add a multipart boundary above the plain message
$message .= '<h3 style="color:#f40;">Hi,</h3>';
$message .= '<p style="color:#080;font-size:18px;">Dear Sir/Madam,</p>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10" border="1">';
$message .= "<tr style='background: #eee;'><td><strong>First Name:</strong> </td><td>" . $_POST['fname'] . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Contact Number:</strong> </td><td>" . $_POST['contact'] . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Profile:</strong> </td><td>" .$_POST['profile'] . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Email Id:</strong> </td><td>" .$_POST['email'] . "</td></tr>";
$message .= "<tr style='background: #eee;'><td><strong>Experiance:</strong> </td><td>" . $_POST['experiance'] . "</td></tr>";

$message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" .
    "Content-Type: text/html; charset=\"iso-8859-1\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" . $text . $message . $html . "\n\n";

//Add sttachments
foreach ($attachments as $attachment) {
    $data = chunk_split(base64_encode($attachment['data']));
    $name = $attachment['name'];
    $type = $attachment['type'];

    $message .= "--{$mime_boundary}\n" . "Content-Type: {$type};\n" . " name=\"{$name}\"\n" .
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
}

$message .= "--{$mime_boundary}--\n";

$result = mail($to, $subject, $message, $headers);


if ($result) {
  
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
<!-- <script type="text/javascript" src="js/contact_me.js"></script>  -->
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.vide.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

  <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>


