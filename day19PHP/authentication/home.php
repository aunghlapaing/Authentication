<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Home</title>
    <?php require_once('./header.php') ?>
</head>
<body>
    <h1>Home Page</h1>
    <hr>
    <?php 
        session_start();

        echo "<pre>";
        print_r ($_SESSION);
    ?>
    


</body>
<?php require_once('./footer.php') ?>
</html>