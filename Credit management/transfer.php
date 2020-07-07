<!DOCTYPE html>
<html>
<head>
	<title>Trasnfer Credit</title>
	<script>
	function checkdelete()
	{
		return confirm('Are you sure you want transfer credit to this account?');
	}
</script>
<style>

td
{
	padding:10px;
	margin:auto;
	color:black;
	font-size: 20px;

}


 </style>
</head>
<body>
<h1><center>
	Select Recipient User  </center></h1>


<?php 
include("connection.php");
error_reporting(0);
$query= "SELECT * FROM transfer";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);


$query1="select name from logs where id='1'";
$data1 = mysqli_query($conn,$query1);
$result=mysqli_fetch_assoc($data1);
$name1=$result['name'];



if($total!=0)
{
	?>
	<center>
	<div>
	<table border='2'>
		<tr>
			<th>Name</th>
			<th>Eamil</th>
			<th>Credit</th>
			<th>Action</th>
		</tr>

	

	<?php
	while($result=mysqli_fetch_assoc($data))
	{
		if($result['name']!=$name1)
		{
		echo "<tr>
			<td>".$result['name']."</td>
			<td>".$result['email']."</td>
			<td>".$result['Credit']."</td>
			<td><a href='verify.php?t=$result[name]' onclick='return  checkdelete()'>Select to Transfer </a></td>
			</tr>";
		}

	}
}
else
{
	echo "No Record Found </br>";
}








	?>




</body>
</html>