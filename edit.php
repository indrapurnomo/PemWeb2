<!DOCTYPE html>
<html>

<head>
    <title>UTS-Indra-Purnomo-PemogramanWebII</title>
    <!-- Bootstrap pake CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-4">
    <h2>EDIT DATA BARANG </h2>
    <br />
    <a href="index.php" class="btn btn-success">KEMBALI</a>
    <br />
    <br />
    <h3>EDIT DATA</h3>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from tb_inventory where id='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="update.php">
            <table>
                <tr>
                    <td>Kode Barang</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="kode_barang" value="<?php echo $d['kode_barang']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td>
                        <input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Barang</td>
                    <td>
                        <input type="text" name="jumlah_barang" value="<?php echo $d['jumlah_barang']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Satuan Barang</td>
                    <td>
                        <input type="text" name="satuan_barang" value="<?php echo $d['satuan_barang']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Harga Beli</td>
                    <td>
                        <input type="number" name="harga_beli" value="<?php echo $d['harga_beli']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Status Barang</td>
                    <td>
                        <input type="text" name="status_barang" value="<?php echo $d['status_barang']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
        </div>
    <?php
    }
    ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html><!DOCTYPE html>
<html>

<head>
    <title>UTS-Indra-Purnomo-PemogramanWebII</title>
    <!-- Bootstrap pake CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-4">
    <h2>EDIT DATA BARANG </h2>
    <br />
    <a href="index.php" class="btn btn-success">KEMBALI</a>
    <br />
    <br />
    <h3>EDIT DATA</h3>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from tb_inventory where id='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="update.php">
            <table>
                <tr>
                    <td>Kode Barang</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="kode_barang" value="<?php echo $d['kode_barang']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td>
                        <input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Barang</td>
                    <td>
                        <input type="text" name="jumlah_barang" value="<?php echo $d['jumlah_barang']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Satuan Barang</td>
                    <td>
                        <input type="text" name="satuan_barang" value="<?php echo $d['satuan_barang']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Harga Beli</td>
                    <td>
                        <input type="number" name="harga_beli" value="<?php echo $d['harga_beli']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Status Barang</td>
                    <td>
                        <input type="text" name="status_barang" value="<?php echo $d['status_barang']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN" class="btn btn-primary"></td>
                </tr>
            </table>
        </form>
        </div>
    <?php
    }
    ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>