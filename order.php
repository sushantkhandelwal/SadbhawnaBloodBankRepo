<?php 
require 'connect.inc.php';
session_start();
$i=$_SESSION['id'];
$x = mysqli_fetch_assoc(mysqli_query($conn,"SELECT CURRENT_DATE AS C"));
	$p = $x['C'];

if(isset($_POST['submit'])){
  $c=$_POST['city'];
  $bg=$_POST['bgrp'];
$dat= $_POST['date'];
  $qnt=$_POST['qunt'];
    $ph = $_POST['phno'];
    $que=" INSERT INTO `request` (`ouser_id`, `o_quantity`, `ob_name`,`ob_city`, `o_date`,`r_phn`) VALUES ('$i','$qnt','$bg','$c','$dat','$ph') ";
    mysqli_query($conn,$que);
    ?>
    <script type="text/javascript">window.location.href="profile.php"</script>
    <?php
}
$q="SELECT  `c_name` FROM `city` ORDER BY c_name";
$r=mysqli_query($conn,$q);

$d=mysqli_fetch_assoc($r);
?>

<!DOCTYPE html>
<html>
<head>
<title>Request Blood</title>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
<link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css'>
<script src="https://kit.fontawesome.com/1e489aecf4.js" crossorigin="anonymous"></script>
<style type="text/css">
body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: linear-gradient(to right,#19BDD4,#97F181)
}

.card {
    margin-bottom: 10px;
    border: none
}

.box {
    width:400px;
    padding: 20px;
    position: absolute;
    top:10%;
    left:29%;
    background:linear-gradient(rgba(34, 36, 36 , 0.90), rgba(34, 36, 36 , 0.80));
    text-align:left;
    transition: 0.25s;
    margin-top: 80px
	 border:solid  15px red;
	 border-radius:10px;
}

.box input{
    border: 0;
    background: none;
    margin-left: 10px;
    text-align:left;
	padding-left:10px;
    border: 2px solid #3498db;
    width:70%;
	height:30px;
    outline: none;
    color: white;
	font-size:16px;
    border-radius: 24px;
    transition: 0.25s
}
ul.tope li{
  padding-left: 2px;
    font-size:40px;
    display: inline;
	font-family:bold;
    text-align: center;
    text-transform: uppercase;
    padding-right: 5px;
	margin-top:1%;
	
	margin-bottom:2%;
    color:white;
}
.box h1 {
    color: white;
    text-transform: uppercase;
    font-weight: 500;
}

.box input:hover {
    width: 300px;
    border-color: #2ecc71;
}
.box label {
    font-weight: 500;
    font-size: 18px;
    padding-left: 10px;
    padding-bottom:10px;
	margin-top:10px;
    color: white;
    display: black
	
}
a.back{
    border: 0;
    background: none;
    margin-left:15px;
    text-align: center;
    border: 2px solid #2ecc71;
    outline: none;
	text-decoration:none;
	height:35px;
	width:100px;
	color:white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
	font-size:20px;
  padding-top: 8px ;
  padding-bottom:8px ;  
  padding-left: 37px ;
    padding-right: 37px ;
}
a.back:hover {
    background: #2ecc71
}
.box select {
 border: 0;
    background: none;
    display: block;
    margin-left:10px;
    text-align:left;
    border: 2px solid #3498db;
    width:70%;
	height:35px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s
}
.box select:hover{
width: 300px;
    border-color: #2ecc71;
}
.box option:hover{
    border-color:#3498db;
}
.box option{
    color:black;
	background-color:white;
	font-weight:600;
}
.box input[type="submit"] {
 border: 0;
    background: none;

    margin-left:10px;
    text-align: center;
    border: 2px solid #2ecc71;
    padding: 2px ;
    outline: none;
	font-size:20px;
	height:40px;
    color: white;
	width:150px;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer
}

.box input[type="submit"]:hover {
    background: #2ecc71
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
</style>
</head>
<body>
 <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
			
                <form  class="box" action="" method="POST">
                    <ul class="tope"><li>REQUEST BLOOD</li>
                   </ul>
<label>Location</label>
      <br><br>
      <select name="city" placeholder="Select city" >
<option>Select City</option>
<?php
while($d=mysqli_fetch_assoc($r)){
	?>
	<option><?php echo $d['c_name']; ?></option>
	<?php
}
?>
</select>
<br><br>
<label>Blood Group</label>
      <br><br>
        <select name="bgrp" placeholder="select BloodGroup" required>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select>
<br><br>
	<label>Date</label>
	<br><br>
	<input type="DATE" name="date" placeholder="select date" required>
      <br><br>
<label>Quantity</label>
      <br><br>
      <input type="text" name="qunt" placeholder="Enter quantity in ml" required>
      <br><br>
<label>Contact Number</label>
<br><br>	
<input type="type" name="phno" placeholder="Contact Number" required>
      <br><br>
				<a class="back" href="profile.php" >Back</a>
               <input type="submit" name="submit" value="Submit"><br><br>
  <br></br>
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
