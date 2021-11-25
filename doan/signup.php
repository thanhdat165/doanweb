<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="./style1.css">
    <title>Registration form</title>
    <script>
        $(document).ready(function(){
                           
    });
    </script>
</head>
<body>
    <section class="Signup register-layout d-flex justify-content-center">
        <div class="registration border1 border2">
            <div class="header-form"><h2>Đăng ký tài khoản</h2></div>
            <form action="#" class="sub-registration" method="">
                <input type="text" class="info-regis border2" name="username" placeholder="Tên đăng nhập"><br>
                <input type="Email" class="info-regis border2" name="email" placeholder="Email"><br>
                <input type="password" class="info-regis border2" name="password" placeholder="Mật khẩu"><br>
                <input type="password" class="info-regis border2" name="repassword" placeholder="Xác nhận mật khẩu"><br>
                <input type="submit" class="info-regis border2 submit" name="dangky" value="Đăng ký">
                <div class="log-in">
                    <div>
                        <p class="header-login">Already have an account?<br></p>
                        <input type="submit" class="info-regis border2 sublogin" value="Đăng nhập" action="">
                    </div>
                    <!-- <form action="">
                        <input type="submit" class="info-regis border2 home" value="Về trang chủ">
                    </form> -->
                    <a href="./home.php" class="info-login border2 home">Về trang chủ</a>
                </div>
            </form>
        </div>
    </section>
    <?php 
        include "connect.php";
        if(isset($_POST['dangky']) && $_POST['dangky'] == 'Đăng ký')
        {
            $tmp_user = '';
            $user = $_POST['username'];
            $pass = $_POST['password'];
            $repass = $_POST['repassword'];
            $str = "select user from login";
            $rs = $connect->query($str);
            if($rs->num_rows > 0)
            {
                while($row = $rs->fetch_row())
                {
                    if($user == $row[0])
                    {
                        echo '<script>alert("User đã tồn tại")</script>';
                        exit;
                    }                  
                    else
                    {
                        if($user != null && $pass != null && $repass != null)
                        {
                            if($pass == $repass)
                            {
                                $sql = "insert into login values('$user', ' $pass')";
                                $result = $connect->query($sql);       
                                if($result == true)
                                {
                                    echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="login.php";</script>';
                                }
                                else
                                {
                                    echo '<script>alert("User đã tồn tại")</script>';  
                                    exit; 
                                }                                  
                            }
                            else
                            {
                                echo '<script>alert("Mật khẩu không trùng khớp")</script>';
                                exit;
                            }
                        }
                        else
                        {
                            echo '<script>alert("Vui lòng nhập đầy đủ thông tin")</script>';
                            exit;
                        }
                    }
                }
            }
            $connect->close();
        }    
    ?>
</body>
</html>