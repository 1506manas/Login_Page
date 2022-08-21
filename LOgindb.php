<?php
session_start();
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
	echo "db connected successfully";
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$txtID = $_POST['id'];
	$txtPassword = $_POST['password'];
}

$db_data = "select ID, Name, password from login_table where id = '$txtID'";

//validation
$result = mysqli_query($con, $db_data);
$result = $result->fetch_assoc();
if($result == null){
    echo "Invalid ID!! Try Again";
}
else{
    if($txtID == $result['ID'] && $txtPassword == $result['password']){
        // echo "login successfully<br>";
        // echo "Welcome  " . $result["Name"];
        $_SESSION["Name"] = $result["Name"];
        header("Location:index.php");
    }
    else{
        echo "Invalid Password!! Try Again";
    }
}
    

    





//fetching and printing rows from table
// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//       echo "id: " . $row["ID"]. " - Name: " . $row["Name"]. " E-Mail " . $row["E-Mail"]. "<br>";
//     }
//   } else {
//     echo "0 results";
//   }
?>