<?php
session_start();
require 'connect.inc.php';
if(isset($_POST['submit'])){
  $username = $_POST['username'];
    $password = $_POST['password'];
$query = "SELECT * FROM `user` WHERE user_username='$username' and user_password='$password'";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
if($count==1){
  $data=mysqli_fetch_assoc($result);
  $_SESSION['sname']=$data['user_name'];
$_SESSION['id']=$data['user_id'];
if($data['user_id']==1){
  ?>
  <script type="text/javascript">window.location.href="manager.php"</script>
  <?php 
}else{
	 ?>
    <script type="text/javascript">window.location.href="managerlogin.php"</script>
    <?php
}
}
else{
   ?>
    <script type="text/javascript">alert("You have Entered Invalid Details.");
     window.location.href="managerlogin.php"</script>
    <?php
}
}
?>
<!DOCTYPE html>
<html>

<head>

<title>Manager</title>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
<link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css'>
<script src="https://kit.fontawesome.com/1e489aecf4.js" crossorigin="anonymous"></script>
<style type="text/css">
body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background:linear-gradient(rgba(35, 43, 85, 0.45), rgba(35, 43, 85, 0.45)), url(managerpage1.jpg) no-repeat center center;
	height:auto;
}

.card {
    margin-bottom: 20px;
    border: none
}

.box {
    width: 450px;
    padding: 20px;
	height:430px;
    position: absolute;
    top: 5%;
    left: 30%;
    background:none;
    text-align: center;
    transition: 0.25s;
    margin-top: 80px
}

.box input {
    border: 0;
    background:white;
    display: block;
	
    margin: 20px auto;
    text-align: center;
    border: 3px solid #460B99;
    padding: 10px 10px;
    width: 280px;
	font-family:bold;
    outline: none;
	font-size:18px;
	font-weight:500;
    color: black;
    border-radius: 24px;
    transition: 0.25s
}

.box h1 {
    color: white;
    text-transform: uppercase;
    font-weight: 500
}

.box input[type="submit"] {
    border: 0;
    background:#19CEE4;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 3px solid  #460B99;
    padding: 14px 40px;
    outline: none;
    color: black;
    border-radius: 24px;
    transition: 0.25s;
	font-size:20px;
	font-weight:300;
    cursor: pointers
}

.box input[type="submit"]:hover {
    background: #2ecc71
}

ul.tope li{
    font-size:50px;
    display: inline;
	font-family:bold;
    text-align:left;
    font-weight:400;
    
	margin-top:2%;
	
	margin-bottom:2%;
    color:black;
}
.box input:hover {
    width: 300px;
    border-color: #097B0B;
}
ul.social-network {
    list-style: none;
    display: inline;
    margin-left: 0 !important;
    padding: 0
}

ul.social-network li {
    display: inline;
    margin: 0 5px
}

.social-network a.icoFacebook:hover {
    background-color: #3B5998
}

.social-network a.icoTwitter:hover {
    background-color: #33ccff
}

.social-network a.icoInstagram:hover {
    background-color: #E1306C
}
.social-network a.icoLinkedin:hover {
    background-color:#1666C5;
}

.social-network a.icoFacebook:hover i,
.social-network a.icoTwitter:hover i,
.social-network a.icoInstagram:hover i,
.social-network a.icoLinkedin:hover i {
    color: #fff
}

a.socialIcon:hover,
.socialHoverClass {
    color: #44BCDD
}

.social-circle li a {
    display: inline-block;
    position: relative;
    margin-left:20px;
    border-radius: 50%;
    text-align: center;
    width: 50px;
    height: 50px;
    font-size: 20px
}

.social-circle li i {
    margin: 0;
    line-height: 50px;
    text-align: center
}

.social-circle li a:hover i,
.triggeredHover {
    transform: rotate(360deg);
    transition: all 0.2s
}

.social-circle i {
    color: #fff;
    transition: all 0.8s;
    transition: all 0.8s
}
.fa-arrow-left{
font-size:25px;
font-weight:600;
color:white;
margin-left:2%;
margin-top:2%;
}
</style>
</head>
<div class="container">
<a href="index.php"><i class="fa fa-arrow-left">Back</i></a>
    <div class="row">
	
        <div class="col-md-6">
            <div class="card">
			
                <form  class="box" action="" method="POST">
				
                    <ul class="tope"><li>Manager Login</li>
                   </ul>
				   <p class="text-muted"> Please enter your username and password!</p> <input type="text" name="username" placeholder="Username"> <input type="password" name="password" placeholder="Password"> <input type="submit" name="submit" value="Login" >
                    <div class="col-md-12">
					<ul class="social-network social-circle">
                            <li><a href="https://www.facebook.com/sadbhawnabloodbank.mathura" class="icoFacebook" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
							    <li><a href="https://www.instagram.com/sadbhawnabloodbank201/?hl=en" class="icoInstagram" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://twitter.com/Sadbhawnablood1" class="icoTwitter" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/sadbhawna-bloodbank-6b6812211/" class="icoLinkedin" target="_blank" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
      
</body>

</html>
