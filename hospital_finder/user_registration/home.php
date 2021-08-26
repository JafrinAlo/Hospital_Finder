<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');// makes sure user logs in b4 being in homepage
}

?>

<html>
    <head>
        <title>Homepage</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container">

        <a class="float-end" href="logout.php">LogOut</a>
        <h1>Welcome <?php echo $_SESSION['username']; ?></h1>

        </div>
    </body>

</html>