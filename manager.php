<?php
session_start();error_reporting(0);
require 'connect.inc.php';
if(isset($_SESSION['sname'])){
$id=$_SESSION['id'];
$n=$_SESSION['sname'];
$query = "SELECT * FROM `donate` WHERE donate.o_id='$id' ";
$result=mysqli_query($conn,$query);
$query2 = "SELECT * FROM `request` WHERE request.ouser_id='$id' ";
$result2=mysqli_query($conn,$query2);
if(isset($_POST['rsubmit'])){
	?>
	<script type="text/javascript">
	window.location.href="removed.php"
	</script>
	<?php 
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>MANAGER PROFILE</title>
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
			overflow:auto;
		}
		tr:nth-child(even) {background-color: #f2f2f2;width: 100%;background: transparent;}
		tr:nth-child(odd) {background-color: lightblue;width: 100%;background:transparent;}
		.trx{overflow-y:scroll;}
		.th
		{
			text-decoration: underline;
			font-weight: bold;
			text-align: center;font-size: 110%;
		}
		td{
			font-size: 20px;text-align: center;height: 60px;background: transparent;font-size: 110%;
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
}

</style>
</head>
<body>
<div class="top-bar">
               <ul>
				<li><i class="far fa-user"></i><a href="manager.php"><?php echo $n;?></a></li>	
				<li><i class="far fa-user"></i><a href="logout.php">Log Out</a></li>			   
				</ul>
</div>

<div style="border: 1px solid black;background:url(Profile5.jpg);background-size: cover;height: 700px;margin-top: 10px;  font-weight: bold;font-size: 160%;overflow-y: scroll;width: 100%; ">
	<h1 style="font-size: 70px;text-align: center; color: red;">Donation Details</h1>
		<table style="margin-left: 30px;font-size: 30px;color:black;">
			 	<tr>
			 		<th >
			 			<td class="th">Donor city</td>
						<td  class="th">Contact</td>
			 			<td  class="th">Donation Date</td>
						<td  class="th">Blood Group</td>
			 			<td  class="th">Quantity</td>
			 		</th>
			 	</tr>
			 	<?php
			 			$result7=mysqli_query($conn,"SELECT CURRENT_DATE AS C");
			 			$data7=mysqli_fetch_assoc($result7);
						$q = "SELECT * FROM `donate` WHERE 1";
						$r = mysqli_query($conn,$q);
			 			while($data=mysqli_fetch_assoc($r)){
			 			if($data['d_date']<$data7['C']){
			 	  ?>
			 	<tr class="trx">
			 		<th>
			 			<td><?php echo $data['d_city'] ;?></td>
			 			<td><?php echo $data['d_phn'] ;?></td>
			 			<td><?php echo $data['d_date'] ;?></td>
						<td><?php echo $data['d_bgroup'] ;?></td>
			 			<td><?php echo $data['d_quantity'];echo "ml";?></td>			 			
			 		</th>
			 	</tr>
			 <?php }} ?>
			 </table>
			 <h1 style="font-size: 70px;text-align: center;color: blue;">Today's Donations</h1>
			 			 <table style="margin-left: 30px;font-size: 20px;color:black;">
			 	<tr>
			 		<th >
						<td class="th">Donation id</td>
			 			<td class="th">Donor city</td>
						<td  class="th">Contact</td>
			 			<td  class="th">Donation Date</td>
						<td  class="th">Blood Group</td>
			 			<td  class="th">Quantity</td>
			 		</th>
			 	</tr>
			 	<?php
			 		$result7=mysqli_query($conn,"SELECT CURRENT_DATE AS C");
			 		$data7=mysqli_fetch_assoc($result7);
					$q = "SELECT * FROM `donate` WHERE 1";
					$r = mysqli_query($conn,$q);
			 		while($data=mysqli_fetch_assoc($r)){
			 			if($data['d_date']>=$data7['C']){
			 	  ?>
			 	<tr class="trx">
			 		<th>
			 			<td><?php echo $data['d_id'] ;?></td>
						<td><?php echo $data['d_city'] ;?></td>
			 			<td><?php echo $data['d_phn'] ;?></td>
			 			<td><?php echo $data['d_date'] ;?></td>
						<td><?php echo $data['d_bgroup'] ;?></td>
			 			<td><?php echo $data['d_quantity'];echo "ml";?></td>>
			 			
			 		</th>
			 	</tr>
			 <?php } }?>
			 </table>
			 <form action="" method="POST">	
<input style="margin-top:50px; text-align: center;
			margin-left: 550px;height: 50px;width: 160px; background: rgb(195,0,0);" type="submit" name="rsubmit" value="REMOVE 1 DONATION">
</form> 		</div>
				 <div style="border: 1px solid black;background:url(Profile5.jpg);background-size: cover;height: 700px;margin-top: 20px;  font-weight: bold;font-size: 140%;overflow-y: scroll;width: 100%;">
	<h1 style="font-size: 70px;text-align: center; color: red;">Request Details</h1>
		<table style="margin-left: 30px;font-size: 30px; color:black;">
			 	<tr>
			 		<th >
			 			<td class="th">City</td>
						<td  class="th">Contact</td>
			 			<td  class="th">Request Date</td>
						<td  class="th">Blood Group</td>
			 			<td  class="th">Quantity</td>
			 		</th>
			 	</tr>
			 	<?php
			 			$result7=mysqli_query($conn,"SELECT CURRENT_DATE AS C");
			 			$data7=mysqli_fetch_assoc($result7);
						$q = "SELECT * FROM `request` WHERE 1";
						$r = mysqli_query($conn,$q);
			 			while($data=mysqli_fetch_assoc($r)){
			 			if($data['o_date']<$data7['C']){
			 	  ?>
			 	<tr class="trx">
			 		<th>
			 			<td><?php echo $data['ob_city'];?></td>
			 			<td><?php echo $data['r_phn'];?></td>
			 			<td><?php echo $data['o_date'] ;?></td>
						<td><?php echo $data['ob_name'] ;?></td>
			 			<td><?php echo $data['o_quantity'];echo "ml";?></td>
			 		</th>
			 	</tr>
			 <?php }} ?>
			 </table>
			 <h1 style="font-size: 70px;text-align: center;color: blue;">Today's Requests</h1>
			 			 <table style="margin-left: 50px;font-size: 30px;color:black;">
			 	<tr>
			 		<th >
						<td class="th">City</td>
						<td  class="th">Contact</td>
			 			<td  class="th">Request Date</td>
						<td  class="th">Blood Group</td>
			 			<td  class="th">Quantity</td>

			 		</th>
			 	</tr>
			 	<?php
			 		$result7=mysqli_query($conn,"SELECT CURRENT_DATE AS C");
			 			$data7=mysqli_fetch_assoc($result7);
			 			$q= "SELECT * FROM `request` WHERE 1";
						$r= mysqli_query($conn,$q);
			 			while($data=mysqli_fetch_assoc($r)){
			 			if($data['o_date']>=$data7['C']){
			 	  ?>
			 	<tr class="trx">
			 		<th>
						<td><?php echo $data['ob_city'];?></td>
			 			<td><?php echo $data['r_phn'];?></td>
			 			<td><?php echo $data['o_date'] ;?></td>
						<td><?php echo $data['ob_name'] ;?></td>
			 			<td><?php echo $data['o_quantity'];echo "ml";?></td>
			 			
			 		</th>
			 	</tr>
			 <?php } }?>
			 </table>
			</div>
</body>
</html>
<?php
}else{
	?>
  <script type="text/javascript">
  	alert("Login First");
  window.location.href="managerlogin.php"</script>
  <?php
}
  ?>