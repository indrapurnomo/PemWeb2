<!DOCTYPE html>
<html>

<head>
    <title>UTS-Indra-Purnomo-PemogramanWebII</title>
    <!-- Bootstrap pake CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h2>PEMAKAIAN BARANG</h2>
        <a href="index.php" class="btn btn-success">Kembali</a>
        <br>
        <br>
        <h3>BARANG DIPAKAI</h3>
        <?php
        if (!isset($_GET['id']) || empty($_GET['id'])) {
            echo '<div class="alert alert-danger">ID barang tidak ditemukan.</div>';
            exit;
        }

        $id = $_GET['id'];
        $error = '';
        if (isset($_GET['error'])) {
            $error = htmlspecialchars($_GET['error']);
        }
        ?>

        <?php if ($error) : ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="post" action="pemakaian_aksi.php?id=<?php echo $id; ?>">
            <tr>
                <td>Jumlah Pemakaian</td>
                <td>
                    <input type="number" name="jumlah_pemakaian" min="1" required>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-primary">PAKAI BARANG</button>
                </td>
            </tr>
        </form>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>