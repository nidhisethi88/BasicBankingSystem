<!DOCTYPE html>
<html>
<head>
	<title>Transaction History</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

   

  
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="">The Ritchie Rich Bank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="NewUser.php">New User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="AllCustomers.php">All Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="TransferMoney.php">Transfer Money</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  active" href="TransactionHistory.php">Transaction History</a>
        </li>
     
      </ul>
    </div>
  </div>
</nav>

	<h1>Transaction History</h1>
	<br>
  <table class="table table-hover table-bordered ">
  	<!-- <caption>Enrollee's Database</caption> -->
  	<thead>
	<tr>
		<th scope="col">S.No.</th>
		<th scope="col">Sender's Name</th>
		<th scope="col">Sender's Email</th>
		<th scope="col">Receiver's Name</th>
		<th scope="col">Receiver's Email</th>
		<th scope="col">Amount Transferred</th>
		
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
	$sql="SELECT * FROM `transaction`";
	$result=mysqli_query($con,$sql);
		// find the np. of records returned

	$num=mysqli_num_rows($result); 
	echo $num;
	echo " Users found in the database <br>";

	

	if($num>0){
		

		while($row=mysqli_fetch_assoc($result)){
			echo "<tr><td>".$row["S.No."]."</td><td>".$row["Sender_name"]."</td><td>".$row["Sender_email"]."</td><td>".$row["Receiver_name"]."</td><td>".$row["Receiver_email"]."</td><td>".$row["Amount"]."</td></tr>";
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