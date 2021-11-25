<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <title>Login form</title>
        <script>
            // $(document).ready(function(){
            //    $(".subsignup").click(function(){
            //        header('location: ./signup.html');
            //    })         
        //});
        </script>
    </head>
    <body>
        <!-- Đăng nhập -->
        <section class="Login register-layout d-flex justify-content-center">
            <div class="registration border1 border2">
                <div class="header-form"><h2>Đăng nhập</h2></div>
                <form action="" method="" class="sub-login">
                    <input type="text" class="info-login info-login border2" name="username/email" placeholder="Tên tài khoản/Email"><br>  
                    <input type= "password" class="info-login border2 " name="login-pass" placeholder="Mật khẩu"><br>
                    <input type="submit" class="info-login border2 btn-submit" name="dangnhap" value="Đăng nhập"><br>
                    <a href="" class="forget-pass">Quên mật khẩu?</a>
                    <div class="sign-up">
                        <div>
                            <p class="header-signup">Need an account?<br></p>
                            <input type="submit" class="info-login border2 subsignup" value="Đăng ký" action="./signup.html">
                        </div>
                        <!-- <form action="home.html">
                            <input type="submit" class="info-login border2 home" value="Về trang chủ">
                        </form> -->
                        <a href="./home.php" class="info-login border2 home">Về trang chủ</a>
                    </div>
                </form>
            </div>
        </section>
    </body>
</html>