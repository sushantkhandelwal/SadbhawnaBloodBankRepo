<?php
require 'connect.inc.php';
session_start();

$x = mysqli_fetch_assoc(mysqli_query($conn,"SELECT CURRENT_DATE AS C"));
$date = $x['C'];

if(isset($_POST['submit'])){
	$n = $_POST['name'];
	$c = $_POST['city'];//echo $c;
	$nu = $_POST['num'];
	$e = $_POST['email'];
	$s = $_POST['sal'];
	$q1 = "INSERT INTO `manager`(`m_name`,`m_city`,`m_phno`, `m_email`,`m_salary`) VALUES ('$n','$c','$nu','$e','$s')";
mysqli_query($conn,$q1);
	?>
	<script type="text/javascript">
		window.location.href="admin.php";
	</script>
	<?php
}
$qu="SELECT `c_name` FROM `city` ORDER BY c_name";
$r=mysqli_query($conn,$qu);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
	<link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css'>
<script src="https://kit.fontawesome.com/1e489aecf4.js" crossorigin="anonymous"></script>
	<style type="text/css">
		.x{
			font-size: 40px;margin-left: 120px;  
		}
		label{
			font-size: 30px;
		}
	.fa-arrow-left{
font-size:30px;
font-weight:600;
color:black;
margin-left:2%;
margin-top:2%;
		}
		.label1{
		font-size:24px;
		color:black;
		font-weight:400;
		margin-left:282px;
		margin-bottom:3%;
		}
	</style>
</head>
<body style="background:#BDC3C7;">
<a href="admin.php" style="font-size:25px;"><i class="fa fa-arrow-left">Back</i></a>
	<ul class="ulcenter">
	<h1 style="font-size: 40px;" align="center">Enter Details to Add Employee</h1>
	<label class="label1">(All fields marked with * are mandatory.)</label><br></br>
	<form style="margin-left: 200px;text-align: left;" action="" method="POST">
		<label>* NAME:</label>
		<input style="font-size: 30px;background: #ECF0F1;margin-left: 105px;" type="text" name="name" required>
		<br><br>
		<label>* CITY(WORK):</label>
		<select style="font-size: 25px;background:#ECF0F1;margin-left: 15px;width: 371px;" name="city" placeholder="Select city" required>
		<?php
		while($data=mysqli_fetch_assoc($r)){
		?>
		<option><?php echo $data['c_name']; ?></option>
		<?php
		}
		?>
		</select>
		<br><br>
		<label>* PHONE NO:</label>
		<input style="font-size: 30px;background: #ECF0F1;margin-left: 46px;" type="tel" name="num" required>
		<br><br>
		<label>* E-MAIL:</label>
		<input style="font-size: 30px;background:#ECF0F1;margin-left: 90px;" type="text" name="email" required>
		<br><br>
		<label>* SALARY:</label>
		<input style="font-size: 30px;background:#ECF0F1;margin-left: 78px;" type="text" name="sal" required>
		<br><br>
		<input style="margin-top:30px; font-size:28px;margin-left:230px;height:50px;width: 140px; background:#1DA1F2;" type="submit" name="submit" value="Add">
	</form>
</ul>
</body>
</html>