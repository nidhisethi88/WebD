<?php
$insert=false;
if(isset($_POST['name'])){
	$server="sql306.epizy.com";
	$username="epiz_27323459";
	$password="wQ4XS7ym9QuW3";
	//Create a database connection
	$con=mysqli_connect($server,$username,$password);
	//check for connection success
	if(!$con){
		die("connection to this database failed due to" . mysqli_connect_error());
	}
	// echo "Success connecting to the db";
	
	//collect post variables
	$Cname = $_POST['Cname'];
	$name = $_POST['name'];
	
	$relationship = $_POST['relationship'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$desc = $_POST['desc'];
	

	$sql="INSERT INTO `epiz_27323459_aashayein`.`candidate` ( `Cname`, `name`, `relationship`, `age`, `gender`, `email`, `phone`, `reason`, `dt`) VALUES ( 
	'$Cname', '$name', '$relationship', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())"; 
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
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Enroll</title>
	<link rel="icon" href="images/image4.png" type="image/png">
	<link rel="stylesheet" href="CSS/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Domine:wght@600&family=Lobster+Two:ital,wght@1,700&display=swap" rel="stylesheet">

</head>
<body>
	<img src=images/image14.jpg class="bg" alt="They need your love">
	<div class="container">
		<h1>Enroll</h1>
		<p>It is a sad part of the society that we are getting emotionally bankrupt and relationship as beautiful as parent and child has also seen a detoriation and we are witnessing a increase in old-care centres. Aashayein is not a place where children can willingly come and drop their parents and vice versa.</p>
		<?php
		if ($insert==true){
			echo "<p class='submitMsg'>Your form has been submitted. </p>";
		}
		?> 
		
		<form action="Enroll.php" method="post">
			<input type="text" name="Cname" id="name" placeholder="Name(person's name to be enrolled)">
			<input type="text" name="name" id="name" placeholder="Your Name(Applicant)">
			<input type="text" name="relationship" id="name" placeholder="Relationship">
			<input type="age" name="age" id="age" placeholder="Enter the age of person to be enrolled">
			<input type="text" name="gender" id="name" placeholder="Enter the gender of person to be enrolled">
			<input type="email" name="email" id="email" placeholder="Enter your e-mail">
			<input type="phone" name="phone" id="name" placeholder="Enter your phone no.">
			<textarea name="desc" id="desc" cols="30" rows="10" placeholder="Why do you want to enroll the child/senior citizen here?"></textarea>
			<button class="btn">Submit</button>
		</form>
	</div>
	<script src="JAVASCRIPT/  Enroll.js"></script>

</body>
</html>   