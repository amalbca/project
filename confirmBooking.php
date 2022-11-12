
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $carId = $_GET['carId'];
    $conn = mysqli_connect("localhost", "root", "", "rent_a_car") or die(mysqli_connect_error());
    $carDetails = mysqli_query($conn, "SELECT * FROM `cars_table` WHERE id = '$carId'");
    foreach ($carDetails as $car) {
        foreach ($car as $key => $value) {
            $$key = $value;
        }


        echo "
                <h1>$name</h1>
                <img src=\"Uploads/$fileName\" width = 300 height=300>
                <p>$number<p>
                <p>$rate<p>
                <p>$insurence<p>
                <p>$car_condition<p>
                <p>$color<p>
                <p>$model_year<p>
                ";

                $seller = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `seller_details` WHERE id = $sellerId"));
                //show the appropriate data from seller['field_name']
                var_dump($seller);
    }
    ?>
    <!-- card details form -->
    <form action="bookCar.php" method="Post">
        <input type="hidden" name="carId" value="<?php echo $carId?>">
        <input type="date" name="date">
        <input type="hidden" name="rate" value="<?php echo $rate; ?>">
        <input type="submit" value="book">
    </form>

</body>

</html>