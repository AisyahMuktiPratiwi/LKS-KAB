
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initical-scale=1">
	<title>tokoku</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
	.input-control {
	width: 100%;
	padding: 10px;
	margin-bottom:  15px;
	box-sizing: border-box;
}
.box {
	background-color: white;
	border:1px solid magenta;
	padding:15px;
	box-sizing: border-box;
	margin: 10px 0;
}
.container {
	width:80%;
	margin:0 auto;
}



	</style>
</head>
<body style="background-color:lavender;">
	<header style="background-color: plum; width: 100%;">
		<div class="container">
		<ul style=" color: white; padding-left: 200px; padding-top: 2px;">
			<li style="display: inline-block;"><h1><a href="/tokline" style="color: inherit;text-decoration: none;">HappaiShop</a></h1></li>
			<li style="display: inline-block;"><a href="dashboard_admin" style="color: inherit;text-decoration: none; padding-left: 400px;">Dashboard</a></li>
			<li style="display: inline-block; padding-left: 50px"><a href="data_barang" style="color: inherit;text-decoration: none;">Data Produk</a></li>
			<li style="display: inline-block; padding-left: 50px"><a href="data-produk.php" style="color: inherit;text-decoration: none; ">Keluar</a></li>
			
		</ul>
	</div>
	</header>
		<div class= "section">
		<div class="container">
			<h3>Tambah Data Produk</h3>
			<div class="box">
				<form action="<?php echo base_url(). 'index.php/admin/data_barang/tambah_aksi';?>" method="POST" enctype="multipart/form-data">
					<input type="text" name="nama_brg" placeholder="Nama Barang"class="input-control" required style="border-color: blue;">
					<textarea class="input-control" name="keterangan" placeholder="Keterangan" style="border-color: blue"></textarea>
					<input type="text" name="kategori" placeholder="Kategori" class="input-control" required style="border-color: blue;">
					<input type="text" name="harga" placeholder="Harga" class="input-control" required style="border-color: blue;">
					<input type="text" name="stok" placeholder="Stok" class="input-control" required style="border-color: blue;">
					<input type="file" name="gambar" class="input-control" required style="border-color: blue;">
					<input type="submit" name="submit" value="submit" class="btn" style="background-color: magenta; color:white">
				</form>
			</div>
		</div>
	</div>



<footer>
	<div class="container" style="width:80%;margin:0 auto;content:"";display: block;clear: both;">
		<small style="">copyright &copy; 20201 - HappaiShop.</small>
	</div>
</footer>
</body>
</html>