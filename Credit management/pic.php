<html>
<head>
	<title>pic1</title>
</head>
<body>
	
	hello 
		<?php
		$dummy='Nice';
		include("connection.php");
		$query2="update logs set name='$dummy' where id=2";
        $data2 = mysqli_query($conn,$query2);




		?>
</body>
</html>