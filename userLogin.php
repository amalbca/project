<?php
$conn = mysqli_connect("localhost","root","","rent_a_car") or die(mysqli_connect_error());
foreach($_POST as $key => $value){
    $$key = $value;
}
$password = md5($password);

$sql = "SELECT * FROM `user_details` WHERE email ='$email' AND password = '$password'";
$result = mysqli_query($conn,$sql);
$number = mysqli_num_rows($result);

if($number == 1){
//user exists
session_start();
$user = mysqli_fetch_assoc($result);
$_SESSION['userId'] = $user['id'];
$_SESSION['userName'] = $user['name'];

    header("location: userHome.php");
    //handle success event
} else {
//invalide user id or pass

    echo "could'nt create";
    //handle error event
}