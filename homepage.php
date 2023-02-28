<?php
    session_start();

?>

<html>
<head>
    <title>Hello World</title>
    <style>
    body {background-color: powderblue;}
    h1   {color: blue;}
    p    {color: red;}
</style>
</head>
<body>
    <center>
        <h3>Welcome to the OTC Medication Center</h3><br><br><br>
    


<?php

        $username=$_POST["username"];
        $_SESSION['username'] = $username;
        if ($username=="sakura"){
            echo("<button onclick=\"location.href='admin.php'\">Admin Panel</button>");

        }
        $con=mysqli_connect("localhost","root","","practice");

        
        $result = mysqli_query($con, "SELECT * FROM users where username='$username' ");

        
        $user = mysqli_fetch_assoc($result);

        $age=$user['Age'];
        $weight=$user['Weight'];
        $height=$user['Height'];

        $bmi=$weight/$height*$height;
        echo "Your BMI is: ";        
        echo $bmi;
        echo "\r\n\r\n";
        
?>
<br><br>
<?php

        $proteins=$weight * 1.6;
        echo "Your Protein requirement is: ";
        echo $proteins."\r\n\r\n";
?>
<br><br>
<?php

        $carbs=$weight * 1.4;
        echo "Your Carbs requirement is: ";
        echo $carbs."\r\n\r\n";
?>
<br><br>
<?php
        $fat=$weight * 1.1;
        echo "Your Fat requirement is: ";
        echo $fat."\r\n\r\n";
?>
<br><br>
<?php

        $fibre=$weight * 1.8;
        echo "Your Fibre requirement is: ";
        echo $fibre."\r\n\r\n";
?>
<br><br>
<?php

        $vitaminD=$weight * 0.9;
        echo "Your VitaminD requirement is: ";
        echo $proteins."\r\n\r\n";
?>
<br><br>







  

    <form action="symptomForm.php" method="post">
        <button type="submit" name="symptoms"><h3>I am Feeling Sick !</h3></button>
    </form>

    <form action="review.php" method="post">
        <button type="submit" name="review"><h3>Provide a Review</h3></button>
    </form>
    <form action="login.php" method="post">
       <?php session_destroy(); ?>

        <button type="submit" name="logout"><h3>Logout!</h3></button>
    </form>


    




    </center>
</body>

</html>