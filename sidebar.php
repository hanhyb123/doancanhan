 <!-- <div class="sidebar">
         <ul class="list_sidebar">
            <?php

            $sql_danhmuc="SELECT *FROM  danhmucsanpham ORDER BY iddanhmuc DESC";
            $query_danhmuc=mysqli_query($connect,$sql_danhmuc);
            while($row=mysqli_fetch_array($query_danhmuc)){
            ?>
            <li><a href=" index.php?quanly=danhmucsanpham&id=<?php echo $row['iddanhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a></li>
            <?php 
            }
            ?>
        </ul>
        </div>   -->