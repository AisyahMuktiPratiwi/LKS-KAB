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
			<h3 style="color:purple;">Pembayaran</h3>
			<div class="box" style="background-color: plum;">
				<table border="1" cellspacing="0" class="table" style="width: 100%;border-collapse: collapse;background-color: white;border-color: ;">
					<tr style="color: purple">
						<th width="60px;" style="color: purple;">No</th>
						<th>Nama Pelanggan</th>
						<th>Alamat</th>
						<th>No HP</th>
						<th>Metode</th>
						<th>rekening</th>
						<th>Bukti</th>
						
					</tr>
					<tbody style="color: black">
						<?php 
						$no=1;
						foreach ($invoice as $invo) : ?>
							<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $invo->nama_user ?></td>
							<td><?php echo $invo->alamat ?></td>
							<td><?php echo $invo->no_hp ?></td>
							<td><?php echo $invo->metode ?></td>
							<td><?php echo $invo->rekening ?></td>
						<td><img src="<?php echo base_url().'/upload/'.$invo->bukti ?>" style="width: 5rem;"></td>
							
				
						<?php endforeach; ?>
					</tr>
					
					</tbody>

		
				</table>
				<table border="1" cellspacing="0" class="table" style="width: 100%;border-collapse: collapse;background-color: white;border-color:plum; text-align: center; margin-top: 1rem;">
					<tr style="color: purple">
						<th width="60px;" style="color: purple;">No</th>
						<th>Nama Produk</th>
						<th>Jumlah</th>
						<th>Harga</th>
						<th>Subtotal</th>
					</tr>
					<tbody style="color: black">
						<?php 
						$no=0;
						foreach ($this->cart->contents() as $items) : ?>
							<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $items['name'] ?></td>
							<td><?php echo $items['qty'] ?></td>
							<td>Rp.<?php echo number_format($items['price']) ?></td>
							<td>Rp.<?php echo  number_format($items['subtotal'],  0,',',',') ?></td>
							</tr> 

						<?php endforeach; ?>
						<tr>
							<td colspan="4"></td>
							<td><b>Rp..<?php echo number_format($this->cart->total(), 0,',',',')?></b></td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>
	</div>
	</div>