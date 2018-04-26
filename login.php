<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (empty($_POST['email']) || empty($_POST['pass'])) {
$error = "Username or Password is invalid";
echo $error;
}
else
{
// Define $username and $password
$username=$_POST['email'];
$password=$_POST['pass'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);
// Selecting Database
$db = mysqli_select_db($connection,"awt2");
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query( $connection,"select fname from regi where pass=MD5('$password') AND email='$username'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {

    while($row1 = mysqli_fetch_assoc($query)) {
        $_SESSION['login_user']=$row1["fname"];// Initializing Session
        echo "Welcome ".$_SESSION['login_user'];
        //header("Refresh: 2; URL= ../nuv-home.html"); // Redirecting To Other Page
    }

} else {
$error = "Username or Password is invalid";
echo $error;
}
mysqli_close($connection); // Closing Connection
}

?>