<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<body>
<?php

require "dbconfig/config.php";


if(isset($_POST["submit_btn"]))
{
    echo "message sent"."<br>";
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phone_number = $_POST["phone_number"];
    $region = $_POST["region"];
    $subject = $_POST["subject"];


    $query = "insert into users values('$firstname','$lastname','$phone_number','$region','$subject')";
    $query_run = mysqli_query($con, $query);
    echo $firstname."<br>";
    echo $lastname."<br>";
    echo $phone_number."<br>";
    echo $region."<br>";
    echo $subject."<br>";
    

    if($query_run)
    {
        echo "no";
    }
    else
    {
        echo '<script type="text/javascript"> alert("message not sent.....try again later")</script>';
    }


   

}










?>
</body>
</html>