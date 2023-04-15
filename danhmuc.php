<?php
    $sql_product= "SELECT *FROM sanpham  WHERE sanpham.iddanhmuc='$_GET[id]' ORDER BY idsanpham DESC";
    $query_product= mysqli_query($connect,$sql_product);

    $sql_cate= "SELECT *FROM danhmucsanpham WHERE danhmucsanpham.iddanhmuc='$_GET[id]' LIMIT 1";
     $query_cate= mysqli_query($connect,$sql_cate);
    $row_title=mysqli_fetch_array($query_cate);
?>

<h3>Danh mục sản phảm :<?php echo $row_title['tendanhmuc']?> </h3>
<ul class="product_list">
        <?php 
            while($row_pro=mysqli_fetch_array($query_product)){
        ?>
        <li>
        <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['idsanpham'] ?>">
                    <img src="admin/modules/sanpham/uploads/<?php echo $row_pro['hinhanh'] ?>">
                    <p class="title_product">Tên sản phẩm: <?php echo $row_pro['tensanpham'] ?></p>    
                    <p class="price_product">Giá:<?php echo ( $row_pro['giasanpham']).'vnđ'?></p>
                    </a>
            </li>
            <?php
            }
            ?>
                       
    </ul> 