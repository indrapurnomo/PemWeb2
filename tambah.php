<!DOCTYPE html>
<html>

<head>
    <title>UTS-Indra-Purnomo-PemogramanWebII</title>
    <!-- Bootstrap pake CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-4">
    <h2>TAMBAH DATA BARANG </h2>
    <br />
    <a href="index.php"class="btn btn-success">KEMBALI</a>
    <br />
    <br />
    <h3>TAMBAH DATA</h3>
    <form method="post" action="tambah_aksi.php">
        <table>
            <tr>
                <td>Kode Barang</td>
                <td><input type="text" name="kode_barang"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
            <tr>
                <td>Jumlah Barang</td>
                <td><input type="number" name="jumlah_barang"></td>
            </tr>
            <tr>
                <td>Satuan Barang</td>
                <td><input type="text" name="satuan_barang"></td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td><input type="number" name="harga_beli"></td>
            </tr>
            <tr>
                <td>Status Barang</td>
                <td><input type="boolean" name="status_barang"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>