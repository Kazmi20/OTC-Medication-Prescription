<?php
    session_start();

?>
<html>
<head>
    <title>Submitted Review</title>
    <style>
    body {background-color: powderblue;}
    h1   {color: blue;}
    p    {color: red;}
</style>
</head>
<body>
    
        <form action="homepage.php" method="post">
        Enter your name<input name="username" type="text">
        Enter your age<input name="age" type="text">
        <input type="submit">

    </form>

</body>

</html>