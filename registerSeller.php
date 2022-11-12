<?php
$conn = mysqli_connect("localhost","root","","rent_a_car") or die(mysqli_connect_error());
foreach($_POST as $key => $value){
    $$key = $value;
}
$password = md5($password);

$sql = "INSERT INTO `seller_details` (`id`, `name`, `shopAddress`, `email`, `phone`, `password`)
 VALUES (NULL, '$name', '$shopAddress', '$email', '$phone', '$password')";
 


if(mysqli_query($conn,$sql)){

    header("location: http://localhost/project/sellerlogin.html");
    //handle success event
} else {
    echo "could'nt create";
    //handle error event
}

