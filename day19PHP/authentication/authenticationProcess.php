<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Authentication</title>
</head>
<body>
    <h1>PHP</h1>
    <hr>

    <?php 
        echo "Authentication";


        echo "<pre>";

        if(isset($_POST['btn_login']) || isset($_POST['btn_sigin'])){
            $name = $_POST ['name'];
            $email = $_POST ['email'];
            $password = $_POST ['password'];
            $password_comfirm = $_POST ['comfirm_password'];
            echo "Name == > $name && Password == > $password";
        }

    ?>

</body>
</html>