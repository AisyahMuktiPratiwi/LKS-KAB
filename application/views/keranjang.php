<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initical-scale=1">
	<title>tokoku</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<style>
		* {
 padding: 0;
 margin: 0;
}
body {
	background-color: lavender;
}
a{
	color: inherit;
	text-decoration: none;
}
header {
	background-color: plum;
	color:white;
}

header h1 {
	float: left;
	padding:10px;
}

.container {
	width:80%;
	margin:0 auto;
}

.container:after {
	content: "";
	display: block;
	clear: both;

}

.container h3 {
	color: purple;
}
.footer {
	padding: 25px 0;
	background-color: plum;
	color:white;
	text-align: center;
	margin-top: 25rem;
}
.footer p{
	margin-bottom: 10px;
}

.footer small{
	margin-top:10px;
	display: inline-block;
}



	</style>

</head>
<body>
	<header>
		<div class="container">
		<h1><a href="/tokline">TokoKu</a></h1>
		<h3 style="margin-left: 300px; text-align: center; color: white; padding-top: 20px;"><?php $keranjang ='Keranjang'.$this->cart->total_items(). 'items'?>
			<?php echo anchor('dashboard/detail_keranjang',$keranjang)?> </h3>
		
	</div>
	</header>
		<div class="container">
			<h3 style="color:purple; margin-top: 3rem" >Keranjag Belanja</h3>
			
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
				<div style="margin-top: 1rem; float: right">
				<div class="btn btn-sm" style="background-color: magenta; width:50px; float:left; color:white"><a href="hapus_keranjang"> Hapus</a></div>
				<div class="btn btn-sm" style="background-color: green; margin-left: 8px; width:70px; float:left; color:white"><a href="pembayaran">Checkout</a></div>



				</div>
			</div>
		</div>
	</div>
	</div>

<div class="footer">
	<div class="container">
		<h4>Alamat</h4>
		<p>Wanaherang Gunung Putri Bogor</p>

		<h4>Email</h4>
		<p>aisyahmuktipratiwi67257@gmail.com</p>

		<h4>No HP</h4>
		<p>081319894484</p>

		<small>copyright &copy; 2021 - Happaishop.</small>
	</div>
</div>
	</body>
</html>

