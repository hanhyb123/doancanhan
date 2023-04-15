<div class="them">
 <table border="1" width="100%" style="border-collapse: collapse;">
 <h3> Thêm sản phẩm</h3>
    <form method="POST" action="modules/sanpham/xuly.php" enctype="multipart/form-data">
   
    <tr>
        <td>Tên sản phẩm </td>
        <td><input type="text" name="tensanpham"></td>
    </tr>
    <tr>
        <td>Hình ảnh</td>
         <td><input type="file" name="hinhanh"></td>
</tr>
<tr>
        <td>Giá sản phẩm</td>
        <td><input type="text" name="giasanpham"> </td>
</tr>
    <tr>
        <td> Mã sản phẩm</td>
      <td> <input type="text" name="masanpham"></td>
    </tr>

<tr>
    <td>Số lượng</td>
        <td> <input type="text"  name="soluong"></td>
</tr>

<tr>
    <td>  Nội dung</td>
       <td><textarea rows="5" name="noidung"></textarea></td>
</tr>
<td> ID danh muc</td>
<td> <input type="text"  name="iddanhmuc"></td>
</tr>
<tr>
    <td>Tình trạng</td>
    <td>
        <select name="tinhtrang">
            <option value="1">Kích hoạt</option>
            <option value="0">Ẩn</option>
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


        <td colspan="2"><input type="submit" name="themsanpham" value="Thêm danh mục sản phẩm"></td>
</tr>
</form>
</table>
</div>


