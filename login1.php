<?php
session_start();
require 'connect.inc.php';
if(isset($_POST['submit'])){
    $username = $_POST['username'];

    $password = $_POST['password'];
// $_SESSION['sname']=$name;
// $_SESSION['id']=$user_id;
$query = "SELECT * FROM `user` WHERE user_username='$username' and user_password='$password'";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
if($count==1){
  $data=mysqli_fetch_assoc($result);
  $_SESSION['sname']=$data['user_name'];
$_SESSION['id']=$data['user_id'];
if(0){
	?>
	<script type="text/javascript">window.location.href="admin.php"</script>
	<?php 
}else{
  ?>
  <script type="text/javascript">window.location.href="profile.php"</script>
  <?php  
}
}
else{
	?>
	 <script type="text/javascript">
  	alert("Enter Correct Details");
  window.location.href="login1.php"</script>
	<?php 

}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport"
content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css	">
<link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css'>
<script src="https://kit.fontawesome.com/1e489aecf4.js" crossorigin="anonymous"></script>
<style type="text/css">
html,
body * {
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}

body {
    background:linear-gradient(to right, #b92b27, #1565c0);
    background-size: cover;
}

.container {
    width: 100%;
    padding-top: 80px;
    padding-bottom: 100px
}

.frame {
    height: 420px;
    width: 320px;
    background: linear-gradient(rgba(197, 201, 201 ), rgba(197, 201, 201 ,.80)), url(SignUpBG.jpg) no-repeat center center;
    background-size: cover;
    margin-left: auto;
    margin-right: auto;
    border-top: solid 5px rgba(13, 14, 14);

    border-radius: 10px;
    box-shadow: 2px 2px 7px rgba(0, 0, 0, 0.2);
   
    transition: all .5s ease
}
li {
    padding-left: 10px;
    font-size:50px;
    display: inline;
	font-family:bold;
    text-align: center;
    text-transform: uppercase;
    padding-right: 10px;
	margin-top:5%;
	margin-left:18%;
    color:black;
}
.form-signin {
    width:310px;
    height: 360px;
    font-size: 20px;
    font-weight: 350;
    padding-left: 37px;
    padding-right: 37px;
    padding-top:10px;
    transition: opacity .5s ease, transform .5s ease
}
.form-signin input[type="text"] {
    color: black;0
	font-weight:50px;
    font-size: 16px;
	 border: solid 1px rgba(13, 14, 14);
}
.form-signin input[type="password"] {
    color: black;
	font-weight:50px;
    font-size: 16px;
	 border: solid 1px rgba(13, 14, 14);
}
.form-signin input[type="submit"] {
    color: black;
	font-weight:60px;
    font-size: 21px;
	
	
}
.form-signin input[type="submit"]:hover{
	background-color:#1BBA38;
	cursor:pointer;
	transition:background-color .5s;
	
}
.form-styling {
    width: 100%;
    height:38px;
    padding-left: 15px;
    border: none;
    border-radius:10px;
    margin-bottom: 10px;
    background:white;
}
label {
    font-weight: 500;
    text-transform: uppercase;
    font-size: 15px;
    padding-left: 15px;
    padding-bottom: 10px;
    color: black;
    display: black
	
}
.btn-signin {
	background-color:#3EF4DA;
    float: left;
    padding-top: 8px;
    width: 100%;
    height: 37px;
    border: none;
    border-radius: 20px;
    margin-top:-8px
}

.btn-animate {
    float: left;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 18px;
    text-align: center;
    color: black;
    padding-top: 8px;
    width: 100%;
    height: 35px;
    border: none;
    border-radius: 20px;
    margin-top: 23px;
    background-color:#3EF4DA;
    left: 0px;
    top: 0px;
    transition: all .5s ease, top .5s ease .5s, height .5s ease .5s, background-color .5s ease .75s

.form-signin input:focus,
textarea:focus{
    background-color:grey;
    border: none;
    padding-right: 40px;
    transition: background .5s ease
}
.fa-arrow-left{
font-size:40px;
font-weight:600;
color:white;

}
</style>
</head>
<body>
<a href="index.php" style="color:white; font-size:25px;margin-left:2%;margin-top:3%;"><i class="fa fa-arrow-left"> Back</i></a>
   <div class="container">
   	
    <div class="frame">

	<ul >
                <li>Sign in</li>
                
            </ul>
	<form class="form-signin" action="" method="post" name="form"> 
 <label>USERNAME</label>
			<input  class="form-styling" type="text" name="username" placeholder="Enter Username" required />
			<label>PASSWORD</label>
			<input class="form-styling" type="password" name="password" placeholder="Enter Password" required />
            <input  class="btn-animate" class="btn-signin" type="submit" name="submit" value="Sign in"  />
			<a href="signup1.php" target="_blank" style="font-size: 20px;font-color:#1BBA38; margin-top:3%;">Don't have an account?</a>
			</form>	
	</div>
	</div>
	</body>
	</html>