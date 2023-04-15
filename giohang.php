<!-- <?php
    session_start();
    ?> -->
<p style="color:blue; ">Giỏ hàng
<?php  
if(isset($_SESSION['dangky'])){
    echo 'xin chào: '.'<span style="color:red;">'.$_SESSION['dangky'].'</span>';
    echo $_SESSION['id_khachhang'];
}
?>
<?php
    if(isset($_SESSION['cart'])){
    }
?>
</p>

<div class="giohang">
 <!-- <p style="color: red;font-size:30px;text-align:center">Giỏ hàng</p> -->
 <table style="width:100%;text-align:center;boder: collapse;" border="1">
<tr>
    <th>ID sản phẩm</th>
    <th>Mã sản phẩm</th>
    <th>Tên sản phảm</th>
    <th>Hình ảnh</th>
    <th>Sô  lượng</th>
    <th>Giá sản phẩm</th>
    <th>Thanh tien</th>
    <th>Quản lý</th>
</tr>
<?php 
if (isset($_SESSION['cart'])){
    $i=0;
    $tongtien=0;
    foreach ($_SESSION['cart'] as $cart_item) {
        $thanhtien= ((int)$cart_item['soluong']*(int)$cart_item['giasanpham']);
        // $thanhtien= $cart_item['soluong']*$cart_item['giasanpham'];
        //tổng tiền cuart các đơn hàng
        $tongtien+=$thanhtien;
        $i++;
    ?>
<tr>
    <td><?php echo $i ?></td>
    <td><?php echo $cart_item['masanpham']; ?></td>
    <td><?php echo $cart_item['tensanpham']; ?></td>
    <td><img src="admin/modules/sanpham/uploads/<?php echo $cart_item['hinhanh']; ?>" width="100px"></td>
    <td>
        <a href="web/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>">
        <i class="fa-sharp fa-solid fa-minus"></i>
        </a>
    <?php echo $cart_item['soluong'];?>
        <a href="web/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>">
        <i class="fa-sharp fa-solid fa-plus"></i>
        </a>

    </td>
   
    <td><?php echo $cart_item['giasanpham'];?></td>
    <td><?php echo $thanhtien .'vnd';?></td>
    <td><a href="web/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>"> Xóa</a></td>
</tr>
<?php 
    }
    ?>
<tr>
    <td colspan="8">
        <tiền style="float:left;">Tổng tiền :<?php echo $tongtien .' vnd'?></p></br>
        <p style="float:right;"><a href="web/main/themgiohang.php?xoatatca=1">Xóa tất cả</a></p>
        <div style="clear:both"></div>
        <?php
                if(isset($_SESSION['dangky'])){
                    ?>
                     <p><a href="web/main/thanhtoan.php">Đặt hàng</a></p>
        <?php
                }else{
        ?>
        <p><a href="index.php?quanly=dangky">Đăng ký đặt hàng</a></p>
        <?php 
                }
        ?>
        
       
        </td>

</tr>

<?php
}else{
?>
<tr>
    <td colspan="8">Hiện tại giỏ hàng trống</td>
</tr>
<?php }?>
</table>
</div>
