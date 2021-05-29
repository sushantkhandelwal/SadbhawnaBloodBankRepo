<?php
require 'connect.inc.php';
if(isset($_POST['submit'])){
	$v = $_POST['num'];
	mysqli_query($conn , "DELETE FROM `donate` WHERE `d_id`='$v'");
	?>
	<script type="text/javascript">window.location.href="manager.php"</script>
	<?php
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>REMOVE DONATION</title>
	<link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css'>
<script src="https://kit.fontawesome.com/1e489aecf4.js" crossorigin="anonymous"></script>
	<style type="text/css">
		.x{
			font-size: 30px;margin-left:200px;  
		}
		body{
			background:teal;
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
<body>
<a href="manager.php"><i class="fa fa-arrow-left">Back</i></a>
	<h1 align="center">Enter Donation id to remove</h1>
	<pre>  

	</pre>
	<form action="" method="POST">
		<label class="x">ID NO: </label>
		<input style="font-size: 30px;background:lightgrey;" type="text" name="num" />
			<input style="margin-top:0px; font-size:28px;
			margin-left: 380px;margin-top:1%;height: 70px;width: 200px; background: pink;" type="submit" name="submit" value="Remove">
	</form>
</body>
</html>