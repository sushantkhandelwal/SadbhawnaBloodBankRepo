<?php
session_start();
require 'connect.inc.php';
if(isset($_SESSION['sname'])){
$n=$_SESSION['sname'];
$id=$_SESSION['id'];

$query2 = "SELECT * FROM `donate` WHERE donate.duser_id='$id' ";
$result2=mysqli_query($conn,$query2);

$query1 = "SELECT * FROM `request` WHERE request.ouser_id='$id' ";
$result1=mysqli_query($conn,$query1);
if(isset($_POST['submit'])){
	$q = "DELETE FROM `donate` WHERE `duser_id`='$id' AND `d_date`>CURRENT_DATE" ;
	mysqli_query($conn,$q);
	?>
	<script type="text/javascript">
	window.location.href="profile.php"
	</script>
	<?php
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PROFILE</title>
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
			height: 85px;
			width: 100%;
            margin: 0;
		}
		.v{
			float:right;margin-top: 20px;margin-right: 10px;
		}
		.l{
			float:right;height: 600px;width: 400px;
		}
		a{
			text-decoration: none;
			color: black;
		}
		.p{
			height: 600px;width: 800px;
			background: url(RecipientBG.png) left top;background-repeat: no-repeat;
		}
		ul{
 			list-style-type: circle;
		}
		.ul a:hover
		{
			text-decoration: underline;
		}
		table
		{
			width: 100%;
		}
		tr:nth-child(even) {background-color: #f2f2f2;width: 100%;background: transparent;}
		tr:nth-child(odd) {background-color: lightblue;width: 100%;background:transparent;
		}
		.trx{overflow-y:scroll;}
		.th
		{
			text-decoration: underline;
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
				<li><i class="far fa-user"></i><a href="donate.php"><b>Donate Blood</b></a></li>	
				<li><i class="far fa-user"></i><a href="order.php"><b>Request Blood</b></a></li>	
				<li><i class="far fa-user"></i><a href="logout.php"><b>Log Out</b></a></li>	
				</ul>
</div>
<div class="container">
	 <div style="border: 1px solid black;background:url(Profile5.jpg);background-size: cover;height: 700px;margin-top: 10px;  font-weight: bold;font-size: 180%;overflow-y: scroll;width: 100%; ">
			<h1 style="font-size:60px;/*padding: 20px;*/ text-align:center;"><font color="red">Your Donation Details</font></h1>
			 <table style="margin-left: 25px; color:black;">
			 	<tr>
			 		<th >
						<td class="th">Blood Group</td>
						<td  class="th">Quantity</td>
						<td  class="th">Date</td>
			 			<td class="th">Your City</td> 
			 		</th>
			 	</tr>
			 	<?php
			 		$query3 = "SELECT * FROM `donate` WHERE donate.duser_id='$id'";	
			 	  	$result3 = mysqli_query($conn,$query3);
					while($d = mysqli_fetch_assoc($result3)){
				?>
			 	<tr class="trx">
			 		<th>
			 			<td><?php echo $d['d_bgroup'] ;?></td>
			 			<td><?php echo $d['d_quantity'];echo "ml"; ;?></td>
						<td><?php echo $d['d_date'] ;?></td>
			 			<td><?php echo $d['d_city'] ;?></td>			 			
			 		</th>
			 	</tr>
			 <?php }?>
			 </table>
			 <h1 style="/*padding: 20px;*/ text-align:center;font-size:60px;"><font color="blue"> DONATION CAMPS</h1>
			 			 <table style="margin-left: 15px; color:black;">
			 	<tr>
			 		<th>
						<td class="th">Camp Name</td>
						<td class="th">Address</td>
						<td class="th">Date</td>
						<td class="th">City</td>

			 		</th>
			 	</tr>
			 	<?php 
				$qu= "SELECT * FROM `bb` WHERE 1";
				$re = mysqli_query($conn,$qu);
				while($da = mysqli_fetch_assoc($re)){
			?>
			<tr class="trx">
				<th>
					<td><?php echo $da['bb_name'];?></td>
					<td><?php echo $da['bb_address'];?></td>
					<td><?php echo $da['b_date'];?></td>
					<td><?php echo $da['bb_city'];?></td>
				</th>
			</tr>
			 <?php } ?>
			 </table>
</div>
</div>

<div class="container">
<div style="border: 1px solid black;background:url(g8.jpg);background-size: cover;height: 700px;margin-top: 20px;  font-weight: bold;font-size: 180%;overflow-y: scroll;width: 100%;">
	<h1 style="font-size: 60px;text-align: center; color: red;">Your Request Details</h1>
			 <table  style="margin-left: 25px; color:black;">
			 	<tr>
			 		<th >
						<td class="th">Blood Group</td>
						<td  class="th">Quantity</td>
						<td  class="th">Date</td>
			 			<td class="th">Your City</td> 
			 		</th>
			 	</tr>
			 	<?php
			 		$query3 = "SELECT * FROM `request` WHERE request.ouser_id='$id'";	
			 	  	$result3 = mysqli_query($conn,$query3);
					while($d = mysqli_fetch_assoc($result3)){
				?>
			 	<tr class="trx">
			 		<th>
			 			<td><?php echo $d['ob_name'] ;?></td>
			 			<td><?php echo $d['o_quantity'];echo "ml"; ;?></td>
						<td><?php echo $d['o_date'] ;?></td>
			 			<td><?php echo $d['ob_city'] ;?></td>			 			
			 		</th>
			 	</tr>
			 <?php } ?>
			 </table>
	</div>
</div>
</body>
</html>
<?php
}else{
	?>
  <script type="text/javascript">
  	alert("Login First");
  window.location.href="login1.php"</script>
  <?php
}
  ?>
