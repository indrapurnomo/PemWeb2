<?php
include 'koneksi.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php?error=ID barang tidak ditemukan");
    exit;
}

$id = intval($_GET['id']);
$jumlah_tambah = isset($_POST['jumlah_tambah']) ? intval($_POST['jumlah_tambah']) : 0;

if ($jumlah_tambah <= 0) {
    header("Location: penambahan.php?id=$id&error=Jumlah penambahan harus lebih dari 0");
    exit;
}

// Ambil data barang
$query = mysqli_prepare($koneksi, "SELECT jumlah_barang, status_barang FROM tb_inventory WHERE id = ?");
mysqli_stmt_bind_param($query, "i", $id);
mysqli_stmt_execute($query);
mysqli_stmt_bind_result($query, $jumlah_barang, $status_barang);
if (!mysqli_stmt_fetch($query)) {
    mysqli_stmt_close($query);
    header("Location: index.php?error=Barang tidak ditemukan");
    exit;
}
mysqli_stmt_close($query);

$stok_baru = $jumlah_barang + $jumlah_tambah;
$status_baru = ($status_barang == 0 && $stok_baru > 0) ? 1 : $status_barang; // ubah ke Available jika sebelumnya Not-Available dan stok > 0

$update = mysqli_prepare($koneksi, "UPDATE tb_inventory SET jumlah_barang = ?, status_barang = ? WHERE id = ?");
mysqli_stmt_bind_param($update, "iii", $stok_baru, $status_baru, $id);
$exec = mysqli_stmt_execute($update);
mysqli_stmt_close($update);

if ($exec) {
    header("Location: index.php?success=Stok barang berhasil ditambahkan");
    exit;
} else {
    header("Location: penambahan.php?id=$id&error=Gagal memperbarui data barang");
    exit;
}
?>
