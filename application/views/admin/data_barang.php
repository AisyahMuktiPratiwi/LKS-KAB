<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initical-scale=1">
	<title>tokoku</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color:lavender;">
	<header style="background-color: plum; width: 100%;">
		<div class="container">
		<ul style=" color: white; padding-left: 200px; padding-top: 2px;">
			<li style="display: inline-block;"><h1><a href="/tokline" style="color: inherit;text-decoration: none;">HappaiShop</a></h1></li>
			<li style="display: inline-block;"><a href="dashboard_admin" style="color: inherit;text-decoration: none; padding-left: 400px;">Dashboard</a></li>
			<li style="display: inline-block; padding-left: 50px"><a href="data_barang" style="color: inherit;text-decoration: none;">Data Produk</a></li>
			<li style="display: inline-block; padding-left: 50px"><a href="data_pembayaran" style="color: inherit;text-decoration: none; ">Data Invoice</a></li>
			<li style="display: inline-block; padding-left: 50px"><a href="/tokline" style="color: inherit;text-decoration: none; ">Keluar</a></li>
			
		</ul>
	</div>
	</header>



			<div class="section"  style="padding: 25px 0;">
		<div class="container" style="width:80%;margin:0 auto;content:"";display: block;clear: both;">
			<h3 style="color:purple;">Produk</h3>
			<div class="box" style="background-color: plum;">
				<h3 style="color: white; margin : 1rem; padding-top: 10px;"><a href= "data_barang/tambah" style="color: inherit; text-decoration: none;">+ Produk</a></h3>
				<table border="1" cellspacing="0" class="table" style="width: 100%;border-collapse: collapse;background-color: white;border-color: ;">
					<tr style="color: purple">
						<th width="60px;" style="color: purple;">No</th>
						<th>Nama Barang</th>
						<th>Keterangan</th>
						<th>Kategori</th>
						<th>Harga</th>
						<th>Stok</th>
						<th>Gambar</th>
						<th colspan="4">aksi</th>
					</tr>
					<tbody style="color: black">
						<?php 
						$no=1;
						foreach ($barang as $brg) : ?>
							<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $brg->nama_brg ?></td>
							<td><?php echo $brg->keterangan ?></td>
							<td><?php echo $brg->kategori ?></td>
							<td><?php echo $brg->harga ?></td>
							<td><?php echo $brg->stok ?></td>
							<td><?php echo $brg->gambar?></td>
							<td></td>

							<td><?php echo anchor('admin/data_barang/edit/' .$brg->id_brg, '<div class="btn btn-sm" style="background-color: blue; color:white; width: 30px; padding-left:5px;" >Edit</div>')?></td>
							<td>
							<td><?php echo anchor('admin/data_barang/hapus/' .$brg->id_brg, '<div class="btn btn-sm" a href="data_barang" style="background-color: green; color:white; width: 50px; padding-left:5px;" >Hapus</div>')?></td>
							<td>
						</tr> 
						<?php endforeach; ?>
					
					</tbody>
				</table>
			</div>
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