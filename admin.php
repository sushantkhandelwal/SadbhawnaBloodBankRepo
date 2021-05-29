<?php
session_start();error_reporting(0);
require 'connect.inc.php';
if(isset($_SESSION['sname'])){
$id=$_SESSION['id'];
$n=$_SESSION['sname'];
$query="SELECT * FROM `donate`,`bb` WHERE duser_id='$id' and bb.bb_id=donate.dbb_id";
$result=mysqli_query($conn,$query);
 
 if(isset($_POST['submit'])){
 	?>
 	<script type="text/javascript">window.location.href="add.php"</script>
 	<?php  
}

 if(isset($_POST['ssubmit'])){
 	?>
 	<script type="text/javascript">window.location.href="remove.php"</script>
 	<?php  
}

 if(isset($_POST['asubmit'])){
 	?>
 	<script type="text/javascript">window.location.href="addm.php"</script>
 	<?php  
}

 if(isset($_POST['rsubmit'])){
 	?>
 	<script type="text/javascript">window.location.href="removem.php"</script>
 	<?php  
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sadbhawna Blood Bank Management System| SadbhawnaBloodBank.com</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/grid-gallery/css/grid-gallery.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	<style type="text/css">
		.x{
			background-color: rgb(195,0,0);
			height: 75px;
			widtd: 100%;
            margin: 0;
		}
		.v{
			float:right;margin-top: 20px;margin-right: 25px;
		}
		a{
			text-decoration: none;
			color: black;
		}
		.td
		{
			text-decoration: none;
			font-weight: bold;
			text-align: center;font-size: 110%;
		}
		td{
			font-size: 23px;text-align: center;height: 70px;background: transparent;font-size: 110%;
		}
	.top-bar {
  width:100%;
  background-color:red;
  overflow: auto;
  height:auto;
}
.top-bar ul {
	
 float:right;
 margin-right:2%;
 margin-top:10px;
}

.top-bar ul li a{
	padding:10px;
	text-decoration:none;
font-size:20px;
color:white;
font-weight:450;
	 transition: all 0.3s ease;
}

.top-bar ul li{
	margin-left:10px;;
	padding:10px;
	float:center;
	  line-height:24px;
	position:relative;
	display:inline-block;
}
.fa-user{
color:white;
font-size:14px;
}

	</style>
</head>
<body>
<div class="top-bar">
               <ul>
				<li><i class="far fa-user"></i><a href="admin.php"><?php echo $n;?></a></li>	
				<li><i class="far fa-user"></i><a href="logout.php">Log Out</a></li>			   
				</ul>
				</div>
				<div class="top-bar">
				<ul>
<form action="" method="POST">
	<input style="margin-top:10px; font-size:28px; 
			margin-right: 15px;height: 70px;width: 300px; background: black;color:white;" type="submit" name="submit" value="Add Camp">
	</form> 	
<form action="" method="POST">
	<input style="margin-top:20px; font-size:28px; 
			margin-left: 0px;margin-right: 15px;height: 70px;width: 300px;color:white; background: black;" type="submit" name="asubmit" value="Add Employee">
	</form>
	 <form action="" method="POST">
	<input style="margin-top:10px; font-size:28px; margin-right: 15px;
			height: 70px;width: 300px; background: black;color:white;" type="submit" name="ssubmit" value="Remove Camp">
	</form>
 	
  	 	<form action="" method="POST">
	<input style="margin-top:10px; font-size:28px; margin-right: 15px;
			height: 70px;width:300px; background: black;color:white;" type="submit" name="rsubmit" value="Remove Employee">
	</form>	
	</ul>
</div>

	<div style="border: 1px solid black;background:url(Profile5.jpg);background-size: cover;height: 700px;margin-top: 20px;  font-weight: bold;font-size: 150%;overflow-y: scroll;width: 100%; ">
	<h1 style="font-size: 60px;text-align: center; color: red;">Camp Details</h1>
		<table style="margin-left: 50px; color:black;">
			<tr>
				<th>
				<td class="td">_ID.NO</td>
				<td class="td">__NAME__</td>
				<td class="td">__ADDRESS__</td>
				<td class="td">__Date__</td>
				<td class="td">__CITY__</td>
				<td class="td">_NUMBEROFDONORS_</td>
				</th>
			</tr>
			<?php 
				$q = "SELECT * FROM `bb` WHERE 1";
				$r = mysqli_query($conn,$q);
				while($d = mysqli_fetch_assoc($r)){
			?>
			<tr>
				<th  style="margin-left: 20px;">
				<td class="td"><?php echo $d[bb_id];?></td>
				<td class="td"><?php echo $d[bb_name];?></td>
				<td class="td"><?php echo $d[bb_address];?></td>
				<td class="td"><?php echo $d[b_date];?></td>
				<td class="td"><?php echo $d[bb_city];?></td>
				<td class="td"><?php echo $d[bb_noofdonors];?></td>
			</th>
			</tr>
			<?php 
				}
			?>
		</table>
	</div>
	<div style="border: 1px solid black;background:url(Profile5.jpg);background-size: cover;height: 700px;margin-top: 20px;  font-weight: bold;font-size: 180%;overflow-y: scroll;width: 100%;">
	<h1 style="font-size: 80px;text-align: center; color: red;">Employee Details</h1>
		<table style="margin-left: 80px; color:black;">
			<tr>
				<th>
				<td class="td">__ID NO</td>
				<td class="td">__NAME__</td>
				<td class="td">___EMAIL___</td>
				<td class="td">__PHONE__</td>
				<td class="td"></td>
				<td class="td">SALARY__</td>
				</th>
			</tr>
			<?php 
				$q = "SELECT * FROM `manager` WHERE 1";
				$r = mysqli_query($conn,$q);
				while($d = mysqli_fetch_assoc($r)){
			?>
			<tr>
				<th>
				<td class="td"><?php echo $d[m_id];?></td>
				<td class="td"><?php echo $d[m_name];?></td>
				<td class="td"><?php echo $d[m_email];?></td>
				<td class="td"><?php echo $d[m_phno];?></td>
				<td class="td"></td>
				<td class="td"><?php echo $d[m_salary];?></td>
			</th>
			</tr>
			<?php 
				}
			?>
		</table>
	</div>
</body>
</html>
<?php
}else{
	?>
  <script type="text/javascript">
  	alert("Login First");
  window.location.href="login.php"</script>
  <?php
}
  ?>