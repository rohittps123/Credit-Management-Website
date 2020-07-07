<html>
<head>
	<title>Select User</title>
	<style>
		a {
  

    background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}


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
$name1=$_GET['t'];

$query="Select * from transfer WHERE name='$name1'";
$data = mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);


$query2="update logs set name='$name1' where id=1";
$data2 = mysqli_query($conn,$query2);





if($data)
{
	?>

	<center>
	<font size="5" > 
	
		<?php 
	echo "The details of user are as follows  <br> "; ?>

	<table border='2' >

		<?php 
		

	
	echo "<tr> <td> Name: </td><td>".$result['name']."</td></tr>  ";
	echo "<tr> <td> Email: </td><td> ".$result['email']." </td></tr> ";
	echo " <tr> <td> Credit: </td><td> ".$result['Credit']." </td></tr></table> ";
	
	?>

	<a href="transfer.php">Transfer Credit </a>


	<?php 



	
}
else
{
	echo "Sorry process failed";
}




 ?>
</font></center>
</body>
</html>