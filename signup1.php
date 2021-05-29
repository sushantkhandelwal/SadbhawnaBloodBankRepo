<?php
session_start();
require 'connect.inc.php';
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    if(1 == mysqli_num_rows(mysqli_query($conn,"SELECT 1 FROM `user` WHERE `user_username`='$username'"))){
          ?>
            <script type="text/javascript">
                alert("USERNAME ALREADY EXISTS");
            window.location.href="login1.php"</script>
    <?php 

    }
    $fathername = $_POST['fathername'];
    $name = $_POST['name'];
    $age = $_POST['Age'];
    $gender = $_POST['gender'];
    $weight = $_POST['weight'];
    $emailId = $_POST['email'];
    $ph = $_POST['phno'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $bg = $_POST['BloodGroup'];
    $password = $_POST['password'];
$_SESSION['sname']=$name;
// $_SESSION['id']=$user_id;
$query = "INSERT INTO `user`( `user_name`, `user_fname`, `user_username`, `user_password`, `user_age`, `user_gender`, `user_weight`, `user_bloodgroup`, `user_city`, `user_address`, `user_state`, `user_phoneNumber`, `user_emailId`) VALUES ('$name','$fathername','$username','$password','$age','$gender','$weight','$bg','$city','$address','$state','$ph','$emailId')";
mysqli_query($conn,$query);
  ?>
  <script type="text/javascript">window.location.href="login1.php"</script>
  <?php 
$query1 = "SELECT `user_id` FROM `user` WHERE `user_username`= `$username`";
$result=mysqli_fetch_assoc(mysqli_query($conn,$query1));
$_SESSION['id']=$result['user_id'];
}
$q="SELECT  `c_name` FROM `city` ORDER BY c_name";
$r=mysqli_query($conn,$q);

$d=mysqli_fetch_assoc($r);
?>
<!DOCTYPE html>
<html>
<head>
<title>SIGNUP</title>
<meta name="viewport"
content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css	">
<style type="text/css">
html,
body * {
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif
}

body {
    background:linear-gradient(rgba(246, 247, 249, 0.8), rgba(246, 247, 249, 0.8)), url(signpic1.jpg) no-repeat center center fixed;
    background-size: cover;
}

.container {
    width: 100%;
    padding-top: 60px;
    padding-bottom: 100px
}

.frame {
    height: auto;
    width: 350px;
    background:linear-gradient(rgba(35, 43, 85, 0.60), rgba(35, 43, 85, 0.80)), url(signpic1.jpg) no-repeat center center;
    background-size: cover;
    margin-left: auto;
    margin-right: auto;
    border-top: solid 5px rgba(13, 14, 14);
    border-radius: 8px;
    box-shadow: 2px 2px 7px rgba(0, 0, 0, 0.2);
   
    transition: all .5s ease
}
ul {
   padding-left: 10px;
    font-size:50px;
    display: inline;
	font-family:bold;
    text-align: center;
    text-transform: uppercase;
    padding-right: 5px;
	margin-top:5%;
	margin-left:24%;
    color:white;
}
ul li{
   padding-left: 10px;
    font-size:20px;
    display: inline;
	font-family:bold;
    text-align: center;
    text-transform: uppercase;
    padding-right: 5px;
	margin-top:10%;
	margin-left:25px;
    color:white;
}
.form-signup {
   width: 350px;
    height: 1550px;
    font-size: 20px;
    font-weight: 350;
    padding-left: 37px;
    padding-right: 37px;
    padding-top: 35px;
    transition: opacity .5s ease, transform .5s ease
}
.form-signup input {
    color: black;
	font-weight:50px;
    font-size: 16px
	border: solid 1px rgba(13, 14, 14);
}
.form-styling {
   width: 100%;
    height:38px;
    padding-left: 15px;
    border: none;
    border-radius:10px;
    margin-bottom: 20px;
    background:white;
}

label {
    font-weight: 600;
    text-transform: uppercase;
    font-size: 17px;
    padding-left: 15px;
    padding-bottom: 10px;
    color: white;
    display: block;
}
.btn-signup{
 
    font-weight: 700;
    text-transform: uppercase;
    font-size: 20px;
    text-align: center;
    text-color:white;
    padding-top: 8px;
	  padding-bottom: 8px;
    width:120px;
    height: 40px;
    border: none;
    border-radius: 20px;
    margin-top: 16px;
    background-color:#3EF4DA;
}

