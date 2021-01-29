<!DOCTYPE html>
<html>
<head>
	<title>Display Records</title>
</head>
<body>
<table border="2" style="width:40%;float:center;">
	<tr>
	
		<th>Last Name</th>
		<th>Contact Number</th>
		<th>Email</th>
	</tr>
<?php
//error_reporting(0);
include("connection.php");

$query="SELECT * FROM `table` where 'lastname' 'contact'  ;

$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


if ($total!=0)
{
	
	while($result=mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<th>".$result['firstname']."</th>
		<th>".$result['lastname']."</th>
		<th>".$result['contact']."</th>
		<th>".$result['email']."</th> 
		</tr>";
		
	}
}

else
{
	
	echo
	 "No records found";
}

?>
</table>
</body>
</html>

