<?php
include ("connection.php");
?>
<doctype html>
 <html>
 <head>
	<title>EMPLOYEE TABLE</title>
	<link rel="stylesheet" type="text/css" href="s.css">
</head>
<body >
	<div class="main">
		<div class="ENTER">
			<h2>TABLE</h2>
			<form id="register" method="post" action="">
			<lable>First Name : </lable>
			<br>
			<input type="text" name="fname"
			id="n" placeholder="Enter Your Frist Name" required>
			<br><br>
			<lable>Last Name : </lable>
            <br>
			<input type="text" name="lname"
			id="n" placeholder="Enter Your Last Name" required>
			<br><br>
			<lable>Contact NO :</lable> 
			<br>
			<input type="number" name="contact"
			    id="n" placeholder="Contact No" required>
			    <br> <br>
			    <LABEL>Email :</LABEL>
			    <br>
			    <input type="email" name="email"
			    id="n" placeholder="email" required>
			    <br><br>
			    <input type="SUBMIT" value="SUBMIT"
			    name="SUBMIT">
			    
			    <button type="button" value="SUBMIT"><a href="display.php">SHOW</a></button>
			    <br>

		</form>
        </div><!-- end ENTER-->
    </div><!-- end main-->

<?php
if(isset($_POST['SUBMIT'])){
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$cn=$_POST['contact'];
$en=$_POST['email'];

$query="INSERT INTO `table` (firstname,lastname,contact,email) VALUES ('".$fn."','".$ln."','".$cn."','".$en."')";



$data=mysqli_query ($conn,$query);



if($data)
{
	echo "data inserted into database";
}
else {
  	echo "Error: " . $query . "<br>" . mysqli_error($conn);
	}

}
$conn->close();
?>


</body>
</html>

