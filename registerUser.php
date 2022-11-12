<?php
$conn = mysqli_connect("localhost","root","","rent_a_car") or die(mysqli_connect_error());
foreach($_POST as $key => $value){
    $$key = $value;
}
$password = md5($password);

$sql = "INSERT INTO `user_details` (`id`, `name`,`email`, `phone`, `address`, `licence`, `password`)
 VALUES (NULL,'$name' ,'$email', '$phone', '$address', '$licence', '$password');";

if(mysqli_query($conn,$sql)){

    header("location: loginhtml");
    //handle success event
} else {
    echo "could'nt create";
    //handle error event
}

