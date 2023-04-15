<?php
    $sql_lietke_sanpham="SELECT * FROM danhmucsanpham,sanpham WHERE sanpham.iddanhmuc=danhmucsanpham.iddanhmuc ORDER BY tensanpham DESC";
    $query_lietke_sanpham=mysqli_query($connect,$sql_lietke_sanpham);

?>
    <h3> Danh sách sản phẩm</h3>
<table style="width:100%; border-collapse:collapse;text-align:center;" border="1px">
    <tr>
        <th>Id sản phẩm</th>
        <th> Tên sản phẩm</th>
        <th> Hình ảnh sản phẩm</th>
        <th> Giá sản phẩm </th>
        <th> Mã sản phẩm </th>
        <th>Số lượng sản phẩm </th>
        <th>Nội dung</th>
        <th>Id danh muc</th>
        <th>Tình trạng</th>
        <!-- <th> danh muc</th> -->
        <th>Chức năng</th>
    </tr>
<?php
$i=0;
    while($row = mysqli_fetch_array($query_lietke_sanpham)){
    $i++;
?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tensanpham'] ?></td>
        <td><img src="modules/sanpham/uploads/<?php echo $row['hinhanh'] ?>" width="200px"></td>
        <td><?php echo $row['giasanpham'] ?></td>
        <td><?php echo $row['masanpham'] ?></td>
        <td><?php echo $row['soluong'] ?></td>
        <td><?php echo $row['noidung'] ?></td>
        <td><?php echo $row['iddanhmuc'] ?></td>
        <td><?php if ($row['tinhtrang']==1){
            echo "Kích hoạt";
        }else{
            echo "Ẩn";
        } 
        ?>
    </tr>

    <!-- <td><?php echo $row['tendanhmuc'] ?></td> -->
    
    <td colspan="2">
       <a href="modules/sanpham/xuly.php?idsanpham=<?php echo $row['idsanpham'] ?>">Xóa </a> |
        <a href="?action=sanpham&query=sua&idsanpham=<?php echo $row['idsanpham'] ?>">sửa</a>
    </td>
    <?php
    }
    ?>
</table>