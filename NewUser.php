<?php
$insert=false;
if(isset($_POST['Name'])){
	$server="localhost";
	$username="root";
	$password="";
	//Create a database connection
	$con=mysqli_connect($server,$username,$password);
	//check for connection success
	if(!$con){
		die("connection to this database failed due to" . mysqli_connect_error());
	}
	// echo "Success connecting to the db";
	
	
	//collect post variables
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];	
	$Amount = $_POST['Amount'];
	

	$sql = "INSERT INTO `bankms`.`customers` (`Name`, `Email`, `Amount`, `dt`) VALUES ('$Name', '$Email', '$Amount', current_timestamp())";	

	 // echo $sql;

	//execute the query
	if($con->query($sql) == true){
		// echo "Successfully inserted";
		//flag for successful insertion
		$insert=true;
	}
	else{
		echo "ERROR: $sql <br> $con->error";
	}
	//close the database connection

	$con->close();

}
 ?>

 <!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="UTF=8">
	<meta name="viewport" content="width=device-width,  initial-scale=1.0">
	<title>Form</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Domine:wght@600&family=Lobster+Two:ital,wght@1,700&display=swap" rel="stylesheet">
<script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
<script>
    Weglot.initialize({
        api_key: 'wg_594cda2ad3a9ac9c8dcb40508400e7489'
    });
</script>
</head>
<body>
	<div class="container">
		<h2>Adding New User</h2>
		<p> Please fill out the form. </p>
		<?php
		if($insert==true){
			echo "<p class='submitMsg'> Thanks for submitting the form. </p>";}
		?>
	<form action="NewUser.php" method="post">
		<input type="text" name="Name" id="name" placeholder="Enter your name">
		<input type="varchar" name="Email" id="name" placeholder="Enter your email">
		<input type="int" name="Amount" id="name" placeholder="Enter the amount you want to deposit in your account">
		
		<button class="btn">Submit</button>
	</form>
	</div>
	
	
</body>
</html>