.btn-animate {

    font-weight: 700;
    text-transform: uppercase;
    font-size: 18px;
    text-align: center;
    color: black;
	 padding-bottom: 8px;
    padding-top: 8px;
    width:120px;
    height: 39px;
    border: none;
    border-radius: 20px;
    margin-top: 23px;
    background-color: #3EF4DA;
    left: 0px;
    top: 0px;
    transition: all .3s ease, top .3 ease .3s, height .3s ease .3s, background-color .3s ease .3s
}
.form-signup select {
    border:none;
    border-bottom:1.5px solid #fff;
    background:white;
    outline: none;
    height: 35px;
    color: black;
    font-size:18px;
}
.form-signup option{
    color: black;
}
.form-signup textarea{
 color: black;
	font-weight:50px;
    font-size: 20px;
	height:45px;
	width:100%;
}
.form-signup input:focus,
textarea:focus {
    background-color:#D7D7DA ;
    border: none;
    padding-right: 40px;
 
}
.form-signup input[type="submit"]:hover{
	background-color:#1BBA38;
	cursor:pointer;
	transition:background-color .5s;
	
}
a.back{
    border: 0;
    background:#3EF4DA;
    margin-left:15px;
    text-align: center;
   font-weight:700;
    outline: none;
	text-decoration:none;
	height:35px;
	width:100px;
	color:black;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
	font-size:20px;
  padding-top: 7px ;
  padding-bottom:7px ;  
  padding-left: 33px ;
    padding-right: 33px ;
}
a.back:hover {
    background: #1BBA38
}
</style>

</head>

<body>

   <div class="container">
    <div class="frame">
        <ul>Sign up</ul>
<ul><li>(New User)</li></ul>		
	<form   class="form-signup" action="" method="post" name="form"> 
	<label for="fullname">Full Name</label>
	<input class="form-styling" type="text" name="name" placeholder="Name" required /> 
	<label>userName</label>
	<input class="form-styling" type="text" name="username" placeholder="eg:abc@123" required /> 
	<label for="password">Create Password</label>
	<input class="form-styling" type="password" name="password" placeholder="Create password" required /> 
	<label for="confirmpassword">Confirm password</label>
	<input class="form-styling" type="password" name="confirmpassword" placeholder="Confirm password" required /> 
	<label>Father Name</label>
	<input class="form-styling" type="text" name="fathername" placeholder="Enter Father's Name" required /> 
	<label>GENDER</label>
	<select class="form-styling" type="text" name="gender" placeholder="select gender" required > 
	<option>Select Gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Others">Other</option>
</select>
<label>AGE</label>
	<input class="form-styling" type="text" name="Age" placeholder="Enter Your Age" min="18" required /> 
	<label>Blood Group</label>
	<select class="form-styling" type="text" name="BloodGroup" placeholder="select bloodgroup"> 
	<option value="A+">A+</option>
	<option value="A-">A-</option>
	<option value="B+">B+</option>
	<option value="B-">B-</option>
	<option value="AB+">AB+</option>
	<option value="AB-">AB-</option>
	<option value="O+">O+</option>
	<option value="O-">O-</option>
	</select>
	<label>Body Weight</label>
	<input class="form-styling" type="text" name="weight" placeholder="Enter Your Weight" required />
	<label for="email">Email</label>
	<input class="form-styling" type="email" name="email" placeholder="Enter Your email" />
	<label>State</label> 
	<select class="form-styling" type="text" name="state" placeholder="Select state" >
	<option value="UttarPradesh">UttarPradesh</option>	
	</select>
	<label>City</label>
	<select  class="form-styling" type="text" name="city">
<?php
while($d=mysqli_fetch_assoc($r)){
    ?>
    <option><?php echo $d['c_name']; ?></option>
    <?php
}
?>
</select>
<label>Address</label>
      <textarea class="form-styling" name="address"></textarea>
      <label>Contact Number</label>
      <input class="form-styling" type="text" name="phno" placeholder="Enter Phone Number" required/>
<a class="back" href="index.php" >Back</a>
	<input  class="btn-animate" class="btn-signup" type="submit" name="submit" value="Sign up"  />
	</form>
		</div>
		</div>
</body>

</html>
