<?php
     session_start();
     include('../../admin/connected/connected.php');
    $id_khachhang=$_SESSION['id_khachhang'];
    $code_oder=rand(0,9999);
    $insert_cart="INSERT INTO giohang(id_khachhang,code_cart,cart_status) VALUES('".$id_khachhang."','".$code_oder."',1)";
    $cart_query=mysqli_query($connect,$insert_cart);
    if($cart_query){
            //theem gior hangf chi tiet
            foreach($_SESSION['cart'] as $key => $value){
                $idsanpham=$value['id'];
                $soluong=$value['soluong'];
                $chitietdonhang="INSERT INTO chitietgiohang (idsanpham,code_cart,soluong) VALUES ('".$idsanpham."','".$code_oder."','".$soluong."')";
                mysqli_query($connect,$chitietdonhang);
            }
    }
        unset($_SESSION['cart']);
        header('Location:../../index.php?quanly=camon')


?>