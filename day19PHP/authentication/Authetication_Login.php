<?php 
session_start();

if(isset($_POST['btn_login'])){
    
    $name = $_POST['name'];
    $password = $_POST['password'];
    if ($name && $password){
        // echo "login success"; 
        // echo "<br><br>";
        if(isset($_SESSION['userInfo'])){
            // print_r ($_SESSION ['userInfo']);
            $logingName = $_SESSION['userInfo']['name'];
            $loginPassword = $_SESSION['userInfo']['passwordHash']; //hash

            if ($name == $logingName && password_verify($password, $loginPassword)){
                header('Location:home.php');


            }else {
                echo "Password not match";
            }   
        }
        else {
            echo "Session data is empty";
        };
        

        // $sessionStatus = $_SESSION['userInfo'] == "" ? false : true;
        // echo $sessionStatus ? "Session Data have" : "<small class='text-danger'>Session data is empty</small>";

    }
}
?>