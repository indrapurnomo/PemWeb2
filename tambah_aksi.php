<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$kode = $_POST['kode_barang'];
$nama = $_POST['nama_barang'];
$jumlah = $_POST['jumlah_barang'];
$satuan = $_POST['satuan_barang'];
$harga = $_POST['harga_beli'];
$status = $_POST['status_barang'];

// menginput data ke database
mysqli_query($koneksi,"insert into tb_inventory values('','$kode','$nama','$jumlah','$satuan','$harga','$status')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>