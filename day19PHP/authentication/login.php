<?php require_once('./header.php') ?>

<div class="" style="height: 734px">
    <div class="row h-100" >
        <div class="col-7 " style="margin-top: 150px;">
                <div class="row">
                    <div class="row d-flex justify-content-center m-3">
                        <div class="row d-block ">
                            <div class="d-flex justify-content-center">
                                <div class="">
                                    <h1>Login to your account?</h1>
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
                                    <input type="text" class="form-control shadow-sm rounded w-90 mt-3" name="name" id="" value="<?php if(isset($_POST['btn_login'])){echo ($_POST['name']);} ?>" placeholder="Enter your name...">
                                    <?php 
                                    if (isset($_POST['btn_login'])){
                                        $nameStatus = $_POST['name'] != "" ? true : false;
                                        echo $nameStatus ? "" : "<small class='text-danger'>Required...</small>";
                                    }
                                    ?>
                                </div>

                                <div class="">
                                    <input type="password" class="form-control shadow-sm rounded-5 w-90 mt-3" name="password" id="" placeholder="Enter your password...">
                                    <?php 
                                    if (isset($_POST['btn_login'])){
                                        $passwordStatus = $_POST['password'] == "" ? true : false;
                                        echo $passwordStatus ? "<small class='text-danger'>Required...</small>" : "";
                                    };
                                    ?>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary rounded shadow-sm mt-3" name="btn_login" value="login">Login</button>
                                </div>   

                                <?php require_once('./Authetication_Login.php'); ?>

                            </form>
            
                        </div> 
                    </div>
                </div>
            </div>

    
            <div class="col-5 bg-primary">
                <div class="row " style="margin-top: 320px;">
                    <div class="col-8 offset-2 text-white">
                        <div class="d-flex justify-content-center">
                            <h1>New User?</h1>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p>Go to sigin page to create an new account.</p>
                        </div>
                        <div class="d-flex justify-content-center ">
                            <a href="./sigin.php" class="btn btn-light text-primary rounded shadow-sm w-20">CREATE</a>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
</div>



<?php require_once('./footer.php') ?>