<?php
    $sql_sua_sanpham="SELECT * FROM sanpham WHERE idsanpham ='$_GET[idsanpham]' LIMIT 1";
    $query_sua_sanpham=mysqli_query($connect,$sql_sua_sanpham);
?>
<h3>Sửa sản phẩm</h3>
<table border="1" width="100%" >
    <form method="POST" action="modules/sanpham/xuly.php?idsanpham=<?php echo $_GET['idsanpham']?> " enctype="multipart.from-data">
        <?php
            while ($row = mysqli_fetch_array($query_sua_sanpham)){
        ?>
   <tr>
        <th> Tên sản phẩm<input type="text" value="<?php echo $row['tensanpham'] ?>" name="tensanpham"> <br></th>
    </tr>
    <tr>
        <td>Hình ảnh sản phẩm <input type="file"  name="hinhanh"><img src="modules/sanpham/uploads/ <?php echo $row['hinhanh'] ?>" width="250px"> 
        </td>
    </tr>
        <tr>
            <td>Giá sản phẩm <input type="text" value="<?php echo $row['giasanpham'] ?>" name="giasanpham"> </td>
    </tr>
        <td> Mã sản phẩm<input type="text" value="<?php echo $row['masanpham'] ?>" name="masanpham"> </td>
    </tr>
<tr>
        <td>Số lượng <input type="text" value="<?php echo $row['soluong'] ?>" name="soluong" ></td>
</tr>
<tr>
    <td>Nội dung <input type="text" value="<?php echo $row['noidung'] ?>" name="noidung"> </td>
</tr>
<tr>
        <td>ID danh muc <input type="text" value="<?php echo $row['iddanhmuc'] ?>" name="iddanhmuc"> </td>
</tr>
<tr>
    <td>Tình trạng</td>
    <td>
        <select name="tinhtrang">
                <?php 
                if($row['tinhtrang']==1){
                 ?>
            <option value="1" selected>Kích hoạt</option>
            <option value="0">Ẩn</option>
            <?php
            }else{ ?>
            <option value="1">Kích hoạt</option>
            <option value="0" selected>Ẩn</option>
            <?php
            }
            ?>
        </select>
    </td>
</tr>
<tr>
    <td> Danh mục sản phẩm </td>
    <td>
        <select name="danhmuc">
            <?php 
            $sql_danhmuc= "SELECT *FROM danhmucsanpham ORDER BY iddanhmuc DESC";
            $query_danhmuc=mysqli_query($connect,$sql_danhmuc);
            while ($row_danhmuc =mysqli_fetch_array($query_danhmuc)){
                ?>
            <option value="<?php echo $row_danhmuc['iddanhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                <?php
                }
                ?>
        </select>
    </td>
</tr>
        <th><input type="submit" name="suasanpham" value="Sửa sản phẩm"></th>
</tr>

</form>
<?php 
}
?>
</table>