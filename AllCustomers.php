<!DOCTYPE html>
<html>
<head>
	<title>All Customers</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
<script>
    Weglot.initialize({
        api_key: 'wg_594cda2ad3a9ac9c8dcb40508400e7489'
    });
</script>
</head>
<body>
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


	<h1>All Customers</h1>
	<br>
  <table class="table table-hover table-bordered ">
  	<!-- <caption>Enrollee's Database</caption> -->
  	<thead>
	<tr>
		<th scope="col">S.No.</th>
		<th scope="col">Name</th>
		<th scope="col">Email</th>
		<th scope="col">Balance</th>
		
	</tr>
</thead>
   <?php


	$server="localhost";
	$username="root";
	$password="";
	$database="bankms";
	//Create a database connection
	$con=mysqli_connect($server,$username,$password,$database);
	//check for connection success
	if(!$con){
		die("connection to this database failed due to" . mysqli_connect_error());
	}	
	$sql="SELECT * FROM `customers`";
	$result=mysqli_query($con,$sql);
		// find the np. of records returned

	$num=mysqli_num_rows($result); 
	echo $num;
	echo " Users found in the database <br>";

	

	if($num>0){
		

		while($row=mysqli_fetch_assoc($result)){
			echo "<tr><td>".$row["S.No."]."</td><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Amount"]."</td></tr>";
		}
	echo "</table>";
	}
	else{
	echo "0 result";
}
$con->close();

?>
  </table>

</body>
</html>