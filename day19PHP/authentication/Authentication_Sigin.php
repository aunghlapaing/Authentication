<?php 
    function strongPasswordCheck (){
        $password = $_POST['password'];

            $upperCase = preg_match ('/[A-Z]/', $password);
            $lowerCase = preg_match ('/[a-z]/', $password);
            $numer = preg_match ('/[0-9]/', $password);
            $specialChar = preg_match ('/[!@#$%^&*]/', $password);
            $length = strlen ($password) >= 6 ? true : false;

            return ($upperCase && $lowerCase && $numer && $specialChar && $length) ? true : false;

                
    }

    if(isset($_POST['btn_sigin'])){
        $name = $_POST ['name'];
        $email = $_POST ['email'];
        $password = $_POST ['password'];
        $password_confirm = $_POST ['confirm_password'];
        // echo "Name == > $name && Password == > $password";
    
        if ($nameStatus && $emailStatus && $passwordStatus && $passwordConfirmStatus){
            if($password == $password_confirm){
                $checkStatus  = strongPasswordCheck($password);

                // var_dump ($checkStatus);

                If($checkStatus){
                    // echo "register success";
                    $data = [
                        'name' => $name,
                        'email' => $email,
                        'passwordHash' => password_hash($password, PASSWORD_BCRYPT)
                    ];
                    echo "<pre>";
                    // print_r($data);
                    
                    //store data in session, instead can store in database as well
                    session_start();
                    $_SESSION['userInfo'] = $data;

                    // print_r ($_SESSION['userInfo']);

                    header ('Location:home.php');
                }else{
                    echo '

                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                        <strong>Password Must Contain!</strong>
                            <small> 
                                <ul>
                                    <li>At Least once UpperCase</li>
                                    <li>At Least once LowerCase</li>
                                    <li>At Least once Number</li>
                                    <li>At Least once Special Character</li>
                                    <li>At Least 6 Character Length</li>
                                </ul>
                            </small>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    ';
                }

            }else{
                echo '
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    <strong>Password not match!</strong> Try Again Buddy.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                ';
            }
        }
    }  
?>

