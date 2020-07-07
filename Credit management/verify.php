<!DOCTYPE html>
<html>
<head>
	<title>Transfer in process </title>
	<script>
	function checkdelete()
	{
		return confirm('Insufficient Credits in your Account Please reenter credit amount !');
	}
</script>
</head>
<body>


<?php 
include("connection.php");
error_reporting(0);


$name2=$_GET['t'];
$query="SELECT * FROM transfer WHERE name='$name2'";
//$amt="SELECT Credit from transfer WHERE name='$title'";
$data = mysqli_query($conn,$query);


$query2="update logs set name='$name2' where id=2";
$data2 = mysqli_query($conn,$query2);

$name1="select name from logs where id='1'";
$data3 = mysqli_query($conn,$name1);
$result=mysqli_fetch_assoc($data3);
//echo $result['name'];
$giver=$result['name'];


$name1="select name from logs where id='2'";
$data3 = mysqli_query($conn,$name1);
$result=mysqli_fetch_assoc($data3);
//echo $result['name'];
$taker=$result['name'];



$query3="select * from transfer where name = '$giver' ";

$data3 = mysqli_query($conn,$query3);
$result3=mysqli_fetch_assoc($data3);
$amtgiver=$result3['Credit'];

$query4="select * from transfer where name = '$taker' ";

$data4 = mysqli_query($conn,$query4);
$result4=mysqli_fetch_assoc($data4);
$amttaker=$result4['Credit'];


    	$query5="update log2 set amt='$amttaker' where id = '2'";
    	$data5 = mysqli_query($conn,$query5);

    	$query6="update log2 set amt='$amtgiver' where id = '1'";
    	$data6 = mysqli_query($conn,$query6);


echo $giver;
echo $amtgiver;
echo "<br>";
echo $taker;
echo $amttaker;
$temp=0;


if($data)
{
	?>
<!--
	<form  method="get">
		Enter Credit Amount: <input type="number" name="amount" >
		<br>
		<input type="submit">
	</form> -->
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/task1/check.php">
	<?php 


/*
	$temp=$_GET['amount'];
	if($temp>$amtgiver)
	{ 
		echo "Insufficient balance Please Reenter Amount ";
	}
	else
	{
		
    }*/

    	

		




	


}
else
{
	echo "Sorry  process failed";
}




 ?>




</body>
</html>