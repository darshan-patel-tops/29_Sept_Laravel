<?php include('header.php'); 
if (isset( $_SESSION['UserData'])) {
    header("location:index.php");
}
if (isset($_POST['ichhathi-login'])) {
    // echo "<pre>";
    // print_r($_REQUEST);
    // print_r($_POST);
    if ($_POST['username'] == "TOPS" && $_POST['password'] == "123" ) { 
            $_SESSION['OtherData'] = "test";
            $_SESSION['UserData'] = array("username"=>"TOPS","Location"=>"SG");
            // setcookie("userid",array("try"),time()+3600);
            setcookie("userid","TOPS",time()+3600);

        ?>
            <script>
                alert('Login success')
                window.location.href = "dashboard.php";
            </script>
    <?php
    }else{
        echo "<script>alert('Invalid user')</script>";
    }
    # code...
}
echo "</pre>";
?>
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 mt-5">
            <div class="card border-primary mb-3" >
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form method="post">

                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Enter User Name" name="username" id="username">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="password" class="form-control" placeholder="Enter Password" name="password" id="password">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <input type="submit" class="btn btn-primary" name="ichhathi-login" id="jefavete-login" value="Login">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>