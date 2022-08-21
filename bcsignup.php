<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$server = 'localhost';
$user = 'root';
$password = '';
$dbname = 'Login';



$con = mysqli_connect($server,$user,$password,$dbname);

if(!$con){
	echo "db connection failed";
}
else{
	echo "db connected successfully<br>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$txtID = $_POST['txtID'];
	$txtName = $_POST['txtName'];
	$txtEMail = $_POST['txtEMail'];
	$txtPassword = $_POST['txtPassword'];
}


// database insert SQL code
$sql = "INSERT INTO login_table (`ID`, `Name`, `E-Mail`, `Password`) VALUES ('$txtID', '$txtName', '$txtEMail','$txtPassword')";

// // insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	// echo "Contact Records Inserted";
	header("Location: login.php");
}
else{
	header("Location: signup1.php");
}

?>