<!DOCTYPE html>
<html>

<head>
    <title>UTS-Indra-Purnomo-PemogramanWebII</title>
    <!-- Bootstrap pake CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h2>Indra Purnomo (Data Barang)</h2>
    <br />
    <a href="tambah.php" class="btn btn-success">+ TAMBAH BARANG</a>
    <br />
    <br />
    <table class="table table-hover table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>NO</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Satuan Barang</th>
                <th>Harga Beli</th>
                <th>Status Barang</th>
                <th>OPSI</th>
            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from tb_inventory");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['kode_barang']; ?></td>
                <td><?php echo $d['nama_barang']; ?></td>
                <td><?php echo $d['jumlah_barang']; ?></td>
                <td>
                    <select name="satuan_barang" disabled>
                        <option value="kg" <?php if ($d['satuan_barang'] == 'kg') echo 'selected'; ?>>kg</option>
                        <option value="pcs" <?php if ($d['satuan_barang'] == 'pcs') echo 'selected'; ?>>pcs</option>
                        <option value="liter" <?php if ($d['satuan_barang'] == 'liter') echo 'selected'; ?>>liter</option>
                        <option value="meter" <?php if ($d['satuan_barang'] == 'meter') echo 'selected'; ?>>meter</option>
                        <option value="bungkus" <?php if ($d['satuan_barang'] == 'bungkus') echo 'selected'; ?>>bungkus</option>
                    </select>
                </td>
                <td><?php echo $d['harga_beli']; ?></td>
                <td>
                    <input type="radio" name="status_barang_<?php echo $d['id']; ?>" value="1" disabled <?php if ($d['status_barang']) echo 'checked'; ?>> Available
                    <input type="radio" name="status_barang_<?php echo $d['id']; ?>" value="0" disabled <?php if (!$d['status_barang']) echo 'checked'; ?>> Not-Available
                </td>
                </td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-warning">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus barang ini?')">HAPUS</a>
                    <a href="penambahan.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-primary">TAMBAH STOK</a>
                    <a href="pemakaian.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-info">PAKAI BARANG</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>