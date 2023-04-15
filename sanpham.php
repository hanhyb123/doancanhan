<?php
$sql_chitiet="SELECT * FROM sanpham,danhmucsanpham WHERE sanpham.iddanhmuc=danhmucsanpham.iddanhmuc AND sanpham.idsanpham='$_GET[id]' LIMIT 1";
$query_chitiet=mysqli_query($connect,$sql_chitiet);
while ($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<style>
    .hinhanh_sanpham{
  float: left;
  margin-top: 40px;
  width: 50%;
  margin-left: 270px;
  margin-right: -310px;
}
.hinhanh_sanpham img{
  width: 50%;
  margin-top: -40px;
  /* margin-left: 150px;
  height: 300px; */
}
.wrapper_chitiet{

background-color: rgb(230 243 243);
border: 1px solid black;
 margin: 0 auto;
   width: 96%;
   height: 500px;
}
</style>

<div class="wrapper_chitiet">
<p> chi tiết sản phâm</p>
    <div class="hinhanh_sanpham">
        <img src="admin/modules/sanpham/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
    </div>
    <form action="web/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['idsanpham'] ?>" method="POST">
    <div class="chitiet_sanpham">
        <h3><?php echo $row_chitiet['tensanpham'] ?></h3>
        <p>Mã sp:<?php echo $row_chitiet['masanpham'] ?></p>
        <p>Giá :<?php echo $row_chitiet['giasanpham'] ?></p>
        <p>Số lượng:<?php echo $row_chitiet['soluong'] ?></p>
        <p>Doanh mục:<?php echo $row_chitiet['tendanhmuc'] ?></p>
        <p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm giỏ hảng"></p>
    </div>
    </form>
</div>
<?php } 
?>