<?php
if (isset($_POST['dangky'])){

    $tenkhachhang = $_POST['tenkhachhang'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $matkhau =md5($_POST['matkhau']);
    $sodienthoai = $_POST['sodienthoai'];
  

$sql_dangky = mysqli_query($connect, "INSERT INTO user(tenkhachhang,email,diachi,matkhau,sodienthoai) VALUES ('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$sodienthoai."')");
if($sql_dangky){
        echo'<p style="color:green">Bạn đã đăng kí thành công</p>';
        $_SESSION['dangky']= $tenkhachhang;

        $_SESSION['id_khachhang']= mysqli_insert_id($connect);
        // header('Location:index.php?quanly=giohang');
        
    }
}

?>

<style>
    .maincontent{
 width: 100%;
 height: auto;
  /* border: 4px solid red ; 
  background-color:#eee8f0; */
  float:right;
  margin-top: 20px;
  margin-right: -26px;
  display: block;
}

#wrapper{
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url('https://wallpapers.com/images/hd/manchester-united-animated-art-40jid0b4jk8hyson.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
#form-login{
    max-width: 400px;
    float: left;
    background: rgba(0, 0, 0 , 0.8);
    flex-grow: 1;
    padding: 30px 30px 40px;
    box-shadow: 0px 0px 17px 2px rgba(255, 255, 255, 0.8);
}
.form-heading{
    font-size: 25px;
    color: #f5f5f5;
    text-align: center;
    margin-bottom: 30px;
}
.form-group{
    border-bottom: 1px solid #fff;
    margin-top: 15px;
    margin-bottom: 20px;
    display: flex;
}
.form-group i{
    color: #fff;
    font-size: 14px;
    padding-top: 5px;
    padding-right: 10px;
}
.form-input{
    background: transparent;
    border: 0;
    outline: 0;
    color: #f5f5f5;
    flex-grow: 1;
    margin-left: -27px;
}
.form-input::placeholder{
    color: #f5f5f5;
}
#eye i{
    padding-right: 0;
    cursor: pointer;
}
.form-submit{
    background: transparent;
    border: 1px solid #f5f5f5;
    color: #fff;
    width: 100%;
    text-transform: uppercase;
    padding: 6px 10px;
    transition: 0.25s ease-in-out;
    margin-top: 30px;
    margin-left: 4px;
}
.form-submit:hover{
    border: 1px solid #54a0ff;
}
</style>

<h2>Đăng ký thành viên</h2>
<div id="wrapper">
        <form action=""  method="POST">
            <h1 class="form-heading">Đăng ký thành viên</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" name="tenkhachhang" class="form-input" placeholder="Tên đăng ký">
            </div>
            <div class="form-group">
            <i class="fa-sharp fa-solid fa-envelope"></i>
                <input type="text" name="email" class="form-input" placeholder="Email">
            </div>
            <div class="form-group">
            <i class="fa-sharp fa-solid fa-location-dot"></i>
                <input type="text" name="diachi" class="form-input" placeholder="Địa chỉ">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" name="matkhau" class="form-input" placeholder="Mật khẩu">
            </div>
             <div class="form-group">
                <i class="fa-sharp fa-solid fa-phone"></i>
                <input type="text" name="sodienthoai" class="form-input" placeholder="Số điện thoai">
            </div>  
            <input type="submit" name="dangky" value="Đăng ký" class="form-submit">
            <p><a style="color:white;font-size:20px;" href="index.php?quanly=dangnhap">Đăng nhập nếu bạn có tài khoản trước đó </a></p>
        </form>


  