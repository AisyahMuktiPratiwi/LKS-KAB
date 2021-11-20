
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
				<h3>Edit Data Produk</h3>
				<div class="box">
					<?php foreach($barang as $brg) : ?>
				<form action="<?php echo base_url(). 'index.php/admin/data_barang/update';?>" method="POST" >
					<input type="hidden" name="id_brg" value="<?php echo $brg->id_brg ?>">
					<input type="text" name="nama_brg"class="input-control" value="<?php echo $brg->nama_brg ?>" required style="border-color: blue;">
					<input class="input-control" name="keterangan" type="text" value="<?php echo $brg->keterangan ?>" style="border-color: blue"></input>
					<input type="text" name="kategori" value="<?php echo $brg->kategori ?> "class="input-control" required style="border-color: blue;">
					<input type="text" name="harga" value="<?php echo $brg->harga ?>" class="input-control" required style="border-color: blue;">
					<input type="text" name="stok" value="<?php echo $brg->stok ?>" class="input-control" required style="border-color: blue;">
					<input type="submit" name="submit" class="btn" style="background-color: magenta; color:white" >				
				</form>
				<?php endforeach; ?>
				
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