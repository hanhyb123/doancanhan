<?php
if(isset($_GET['trang'])){
    $page=$_GET['trang'];
}else{
    $page=1;
}
if($page==''||$page==1){
    $begin=0;
}
else{
    $begin=($page*6)-6;
}
    $sql_product= "SELECT *FROM sanpham ,danhmucsanpham WHERE sanpham.iddanhmuc=danhmucsanpham.iddanhmuc 
    ORDER BY sanpham.idsanpham DESC LIMIT $begin,12";
    $query_product= mysqli_query($connect,$sql_product);

?>
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
    <style>
        ul.product_list{
            padding-left: 0px;
            padding-right: 40px;
            margin: 0;
            list-style: none;
            width: 93%;
        }
        ul.product_list li{
            width: 15%;
            border: 1px solid white;
            margin: 4px;
            float: left;
            background: white; 
        }
        ul.product_list li img{
            width: 100%;
        }
        ul.list_trang{
            margin: 0;
            padding: 0;
            list-style: none;
            margin-left: 45%;
        }
        ul.list_trang li{
            float: left;
            padding: 5px 13px;
            margin: 5px;    
            background:red;
        }
        ul.list_trang li a{
            color:aliceblue;
            text-align: center;
            text-decoration: none;
        }
        ul.list_trang{
            margin: 0;
            padding: 0;
            list-style: none;
            margin-left: 45%;
        }
        ul.list_trang li{
            float: left;
            padding: 5px 13px;
            margin: 5px;
            /* background:red; */
           
        }
        ul.list_trang li a{
            color:aliceblue;
            text-align: center;
            text-decoration: none;
            color:black;
        }
    </style>
    <div class="clear"></div>
    <p style="color:black;text-align:center">Trang :<span style="color:darkgoldenrod"><?php echo $page ?></span></p>
    <?php
        $sqltrang=mysqli_query($connect,"SELECT * FROM sanpham");
        $row_count=mysqli_num_rows($sqltrang);
        $trang=ceil($row_count/6);
    ?>
    <ul class="list_trang">
        <?php  
            for($i=1;$i<=$trang;$i++){
        ?>

        <li <?php 
        if($i==$page){
            echo 'style="background:brown;';
        }else{
                echo '';
            } 
            ?>>
            <a href="index.php?trang=<?php echo $i?>"><?php echo $i?></a></li>
        <?php }?>
    </ul>