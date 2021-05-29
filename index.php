<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SadbhawnaBloodBank</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/logo.jpg">
    <link rel="shortcut icon" type="image/x-icon" href="assets/home/assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/home/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/home/assets/css/home.css">
    <link rel="stylesheet" href="assets/home/assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/home/assets/css/fontawesome.min.css">
<style type="text/css">
.top-bar {
  width:100%;
  background-color:red;
  overflow: auto;
  height:auto;
}
.top-bar ul {
	
 float:right;
 margin-right:1%;
 margin-top:10px;
}
.logo{
width:185px;
height:70px;
}
.top-bar ul li a{
	padding:5px;
	text-decoration:none;
font-size:16px;
color:white;
font-weight:450;
	 transition: all 0.3s ease;
}

.top-bar ul li{
	margin-left:5px;;
	padding:10px;
	float:center;
	  line-height:24px;
	position:relative;
	display:inline-block;
}
.top-bar ul li:hover{
	background:lightgrey;
}
@media only screen and (max-width:1370px) {
	.label1{

	display:none;
	}
}
@media only screen and (max-width: 992px) {
	.label1{
		color:blue;
	display:inline;
	font-size:14px;
	}
}
.fa-facebook{
    color:#1877F2;
}
.fa-instagram{
    color:#E1306C;
}
.fa-twitter{
    color:#1DA1F2;
}
.fa-linkedin{
    color:#1666C5;
}
.fa-user{
color:white;
}
.fa-envelope{
color:white;
}
.fa-sign-in-alt{
color:white;
}
.fa-phone{
color:white;
}
</style>
</head>
<body>
    <!-- Start Top Nav -->
			 <div class="top-bar">
               
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:sadbhawnabloodbank@gmail.com">sadbhawnabloodbank@gmail.com </a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:9897529288">9897529288</a>
				<ul>
				<li><i class="fas fa-sign-in-alt"></i><a  href="signup1.php"><b>Signup(New user)</b></a></li>
				<li><i class="far fa-user"></i><a href="login1.php"><b>UserLogin</b></a></li>
				<li><i class="far fa-user"></i><a href="managerlogin.php"><b>ManagerLogin</b></a></li>	
				<li><i class="far fa-user"></i><a href="login.php"><b>AdminLogin</b></a></li>
							   
				</ul>
                
			
                   
            </div>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
                <img  class="logo" src="assets/home/assets/img/logo2.png" alt="">	
            </a>
			<label class="label1"><b>Click here for more options -></b></label>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php"><i class="fas fa-home"></i>Home</a></li>
						
						
						<li class="nav-item"><a class="nav-link" href="gallery.php"><i class="far fa-images">Gallery</i></a></li>
						<li class="nav-item"><a class="nav-link" href="about.php"><i class="far fa-address-book">About Us</i></a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php"><i class="fas fa-phone-alt">Contact US</i></a></li>
					</ul>
                </div>
				<div>
                 <a class="text-light" href="https://www.facebook.com/sadbhawnabloodbank.mathura" target="_blank" ><i class="fab fa-facebook fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/sadbhawnabloodbank201/?hl=en" target="_blank"><i class="fab fa-instagram  fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/Sadbhawnablood1" target="_blank"><i class="fab fa-twitter fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/in/sadbhawna-bloodbank-6b6812211/" target="_blank"><i class="fab fa-linkedin  fa-fw"></i></a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->
    <!-- Modal -->
  


    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="assets/home/assets/img/01.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Welcome </b></h1>
                                <h3 class="h2"><u><b>Sadbhawna Blood Bank</b></u></h3>
                                <p>
                                        <b>Every Blood Donor is a Life Saver!</b> <br></br>
                                  <b>  "आपके खून की कुछ बूंदे किसी के लिए खुशियों का सागर बन सकती हैं।" </b>Visit Our<a rel="sponsored" class="text-success" href="gallery.php" target="_blank">Gallery</a> 
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="assets/home/assets/img/2.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                
                                <h3 class="h2"><b>"वक्त का हर क्षण और रक्त का हर कण अमूल्य होता है !"</b></h3>
                                <p>
                                    <b>Be a Life Guard,Give blood to save life.</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    
    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Address Details</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            Sadbhawna Charitable Blood Bank, Chandralok Colony,Goverdhan Chauraha NH-2,Mathura
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:9897529288">+91 9897529288</a>
							
                        </li>
						<li>
                            <i class="fa fa-phone fa-fw"></i>
                            
							<a class="text-decoration-none" href="tel:0565-2421198">0565-2421198</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:sadbhawnabloodbank@gmail.com">sadbhawnabloodbank@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Provides</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" >Whole Blood</a></li>
                        <li><a class="text-decoration-none" >Packed Cell(PRBC)</a></li>
                        <li><a class="text-decoration-none" >FFP</a></li>
                        <li><a class="text-decoration-none" >Platelets(RDP)</a></li>
                        <li><a class="text-decoration-none" >SDP(Jumbo Pack)</a></li>
						<li>Note:- Blood Tested By ECI Technique.</li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Quick Links</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="index.php">Home</a></li>
                        <li><a class="text-decoration-none" href="gallery.php">Gallery</a></li>
                        <li><a class="text-decoration-none" href="about.php">About Us</a></li>
                        <li><a class="text-decoration-none" href="contact.php">Contact Us</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.facebook.com/sadbhawnabloodbank.mathura"><i class="fab fa-facebook fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/sadbhawnabloodbank201/?hl=en"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/Sadbhawnablood1"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/in/sadbhawna-bloodbank-6b6812211/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy;2021 Sadbhawna Blood Bank,Mathura(U.P)
                        </p>
						<p class="text-left text-light">
                          Designed by G-18,GLA University,Mathura.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/home/assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/home/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/home/assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/home/assets/js/templatemo.js"></script>
    <script src="assets/home/assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>