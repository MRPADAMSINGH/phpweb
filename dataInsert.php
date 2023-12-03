<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$serverName = "localhost";
$username = "root"; // Username Name
$pass = "";
$dbName = "registration"; // Databases Name

$conn = mysqli_connect($serverName, $username, $pass, $dbName);
if($conn == false){
die("Error". mysqli_connect_error());
}
else{
$fullName = $_POST["full_name"];
$email_id = $_POST["email"];
$mobile_no = $_POST["mobile_No"];
$password = $_POST["password"];
$mess = $_POST["message"];
$sql = "INSERT INTO `login` (`Full_Name`, `Email_Address`, `Mobile_Number`, `Pass_word`, `Mess_age`) VALUES ('$fullName', '$email_id', '$mobile_no', '$password', '$mess')";
$result = mysqli_query($conn, $sql);
if($result){
echo "record added";
}else{
echo "some issues";
}
}
mysqli_close($conn);
}
?>