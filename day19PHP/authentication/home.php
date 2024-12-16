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
    <div>
        <?php 
            session_start();

            echo "<pre>";
            // print_r ($_SESSION);
            if(isset($_SESSION['userInfo'])){
                echo '
                    <div><small class="text-info">You are a member!</small></div>
                    <div class="text-end">
                        <a href="./login.php">
                            <button class="btn btn-danger shadow-sm rounded me-5 text-white"><i class="fa-solid fa-right-from-bracket"></i> logout</button>
                        </a>
                    </div>
                ';
            }else {
                // header('Location:login.php');
                echo '
                You are not a member. Please Register!
                <a href="./sigin.php">
                    <button class="btn btn-danger shadow-sm rounded me-5 text-white"><i class="fa-solid fa-registered"></i> Register </button>
                </a>
                ';
            }
        ?>

    </div>
    


</body>
<?php require_once('./footer.php') ?>
</html>