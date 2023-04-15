<?php
    session_start();
     include('./connected/connected.php');
    if (isset($_POST['dangnhap'])){
        $taikhoan=$_POST['username'];
        $matkhau=$_POST['password'];
        $sql="SELECT * FROM admincp WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
        $row=mysqli_query($connect,$sql);
        $count=mysqli_num_rows($row);
    if($count>0){
        $_SESSION['dangnhap']=$taikhoan;
        header("Location:index.php");
    }else{
        echo '<script>>alert("Tài khoản hoặc mặt khẩu không chính xác, vui lòng thử lại.")</script>';
        header("Location:login.php");
    }
    }
?>
<style>

    body{
    background-image: url('https://i.pinimg.com/736x/50/3c/d9/503cd910119c496a01192c3c3d7b55e4.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    }

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styleadmincp.css">
    <title>Đăng nhập admincp</title>
</head>
<body  >
<div id="wrapper">
        <form action="" autocomplete="off" method="POST">
            <h1 class="form-heading" >Đăng nhập</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" name="username" class="form-input" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" name="password" class="form-input" placeholder="Mật khẩu">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <input type="submit" name="dangnhap" value="Đăng nhập" class="form-submit">
        </form>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>
</html>