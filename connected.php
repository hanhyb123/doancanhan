<?php
      $username = "root"; // Khai báo username
      $password = "";      // Khai báo password
      $server   = "localhost";   // Khai báo server
      $dbname   = "qlybanhang";     // Khai báo database
      
      // Kết nối database tintuc
      $connect = new mysqli($server, $username, $password, $dbname);
        if ($connect->connect_error) {
            // die("Không kết nối :" . $conn->connect_error);
            exit();
        }
        
?>
