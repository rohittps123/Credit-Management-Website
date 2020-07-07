<!DOCTYPE html>
<html>
<head>
	<title>View all users</title>

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


<?php 
	include("connection.php");
error_reporting(0);
$query= "SELECT * FROM transfer";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);




if($total!=0)
{
	?>
	<center>  <h1>Select The User who wants to transfer his Credit </h1>
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
		echo "<tr>
			<td>".$result['name']."</td>
			<td>".$result['email']."</td>
			<td>".$result['Credit']."</td>
			<td><a href='select.php?t=$result[name]'>Select </a></td>
			</tr>";
	}
}
else
{
	echo "No Record Found </br>";
}





?>



</body>
</html>