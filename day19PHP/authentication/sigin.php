<?php require_once('./header.php') ?>

<div class="" style="height: 734px">
    <div class="row h-100" >
        <div class="col-7 " style="margin-top: 150px;">
                <div class="row">
                    <div class="row d-flex justify-content-center m-3">
                        <div class="row d-block ">
                            <div class="d-flex justify-content-center">
                                <div class="">
                                    <h1>Sign to your account?</h1>
                                </div>
                            </div>
                            <div class=" d-flex justify-content-center">
                                <p>Social Login?</p>
                            </div>
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="col-8 offset-2">

                            <form action="" method="post">
                                <div class="">
                                    <input type="text" class="form-control shadow-sm rounded w-90 mt-3" name="name" value="<?php echo $_POST['name'] ?>" id="" placeholder="Enter your name...">
                                    <?php 
                                        if (isset($_POST['btn_sigin'])){
                                            $nameStatus = $_POST['name'] == "" ? false : true;

                                            echo $nameStatus ? "" : "<small class='text-danger'>Required...</small>";

                                        }
                                    ?>
                                </div>

                                <div class="">
                                    <input type="text" class="form-control shadow-sm rounded w-90 mt-3" name="email" value="<?php echo $_POST['email'] ?>" id="" placeholder="Enter your email...">
                                    <?php 
                                        if (isset($_POST['btn_sigin'])){
                                            $emailStatus = $_POST['email'] == "" ? false : true;
                                            echo $emailStatus ?  "" : "<small class='text-danger'>Required...</small>";                                      
                                        }
                                    ?>
                                </div>

                                <div class="">
                                    <input type="password" class="form-control shadow-sm rounded-5 w-90 mt-3" name="password" id="" placeholder="Enter your password...">
                                    <?php
                                        if(isset($_POST['btn_sigin'])){
                                            $passwordStatus = $_POST ['password'] == "" ? false : true;
                                            echo $passwordStatus ? "" : "<small class='text-danger'>Required...</small> ";
                                        }
                                    ?>
                                </div>

                                <div class="">
                                    <input type="pasword" class="form-control shadow-sm rounded w-90 mt-3" name="confirm_password" id="" placeholder="Comfirm your password...">
                                    <?php
                                        if(isset($_POST['btn_sigin'])){
                                            $passwordConfirmStatus = $_POST ['confirm_password'] == "" ? false : true;
                                            echo $passwordConfirmStatus ? "" : "<small class='text-danger'>Required...</small> ";
                                        }
                                    ?>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary frounded shadow-sm mt-3" name="btn_sigin" value="sigin">Sign In</button>
                                </div>  
                                    
                                <?php require_once('./authenticationProcess.php') ?>
                            </form>
                            
                            
                                
                        </div> 
                    </div>
                </div>
            </div>

    
            <div class="col-5 bg-primary">
                <div class="row" style="margin-top: 320px;">
                    <div class="col-8 offset-2 text-white">
                        <div class="d-flex justify-content-center">
                            <h1>Have an Account?</h1>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p>Go to login page to login to your account.</p>
                        </div>
                        <div class="d-flex justify-content-center ">
                            <a href="./login.php" class="btn btn-light text-primary rounded shadow-sm w-20">LOGIN</a>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
</div>





<?php require_once('./footer.php') ?>