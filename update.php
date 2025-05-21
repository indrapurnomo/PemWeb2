<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$kode = $_POST['kode_barang'];
$nama = $_POST['nama_barang'];
$jumlah = $_POST['jumlah_barang'];
$satuan = $_POST['satuan_barang'];
$harga = $_POST['harga_beli'];
$status = $_POST['status_barang'];

// update data ke database
mysqli_query($koneksi, "update tb_inventory set kode_barang='$kode',nama_barang='$nama',jumlah_barang='$jumlah',satuan_barang='$satuan', harga_beli='$harga',status_barang='$status' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
