<?php
require 'connect.inc.php';
if(isset($_POST['submit'])){
	$v = $_POST['num'];
	mysqli_query($conn , "DELETE FROM `manager` WHERE `m_id`='$v'");
	?>
	<script type="text/javascript">
	
	  if (confirm("Do you really want to Remove Employee.")) {
		  
	window.location.href="admin.php"
	}
	else {
    window.location.href="removem.php"
  }	</script>
	<?php
}

		$qu="SELECT `m_id`,`m_name` FROM `manager` ORDER BY m_id";
$r=mysqli_query($conn,$qu);
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Remove Employee</title>
	<link href='https://use.fontawesome.com/releases/v5.8.1/css/all.css'>
<script src="https://kit.fontawesome.com/1e489aecf4.js" crossorigin="anonymous"></script>
	<style type="text/css">
		.x{
			font-size: 30px;margin-left: 240px;  
		}
		body{
			background:darkcyan;
		}
			.fa-arrow-left{
font-size:30px;
font-weight:600;
color:black;
margin-left:3%;
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
	<h1 align="center">Enter ID Number to Remove Employee</h1>
	<pre>  

	</pre>
	<form action="" method="POST">
		<label class="x">ID NO: </label>
		<input style="font-size: 30px;width:280px;background: #CACFD2;" type="text" name="num"><pre> </pre>
			<input style="margin-top:0px; font-size:28px;
			margin-left: 420px;height: 55px;width: 150px; background:#38D5EB ;" type="submit" name="submit" value="Remove">
	<pre></pre>
	<pre></pre>
	<label class="label1"><u>* Employees List*</u></label>
	<pre></pre>
		<select style="font-size: 25px;background:white;margin-left: 370px;width:280px;height:40px;" >
	<option>ID.No  EmployeeName</option>
	<?php
		while($data=mysqli_fetch_assoc($r)){
		?>
		<option><?php echo $data['m_id']; ?>  <?php echo $data['m_name']; ?></option>
		<?php
		}
		?>
	
	
	</form>
	
</body>
</html>
