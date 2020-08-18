<!DOCTYPE html>
<html lang="en">
<head>
    <title>result</title>
</head>
<body>
    <?php 
        if(isset($_POST["submit_btn"])) 
        {
            echo "<h1>TOAN Engineering and Services Limited</h1>"."<br>";
            echo "<h2>Trainee Information</h2>"."<br><br>";
            $clientSurname=$_POST["clientSurname"];
            $clientFirstname=$_POST["clientFirstname"];
            $clientMiddlename=$_POST["clientMiddlename"];
            $month=$_POST["month"];
            $address=$_POST["address"];
            $number=$_POST["number"];
            $email=$_POST["email"];
            $name=$_POST["name"];
            $address1=$_POST["address1"];
            $number1=$_POST["number1"];
            $course=$_POST["course"];
            $course1=$_POST["course1"];
            

            
        

            echo "Surname: ".$clientSurname."<br> <br>";
            echo "First Name: ".$clientFirstname."<br> <br>";
            echo "Middle Name: ".$clientMiddlename."<br> <br>";
            echo "D.O.B: ".$month."<br> <br>";
            echo "Address: ".$address."<br> <br>";
            echo "Phone number: ".$number."<br> <br>";
            echo "Email Address".$email."<br> <br>";
            echo "Guardian Full Name: ".$name."<br> <br>";
            echo "Guardian Address: ".$address1."<br> <br>";
            echo "Guardian Number: ".$number1."<br> <br>";
            echo "Desired Program: ".$course."<br> <br>";
            echo "Other Program: ".$course1."<br>";
        }
        else
        {
            echo "wrong";
        }

    ?>
</body>
</html>