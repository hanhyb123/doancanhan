<?php
if( isset($_POST['timkiem'])){
    $tukhoa=$_POST['tukhoa'];
}else{
    $tukhoa='';
}
    $sql_product= "SELECT *FROM sanpham  WHERE tensanpham LIKE '%".$tukhoa."%'";
    $query_product= mysqli_query($connect,$sql_product);

?>
<h3>Từ khóa tìm kiếm:<span style="color:brown;"><?php echo $_POST['tukhoa']?></span>
    </h3>
    <ul class="product_list">

<?php
 while($row=mysqli_fetch_array($query_product)){
            ?>
            <li>
        <a href="index.php?quanly=sanpham&id=<?php echo $row['idsanpham'] ?>">
                    <img src="admin/modules/sanpham/uploads/<?php echo $row['hinhanh'] ?> ">
                    <p class="title_product"><?php echo $row['tensanpham'] ?></p>    
                    <p class="price_product">Giá:<?php echo $row['giasanpham'].'vnđ'?></p>

                    </a>
            </li>
            <?php
            }
            ?>
            
    </ul> 