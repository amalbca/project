<?php
session_start();
if (isset($_SESSION['sellerId'])) {
    $sellerId = $_SESSION['sellerId'];

    $image = $_FILES['carImage'];
    $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
    var_dump($ext);
    $fileName = time() . "." . $ext;
    $_POST['fileName'] = $fileName;
    var_dump($_POST);

    move_uploaded_file($image['tmp_name'], "Uploads/$fileName");
    $conn = mysqli_connect("localhost", "root", "", "rent_a_car") or die(mysqli_connect_error());
    foreach ($_POST as $key => $value) {
        $$key = $value;
    }

    //update cars_table set
    // name = '$name'
    // .
    // fileName = '$fileName

    $sql = "INSERT INTO `cars_table` (`id`, `name`, `number`, `rate`, `color`, `insurence`, `car_condition`, `fileName`,`model_year`. `sellerId`)
 VALUES (NULL, '$name', '$number', '$rate', '$color', '$insurence', '$car_condition', '$fileName','$model_year',$sellerId)";

    if (mysqli_query($conn, $sql)) {

        header("location: sellerHome");
        //handle success event
    } else {
        echo "could'nt create";
        //handle error event
    }
} else {
    //redirect to login page
}
