<?php
    include('../../connected/connected.php');
    $tensanpham =$_POST['tensanpham'];
    $hinhanh =$_FILES['hinhanh']['name'];
    $hinhanh_tmp= $_FILES['hinhanh']['tmp_name'];
    $hinhanh=time().'_'.$hinhanh;
    $giasanpham=$_POST['giasanpham'];
    $masanpham=$_POST['masanpham'];
    $soluong=$_POST['soluong'];
    //xulyhinhanh

    $noidung=$_POST['noidung'];
    $iddanhmuc=$_POST['iddanhmuc'];
    $tinhtrang=$_POST['tinhtrang'];
    // $danhmuc=$_POST['danhmuc'];

        
    if(isset($_POST['themsanpham'])){
            $sql_them = "INSERT INTO sanpham(tensanpham,hinhanh,giasanpham,masanpham,soluong,noidung,iddanhmuc,tinhtrang) VALUES('".$tensanpham."','".$hinhanh."','".$giasanpham."','".$masanpham."','".$soluong."','".$noidung."','".$iddanhmuc."','".$tinhtrang."')";
            mysqli_query($connect, $sql_them);
            move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
            header('Location:..\..\index.php?action=sanpham&query=them');
    }
    elseif(isset($_POST['suasanpham'])){
        if($hinhanh !=''){
            move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
            $sql = "SELECT * FROM  sanpham WHERE idsanpham='$_GET[idsanpham]' LIMIT 1";
            $query= mysqli_query($connect,$sql);
            while($row = mysqli_fetch_array($query)){
                unlink('./uploads/'.$row['idsanpham']);
            }
            $sql_update = "UPDATE sanpham SET  tensanpham='".$tensanpham."',hinhanh='".$hinhanh."',giasanpham='".$giasanpham."',masanpham='".$masanpham."',soluong='".$soluong."',noidung='".$noidung."',iddanhmuc'".$iddanhmuc."',tinhtrang='".$tinhtrang."' WHERE idsanpham='$_GET[idsanpham]'";
        }
        else{
            $sql_update = "UPDATE sanpham SET  tensanpham='".$tensanpham."',hinhanh='".$hinhanh."',giasanpham='".$giasanpham."',masanpham='".$masanpham."',soluong='".$soluong."',noidung='".$noidung."',iddanhmuc'".$iddanhmuc."',tinhtrang='".$tinhtrang."' WHERE idsanpham='$_GET[idsanpham]'";
        }
            mysqli_query($connect,$sql_update);
        header('Location:..\..\index.php?action=sanpham&query=them');
         }
        
    else{
        $id=$_GET['idsanpham'];
        $sql="SELECT * FROM sanpham WHERE idsanpham='$id' LIMIT 1";
        $query=mysqli_query($connect,$sql);
        while($row=mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_xoa = "DELETE FROM sanpham WHERE idsanpham ='".$id."'";
        mysqli_query($connect,$sql_xoa);
        header('Location:../../index.php?action=sanpham&query=them');
    }


?>