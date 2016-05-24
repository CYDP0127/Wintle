<?php
$dbservername = "localhost";
$dbusername = "pollo112";
$dbpassword = "wintle1091!";
$dbname = "pollo112";

// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//get input data from form Post style
$username = $_POST["username"];
$email_address = $_POST["email_address"];
$password = $_POST["password"];

//set cost (higher number, higher security but slow processing time
$cost = 10;

// Create a random salt
$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');

// Prefix information about the hash so PHP knows how to verify it later.
// "$2a$" Means we're using the Blowfish algorithm. The following two digits are the cost parameter.
$salt = sprintf("$2a$%02d$", $cost) . $salt;

// Hash the password with the salt
$hash = crypt($password, $salt);

$sql = "INSERT INTO users (username, email_address, password)
VALUES ('$username', '$email_address', '$hash')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
