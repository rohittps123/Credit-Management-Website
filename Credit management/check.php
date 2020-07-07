<!DOCTYPE html>
<html>
<head>
	<title>Taking Input</title>
<style>
form
{
    width:400px;
    margin:auto;
    padding:20px;
    
    color:black;
    font-size: 25px;
}
input[type=submit]:hover {
  background-color: #45a049;
}
input[type=submit] {
  
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


</style>


</head>
<body>

<center> <h1>Please Verify the details of the Transfer </h1>
	<h2>


<?php 

include("connection.php");
error_reporting(0);
$query1="select amt from log2 where id='1'";
$data1 = mysqli_query($conn,$query1);
$result=mysqli_fetch_assoc($data1);
$giveramt=$result['amt'];


$query1="select amt from log2 where id='2'";
$data1 = mysqli_query($conn,$query1);
$result=mysqli_fetch_assoc($data1);
$takeramt=$result['amt'];


$query1="select name from logs where id='1'";
$data1 = mysqli_query($conn,$query1);
$result=mysqli_fetch_assoc($data1);
$name1=$result['name'];


echo "Sender Name:  ".$name1."<br>";
echo "Sender Credit:   ".$giveramt."<br>";

$query1="select name from logs where id='2'";
$data1 = mysqli_query($conn,$query1);
$result=mysqli_fetch_assoc($data1);
$name2=$result['name'];


echo "Receiver Name:  ".$name2."<br>";
echo "Receiver Credit:   ".$takeramt."<br>";

?>


<form  method="get">
		Enter Credit Amount: <input type="number" name="amount" >
		<br>
		<input type="submit">
	</form> 

<?php

$temp=$_GET['amount'];
if(isset($_GET['amount']))
{
	if($temp>$giveramt)
	{ 
		echo "Insufficient balance Please Reenter Amount ";
	}
	else
	{ 
		$giveramt=$giveramt-$temp;
		$takeramt=$takeramt+$temp;
		echo "New Giver amount: ".$giveramt."<br>";
		echo "New Taker amount: ".$takeramt."<br>";

		$query2="update transfer set Credit='$giveramt' where name='$name1'";
		$data1 = mysqli_query($conn,$query2);

		$query2="update transfer set Credit='$takeramt' where name='$name2'";
		$data1 = mysqli_query($conn,$query2);









		echo '<script>alert("Transfer Successful")</script>'; 
		?>

		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/task1/home.php">
		<?php 


	}
}

?>




	
</h2>
</center>

</body>
</html>