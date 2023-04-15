<?php
    $sql_danhmuc= "SELECT *FROM danhmucsanpham ORDER BY iddanhmuc DESC";
    $query_danhmuc= mysqli_query($connect,$sql_danhmuc);

?>

<div class="menu">
        <ul class="list_menu">
            <li><a href="index.php"> 
                Trang chủ
                    
            <i class="fa-sharp fa-solid fa-house"></i>
            </a></li>
     <?php 
            while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
                ?>
            <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['iddanhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
            <?php 
            } 
        ?>
        </ul>
    </div> 

    <section class="slider owl-carousel owl-theme">
        <div class="slider-item slider-item-one" >

        </div>
        <div class="slider-item slider-item-two" >
            
        </div>
        <div class="slider-item slider-item-three" >
            
        </div>
        <div class="slider-item slider-item-four" >
            
            </div>
        <div class="slider-item slider-item-five" >
            
            </div>
         <div class="slider-item slider-item-six" >
            
            </div>
    </section>

    <!-- <div class="hangdt"> -->
    <div class="hangdt">
        <ul class="list_hangdt">
        <li><img src="https://bizweb.dktcdn.net/100/461/076/themes/872503/assets/image_service1.png?1671161960038" alt="">
        Miễn Phi Giao Hàng <br>
        Miễn phí ship với đơn hàng > 498k <br></li>
        <li><img src="https://bizweb.dktcdn.net/100/461/076/themes/872503/assets/image_service2.png?1671161960038" alt="">
        Thanh Toán COD <br>
        Thanh toán khi nhận hàng (COD) <br></li>
        <li><img src="https://bizweb.dktcdn.net/100/461/076/themes/872503/assets/image_service3.png?1671161960038" alt="">
        Khách Hàng VIP <br>
        Ưu đãi dành cho khách hàng VIP <br></li>
        </ul>
    </div>
  <!-- <h2 style="color:black; text-align:center"> CÁC HẢNG MÁY TÍNH </h2> -->
        <!-- <ul class="hang">
            <li>
                <a href="#">
                    <img src="../images/logomaytinh/acer.jpg">
                </a>
            </li>
        
            <li>
                <a href="#">
                    <img src="../images/logomaytinh/asus.jpg">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="../images/logomaytinh/hp.jpg">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="../images/logomaytinh/mssi.jpg">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="../images/logomaytinh/lenovo.jpg">
                </a>
            </li>
        </ul>
            <ul class="hang1">
            <li>
                <a href="#">
                    <img src="../images/logomaytinh/dell.jpg">
                </a>
            </li>
        
            <li>
                <a href="#">
                    <img src="../images/logomaytinh/logori.jpg">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="../images/logomaytinh/lg.jpg">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="../images/logomaytinh/hw.jpg">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="../images/logomaytinh/acer.jpg">
                </a>
            </li>
            </ul> -->
    </div>
</div>
