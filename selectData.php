
<!DOCTYPE html>
<html>
<head>
	<title>Database of enrolled people in Aashayein</title>
	<link rel="stylesheet" href="CSS/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
	<h1>Enrollee's Database</h1>
	<br>
  <table class="table table-hover table-bordered ">
  	<!-- <caption>Enrollee's Database</caption> -->
  	<thead>
	<tr>
		<th scope="col">S.No.</th>
		<th scope="col">Enrollee's name</th>
		<th scope="col">Relative's name</th>
		<th scope="col">Relationship with enrollee</th>
		<th scope="col">Enrollee's age</th>
		<th scope="col">Enrollee's gender</th>
		<th scope="col">E-mail</th>
		<th scope="col">Phone</th>
		<th scope="col">Reason</th>
		<th scope="col">Date</th>
	</tr>
</thead>
   <?php


	$server="sql306.epizy.com";
	$username="epiz_27323459";
	$password="wQ4XS7ym9QuW3";
	$database="epiz_27323459_aashayein";
	//Create a database connection
	$con=mysqli_connect($server,$username,$password,$database);
	//check for connection success
	if(!$con){
		die("connection to this database failed due to" . mysqli_connect_error());
	}	
	$sql="SELECT * FROM `candidate`";
	$result=mysqli_query($con,$sql);
		// find the np. of records returned

	$num=mysqli_num_rows($result); 
	echo $num;
	echo " records found in the database <br>";

	//display the rows returned by the sql query

	if($num>0){
		

		while($row=mysqli_fetch_assoc($result)){
			echo "<tr><td>".$row["S.No."]."</td><td>".$row["Cname"]."</td><td>".$row["name"]."</td><td>".$row["relationship"]."</td><td>".$row["age"]."</td><td>".$row["gender"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["reason"]."</td><td>".$row["dt"]."</td></tr>";
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