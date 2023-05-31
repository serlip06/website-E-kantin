<!DOCTYPE html>
<html lang="en">
<?php
include("config.php");
include("foradmin.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Palanquin+Dark&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <a href="index.php" class="logo">E-Kantin</a>
        <ul class="navigasi">
            <li><a class="nav-item nav-link active" href="output-menu.php">Edit Produk</a></li>
            <li><a class="nav-item nav-link active" href="tambah-produk.php" style="color: white; font-weight: 600;">Tambah Produk</a></li>
            <li><a class="nav-item nav-link active" href="tambah-user.php">Tambah User</a></li>
            <li><a class="nav-item nav-link active" href="user-edit.php">Edit user</a></li>
            <li><a class="nav-item nav-link active" href="logout.php">Logout</a></li>
        </ul>

    </header>
    <div class="banner">
        <div class="mx-auto">
            <div class="card">
                <h4 class="card-header">Tambahkan Menu</h4>
                <div class="card-body">
                    <?php if (isset($_GET['status'])) : ?>
                        <?php
                        if ($_GET['status'] == 'gagal') {
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <label>Gagal memasukkan data</label>
                            </div>
                        <?php
                            header("refresh:3;url=index.php");
                        }
                        ?>
                        <?php
                        if ($_GET['status'] == 'sukses') {
                        ?>
                            <div class="alert alert-success" role="alert">
                                <label>Berhasil memasukkan data baru</label>
                            </div>
                        <?php
                            header("refresh:3;url=index.php");
                        }
                        ?>
                    <?php endif; ?>
                    <form action="proses-input.php" method="POST" enctype="multipart/form-data">
                        <div class=" mb-3 row">
                            <label for="nim" class="col-sm-2 col-form-label">Nama Produk</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama_produk" placeholder="Masukkan nama..">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jurusan" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="kategori" name="kategori">
                                    <option value="">- Kategori -</option>
                                    <option value="skincare" name="makanan">Skincare</option>
                                    <option value="makeup" name="minuman">Alat Make Up</option>
                                    <option value="lainnya" name="minuman">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="deskripsi" name="deskripsi_produk" placeholder="Tambahkan deskripsi.."></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="harga" name="harga_produk" placeholder="Masukkan harga..">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jurusan" class="col-sm-2 col-form-label">Stok</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="stok" name="stok" placeholder="Masukkan stok..">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jurusan" class="col-sm-2 col-form-label">Gambar</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="gambar">
                            </div>
                        </div>

                        <span>
                            <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">
                            <input type="reset" value="Reset" class="btn btn-danger ms-1">
                        </span>
                    </form>
                </div>
            </div>

        </div>
    </div>

</body>

</html>