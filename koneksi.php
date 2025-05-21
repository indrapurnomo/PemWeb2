<?php
//$koneksi = mysqli_connect("localhost","root","","db_inventory");
$koneksi = mysqli_connect("sql310.infinityfree.com","if0_38971823","y9zJMkg0dN5Ua0","if0_38971823_db_inventory");
// Check connection
if (mysqli_connect_errno()){
echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>