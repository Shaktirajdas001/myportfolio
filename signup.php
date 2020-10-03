<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "mydb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$pass = mysqli_real_escape_string($link, $_REQUEST['pass']);
 
// Attempt insert query execution
$sql = "INSERT INTO person (email,name,pass) VALUES ('$email', '$name', '$pass')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header('location:index.html');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>