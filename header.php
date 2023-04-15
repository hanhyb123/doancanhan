<?php 
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['dangky']);

    }
?>

<div class="header">
     <div class="logo"> 
        <a href="#">
        <!-- <img src="../imges/sfanh.webp"> -->
         </a>
        </div>
    <div class="tim">
        <form action="index.php?quanly=timkiem" method="POST">
            <input type="text" placeholder =" Nhập tên linh kiện cần tìm " name="tukhoa"> 
            <button input type="submit" name="timkiem" >
            <i class="fa-solid fa-magnifying-glass"></i>
            </button> 
            </form>
    </div> 
    <div class="list-header">
        <ul class="list">
        <!-- <li><a href="index.php">
               Danh mục
                <i class="fa-sharp fa-solid fa-book"></i>
            </a></li> -->

            <li><a href="index.php">
                Thông tin hay
                <i class="fa-sharp fa-solid fa-book"></i>
            </a></li>
            <!-- <li><a href="index.php?quanly=thanhtoan">
                Thanh toán
                <i class="fa-sharp fa-solid fa-money-check-dollar"></i>
            </a></li> -->

            <li><a href="index.php?quanly=giohang">
                Giỏ hàng
                <i class="fa-sharp fa-solid fa-cart-shopping"></i>
             </a></li>

            <li><a href="index.php?quanly=lienhe">
                <i class="fa-sharp fa-solid fa-phone"></i>
                Liên hệ
            </a></li>
            <?php 
            if(isset($_SESSION['dangky'])){
            ?>
             <li><a href="index.php?dangxuat=1">
                Đăng xuất
                <i class="fa-sharp fa-solid fa-arrow-right-from-bracket"></i>
            </a></li> 

            <li><a href="index.php?quanly=doimatkhau">
                Đổi mật khẩu
                <i class="fa-sharp fa-solid fa-arrows-rotate"></i>
            </a></li>
            <?php
            }else{
            ?>
                <li><a href="index.php?quanly=dangky">
                Tài khoản
                <i class="fa-sharp fa-solid fa-user"></i>
            </a></li>
            <?php }?>
       
        <!--
            <li><a href="index.php?quanly=dangnhap">
                Đăng nhập
                <i class="fa-sharp fa-solid fa-user"></i>

            </a></li> -->
     </ul>
    </div>
  
</div>
   
