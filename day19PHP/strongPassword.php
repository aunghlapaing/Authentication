<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Strong Password</title>
</head>
<body>
    <h1>PHP</h1>
    <hr>
    <!-- Strong password
    UpperCase == > 1
    LoweCase == > 1
    Number == > 1
    SpecialChar == > 1
    Total == > 6 -->

    <small> Password Must Contain!
        <ul>
            <li>At Least once UpperCase</li>
            <li>At Least once LowerCase</li>
            <li>At Least once Number</li>
            <li>At Least once Special Character</li>
            <li>At Least 6 Character Length</li>
        </ul>
    </small>

    <form action=""method="post">
        Userpassword: <input type="text" name="password" id="">
        <button type="submit" name="btn_post" value="btn_post">POST</button>
    </form>
    <?php

   
        echo "<pre>";
        if (isset ($_POST['btn_post'])){
            // print_r ($_POST['password']);
            $password = $_POST['password'];

            $upperCase = preg_match ('/[A-Z]/', $password);
            $lowerCase = preg_match ('/[a-z]/', $password);
            $numer = preg_match ('/[0-9]/', $password);
            $specialChar = preg_match ('/[!@#$%^&*]/', $password);
            $length = strlen ($password) >= 6 ? true : false;

            if ($upperCase && $lowerCase && $numer && $specialChar && $length){
                echo "<p style='color:green'>Good job. This is a strong password Buddy!</p>";
            }else {
                echo "<p style='color:red'>You stupid Uhh! That is not even a strong password. Try Again!!!</p>";
            }

        }else {
            echo "error";
        }
?>
</body>
</html>