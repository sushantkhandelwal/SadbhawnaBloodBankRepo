<?php
require 'connect.inc.php';

if(isset($_POST['submit'])){
	$n = $_POST['name'];
	$a = $_POST['address'];
	$e = $_POST['date'];
	$c = $_POST['city'];
	$d = $_POST['donors'];
$q = "INSERT INTO `bb`( `bb_name`, `bb_address`,`b_date`, `bb_city`,`bb_noofdonors`) VALUES ('$n','$a','$e','$c','$d')";
mysqli_query($conn,$q);//echo "tdgh";
?>
<script type="text/javascript">window.location.href="admin.php"</script>
<?php
}
$qu="SELECT `c_name` FROM `city` ORDER BY c_name";
$r=mysqli_query($conn,$qu);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Camp</title>
		<link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css'>
<script src="https://kit.fontawesome.com/1e489aecf4.js" crossorigin="anonymous"></script>
	<style type="text/css">
		.x{
			font-size: 40px;margin-left:120px;
		}
		label{
			font-size: 30px;
		}
		body{
			background:#F4D03F;
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
<body >
<a href="admin.php" style="font-size:25px;"><i class="fa fa-arrow-left">Back</i></a>
<ul class="ulcenter">
	<h1 style="font-size: 40px;" align="center">Enter Details to Add Donation Camp</h1>
	<label class="label1">(All fields marked with * are mandatory.)</label><br></br>
	<form style="margin-left: 200px;text-align: left;" action="" method="POST">
		<label>* NAME:</label>
		<input style="font-size: 30px;background: #CACFD2;margin-left: 60px;" type="text" name="name" required>
		<br><br>
		<label>* ADDRESS:</label>
		<input style="font-size: 30px;background:#CACFD2;margin-left: 12px;" type="text" name="address" required>
		<br><br>
		<label>* CAMP DATE:</label>
		<input style="font-size: 30px;background:#CACFD2;margin-left: 12px;" type="DATE" name="date" required>
      		<br><br>
		<label>* CITY:</label>
		<select style="font-size: 25px;background:#CACFD2;margin-left: 15px;width:380px;height:40px;" name="city" placeholder="Select city" required>
		<?php
		while($data=mysqli_fetch_assoc($r)){
		?>
		<option><?php echo $data['c_name']; ?></option>
		<?php
		}
		?>
		</select>
		<br><br>
		<label>Expected Donors:</label>
		<input style="font-size: 30px;background:#CACFD2;margin-left: 20px;" type="text" name="donors" required>
		<br><br>
		<input style="margin-top:30px; font-size:28px;margin-left: 190px;height: 50px;width: 140px;; background:#8cff66;" type="submit" name="submit" value="Add">
	</form>
</ul>
</body>
</html>