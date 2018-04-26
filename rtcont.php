<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "awt2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$prg=$_POST['prg'];
$sql = "SELECT conte FROM content where prg='$prg' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["conte"];
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>