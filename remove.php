<?php
require 'connect.inc.php';
if(isset($_POST['submit'])){
	$v = $_POST['num'];
	mysqli_query($conn , "DELETE FROM `bb` WHERE `bb_id`='$v'");
	?>
	<script type="text/javascript">
	
	  if (confirm("Do you really want to Remove Camp.")) {
		  
	window.location.href="admin.php"
	}
	else {
    window.location.href="remove.php"
  }	</script>
  <?php
}
$qe="SELECT `bb_id`,`bb_name` FROM `bb` ORDER BY bb_id";
$re=mysqli_query($conn,$qe);
?>
<!DOCTYPE html>
<html>
<head>
	<title>REMOVE CAMP</title>
	<link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css'>
<script src="https://kit.fontawesome.com/1e489aecf4.js" crossorigin="anonymous"></script>
	<style type="text/css">
		.x{
			font-size: 30px;margin-left: 235px;  
		}
		body{
			background:#F5BF41;
		}
		.fa-arrow-left{
font-size:30px;
font-weight:600;
color:black;
margin-left:2%;
margin-top:2%;
		}
		.label1{
		font-size:29px;
		color:black;
		font-weight:500;
		margin-left:400px;
		margin-bottom:4%;
		}
	</style>
</head>
<body>
<a href="admin.php" style="font-size:25px;"><i class="fa fa-arrow-left">Back</i></a>
	<h1 align="center">Enter ID Number to Remove Donation Camp</h1>
	<pre>  

	</pre>
	<form action="" method="POST">
		<label class="x">ID NO: </label>
		<input style="font-size: 30px;width:280px;background: white;" type="text" name="num"><pre> </pre>
			<input style="margin-top:0px; font-size:28px;
			margin-left: 400px;height: 55px;width: 170px; background:#B2E437;" type="submit" name="submit" value="Remove">
	<pre></pre>
	<pre></pre>
	<label class="label1"><u>* Camps List*</u></label>
	<pre></pre>
	<select style="font-size: 25px;background:white;margin-left: 350px;width:250px;height:40px;" >
	<option>ID.No  CampName</option>
	<?php
		while($data=mysqli_fetch_assoc($re)){
		?>
		<option><?php echo $data['bb_id']; ?>      <?php echo $data['bb_name']; ?></option>
		<?php
		}
		?>
		</select>
	</form>
</body>
</html>