<?php

$host = "localhost";
$username = "root";
$pass = "";
$db = "project";

$conn = mysqli_connect($host, $username, $pass, $db);

if (!$conn){
    die("connection failed: " . mysqli_connect_error());
}
if(isset($_POST['name'])){

    $name = $_POST['name'];
    $major = $_POST['major'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $update = "
    UPDATE users 
    SET 
    name='$name',
    major='$major',
    phone='$phone',
    email='$email'
    WHERE id='66'
    ";

    mysqli_query($conn, $update);

}
$sql = "SELECT * FROM users LIMIT 1";

$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);

?>