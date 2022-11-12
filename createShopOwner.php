<?php

$db = mysqli_connect("localhost","root","","rent_a_car");
$email = $_POST['email'];

$sql = "ISERT ITO TABLE NAME VALUES('$eamil',";
mysqli_query($db,$sql);