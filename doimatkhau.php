<style>
    .form {
 width: 300px;
 border: 1px solid green;
 padding: 20px;
 margin: 0 auto;
 font-weight: 700px;
 width: 480px;
}
.form input {
 width: 100%;
 padding: 10px 0;
} 

 #wrapper{
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url('../../images/2.jpg');
}
#form-login{
    max-width: 400px;

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
}
.form-submit:hover{
    border: 1px solid #54a0ff;
}
</style> 

<?php 
 include('admin/connected/connected.php');
?>
<?php
 
if(isset($_POST['doidangnhap'])){
    $email = $_POST['email'];
    $matkhaucu = md5($_POST['matkhaucu']);
    $matkhaumoi = md5($_POST['matkhaumoi']);
    $sql = "SELECT *FROM user WHERE email='$email' AND matkhau ='$matkhaucu' LIMIT 1";
    $row = mysqli_query($connect,$sql);
    $count = mysqli_num_rows($row);
    if($count>0){
       $sql_update=mysqli_query($connect,"UPDATE user SET matkhau='".$matkhaumoi."'");

        // header("Location:index.php?quanly=giohang");
        echo  '<p style="font-size:20px;color: red;" >Đã thay đổi mật khẩu thành công</p>';
    }else{
        echo '<p style="color:red">Tài khoản hoặc mặt khẩu không chính xác, vui lòng nhập lại.</p>';
    }
}
?>
<div id="wrapper">
        <form action="" autocomplete="off" method="POST">
            <h1 class="form-heading">Đổi mật khẩu</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" name="email" class="form-input" placeholder="Tên tài khoản">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" name="matkhaucu" class="form-input" placeholder="Mật khẩu củ">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
                <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" name="matkhaumoi" class="form-input" placeholder="Mật khẩu mới">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <input type="submit" name="doidangnhap" value="Đổi mật khẩu" class="form-submit">
        </form>
    </div>