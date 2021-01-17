<!-- INSERT INTO `queries` (`S.No.`, `Email`, `Member`, `Elaborate`) VALUES ('1', 'nidhisethi88@gamil.com', '0', 'Need all information about the sanitation system of Aashayein.'); -->
<?php
	$server="localhost";
	$username="root";
	$password="";

	$con=mysqli_connect($server,$username,$password);

	if(!$con){
		die("connection to this database failed due to" . mysqli_connect_error());
	}
	echo "Success connecting to the db";
?>