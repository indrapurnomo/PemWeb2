<?php
include 'koneksi.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php?error=ID barang tidak ditemukan");
    exit;
}

$id = intval($_GET['id']);
$jumlah_pemakaian = isset($_POST['jumlah_pemakaian']) ? intval($_POST['jumlah_pemakaian']) : 0;

if ($jumlah_pemakaian <= 0) {
    header("Location: pemakaian.php?id=$id&error=Jumlah pemakaian harus lebih dari 0");
    exit;
}

// Ambil data barang
$query = mysqli_prepare($koneksi, "SELECT jumlah_barang FROM tb_inventory WHERE id = ?");
mysqli_stmt_bind_param($query, "i", $id);
mysqli_stmt_execute($query);
mysqli_stmt_bind_result($query, $jumlah_barang);
if (!mysqli_stmt_fetch($query)) {
    mysqli_stmt_close($query);
    header("Location: index.php?error=Barang tidak ditemukan");
    exit;
}
mysqli_stmt_close($query);

if ($jumlah_pemakaian > $jumlah_barang) {
    header("Location: pemakaian.php?id=$id&error=Jumlah pemakaian melebihi stok yang tersedia");
    exit;
}

$stok_baru = $jumlah_barang - $jumlah_pemakaian;
$status_baru = ($stok_baru == 0) ? 0 : 1; // 0 = Not-Available, 1 = Available

$update = mysqli_prepare($koneksi, "UPDATE tb_inventory SET jumlah_barang = ?, status_barang = ? WHERE id = ?");
mysqli_stmt_bind_param($update, "iii", $stok_baru, $status_baru, $id);
$exec = mysqli_stmt_execute($update);
mysqli_stmt_close($update);

if ($exec) {
    header("Location: index.php?success=Barang berhasil digunakan, stok diperbarui");
    exit;
} else {
    header("Location: pemakaian.php?id=$id&error=Gagal memperbarui data barang");
    exit;
}
?>
