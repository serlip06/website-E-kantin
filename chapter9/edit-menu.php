<?php
include("config.php");
//ambil id dari query string
$id = $_GET['id'];
$sql = "SELECT * FROM menu WHERE id=$id";
$query = mysqli_query($koneksi, $sql);
$menu = mysqli_fetch_assoc($query);
// buat query untuk ambil data dari database
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Menu</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Palanquin+Dark&display=swap" rel="stylesheet">
</head>
<body>
<header>
<a href="index.php" class="logo">kantinSekul</a>
<ul class="navigasi">
<li><a class="nav-item nav-link active" href="output-menu.php">Edit Produk</a></li>
<li><a class="nav-item nav-link active" href="tambah-produk.php">Tambah Produk</a></li>
<li><a class="nav-item nav-link active" href="tambah-user.php">Tambah User</a></li>
<li><a class="nav-item nav-link active" href="user-edit.php">Edit user</a></li>
<li><a class="nav-item nav-link active" href="logout.php">Logout</a></li>
</ul>
</header>
<div class="banner">
<div class="mx-auto" style="width: 1000px;">
<div class="card">
<h4 class="card-header">Edit Data</h4>
<div class="card-body">
<?php if (isset($_GET['status'])) : ?>
<?php
if ($_GET['status'] == 'gagal') {
?>
<div class="alert alert-danger" role="alert">
<label>Gagal mengedit data</label>
</div>
<?php
header("refresh:3;url=index.php");
}
?>
<?php
if ($_GET['status'] == 'sukses') {
?>
<div class="alert alert-success" role="alert">
<label>Berhasil mengedit data</label>
</div>
<?php
header("refresh:3;url=index.php");
}
?>
<?php endif; ?>
<form action="proses-edit-produk.php" method="POST">
<input type="hidden" name="id" value="<?php echo $menu['id'] ?>">
<div class="mb-3 row">
<label for="nim" class="col-sm-2 col-form-label">Nama Menu</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="nama" name="nama_produk" value="<?php echo $menu['nama_produk'] ?>">
</div>
</div>
<div class="mb-3 row">
<label for="nama" class="col-sm-2 col-form-label">Kategori</label>
<div class="col-sm-10">
<select class="form-control" id="kategori" name="kategori">
<option value="makanan" <?php if ($menu['kategori'] == "makanan") echo "selected" ?>>Makanan</option>
<option value="minuman" <?php if ($menu['kategori'] == "minuman") echo "selected" ?>>Minuman</option>
</select>
</div>
</div>
<div class="mb-3 row">
<label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
<div class="col-sm-10">
<textarea class="form-control" id="deskripsi" name="deskripsi_produk"><?php echo $menu['deskripsi_produk']; ?></textarea>
</div>
</div>
<div class="mb-3 row">
<label for="alamat" class="col-sm-2 col-form-label">Harga</label>
<div class="col-sm-10">
<input type="number" class="form-control" id="harga" name="harga_produk" value="<?php echo $menu['harga_produk'] ?>">
</div>
</div>
<div class="mb-3 row">
<label for="alamat" class="col-sm-2 col-form-label">Stok</label>
<div class="col-sm-10">
<input type="number" class="form-control" id="stok" name="stok" value="<?php echo $menu['stok'] ?>">
</div>
</div>
<div class="mb-3 row">
<label for="alamat" class="col-sm-2 col-form-label">Gambar</label>
<div class="col-sm-10">
<img src="uploads/<?php echo $menu['gambar'] ?>" style="width: 100px;" class="mb-2">
<input type="file" class="form-control" id="gambar" name="gambar">
</div>
</div>
<button type="submit" name="simpan" id="simpan" class="btn btn-primary px-4 py-2 me-3 ">Simpan</button>
<a href="output-menu.php"><button class="btn btn-outline-secondary me-2 my-3 px-4" type="button">Batal</button></a>
</form>
</div>
</div>
</div>
</div>
</body>
</html>
