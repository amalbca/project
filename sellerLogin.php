<?php
$conn = mysqli_connect("localhost","root","","rent_a_car") or die(mysqli_connect_error());
foreach($_POST as $key => $value){
    $$key = $value;
}
$password = md5($password);

$sql = "SELECT * FROM `seller_details` WHERE email ='$email' AND password = '$password'";
$result = mysqli_query($conn,$sql);
$number = mysqli_num_rows($result);

if($number == 1){
//user exists
session_start();
$user = mysqli_fetch_assoc($result);
$_SESSION['sellerId'] = $user['id'];
$_SESSION['sellerName'] = $user['name'];

    header("location: sellerHome.php");
    //handle success event
} else {
//invalide user id or pass

    echo "could'nt create";
    //handle error event
}