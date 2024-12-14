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

                            <form action="./authenticationProcess.php" method="post">
                                <div class="">
                                    <input type="text" class="form-control shadow-sm rounded w-90 mb-3" name="name" id="" placeholder="Enter your name...">
                                </div>

                                <div class="">
                                    <input type="text" class="form-control shadow-sm rounded w-90 mb-3" name="email" id="" placeholder="Enter your email...">
                                </div>

                                <div class="">
                                    <input type="password" class="form-control shadow-sm rounded-5 w-90 mb-3" name="password" id="" placeholder="Enter your password...">
                                </div>

                                <div class="">
                                    <input type="pasword" class="form-control shadow-sm rounded w-90 mb-3" name="comfirm_password" id="" placeholder="Comfirm your password...">
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary rounded shadow-sm " name="btn_sigin" value="sigin">SIGIN</button>
                                </div>   
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
                            <p>Go to loing page to login to your account.</p>
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