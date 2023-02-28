<?php include('server.php') ?>

<html>
<head>
    <title>Homepage</title>
</head>
<body>
    <?php

        $username=$_SESSION['username'];

        $result = mysqli_query($con, "SELECT * FROM users where username='$username' ");

        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        $age=$user['Age'];
        $weight=$user['Weight'];
        $height=$user['Height'];

        $bmi=$weight/$height*$height;
        echo "Your BMI is: ";        
        echo $bmi."\r\n";

        

        



        if ($user) { // if user exists
          if ($user['username'] === $username) {
            array_push($errors, "Username already exists");

          }
        }


    ?>






</body>

</html>