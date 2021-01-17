
<?php
$insert=false;
if(isset($_POST['Email'])){

	$server="sql306.epizy.com";
  $username="epiz_27323459";
  $password="wQ4XS7ym9QuW3";
	$con=mysqli_connect($server,$username,$password);

	if(!$con){
		die("connection to this database failed due to" . mysqli_connect_error());
	}
	echo "Success connecting to the db";
	$Email=$_POST['Email'];
	$Member=$_POST['Member'];
	$Elaborate=$_POST['Elaborate'];
	
	$sql="INSERT INTO `Aashayein`.`queries` (`Email`, `Member`, `Elaborate`,`DateTime`) VALUES (
		'$Email', '$Member', '$Elaborate',current_timestamp())";
		// echo $sql;

		if($con->query($sql)==true){
			// echo "Successfully inserted";
			$insert=true; 
		}
		else{
			echo "ERROR: $sql <br> $con->error";
		}

		$con->close();
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		

	<title>Aashayein Oldage Home cum Orphanage</title>
	<link rel="icon" href="images/image4.png" type="image/png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	
	
</head>
<body>
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><h2>Aashayein</h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>



  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="objective.html">Objective</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/cwh/Enroll.php">Enroll</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/cwh/selectData.php">Enrolled</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="donate.html">Donate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="Contact.html">Contact</a>
      </li>
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="Contact.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Volunteer
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Contact.html">Teacher</a>
          <a class="dropdown-item" href="Contact.html">Care-taker</a>
         
          <a class="dropdown-item" href="Contact.html">Cook</a>
          <a class="dropdown-item" href="Contact.html">Maid</a>
          <a class="dropdown-item" href="Contact.html">Staff</a>
         
        </div>
      </li>
      
  </div>
</nav>
<div class= "container">
 
    
   <h2>Contact Us</h2>
   <form action="Contact.php" method="post">
   	<?php
   	if($insert==true){
   		echo "<p>Thanks for submitting your form</p>";
   	}
   	?>
  	<div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" name="Email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select your Query </label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Select type</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>Volunteer yourself for any of the options mentioned or specify the one you want to apply for</option>
      <option>Rooms Available</option>
      <option>Sanitary System</option>
      <option>Food and Water system</option>
      <option>Club House and other games available</option>
      <option>Care Takers available</option>
    </select>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="Member" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        <script >
          if(document.getElementById('').checked){
            $Member="yes";
          }
          else{
            $Member="yes";
          }
        </script>
        Tick the checkbox if you are a member
      </label>
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Elaborate your Concern </label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="Elaborate" rows="3"></textarea>
  </div>
  <button class="button.btn.btn-primary">Submit</button>

</form>
<div>
  <p>If no response to your email is given within a week,you can contact us at <a href="">Aashayein.pvt@gmail.com</a>
    <p><h5>Contact no.</h5> 9897969523</p>
    <p><h5>Address</h5> 101,Block-C,Sainik Vihar,New Delhi-110034 </p>
  
<footer class="container">
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>©️ 2020-2021 Aashayein,Inc. | <a href="#">Privacy</a> | <a href="#">Terms</a></p>
    </footer>
</div>
</body>
</html>

