
    <?php
var_dump($_POST);
session_start();
foreach($_POST as $key => $value){
    $$key = $value;
}
$userId = $_SESSION['userId'];
    $sql = "INSERT INTO `payments_table` (`id`, `userId`, `carId`, `date`, `rate`) VALUES (NULL, '$userId', '$carId', '$date', '$rate');";
    $conn = mysqli_connect("localhost", "root", "", "rent_a_car") or die(mysqli_connect_error());
    if(mysqli_query($conn,$sql)){
        //same code change isBooked to 0
        //create a new screen where seller can see all the booked cars
        mysqli_query($conn,"update `cars_table` set isBooked = '1' WHERE id = '$carId'") or die(mysqli_error($conn));
        //payment success screen [header("location")]
    } else {
        //payment failur
    }
    ?>