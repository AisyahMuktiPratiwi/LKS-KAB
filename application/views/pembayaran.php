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


<div class= "section">
		<div class="container">
			<h3 style="margin-bottom: 1rem; margin-top:3rem;">Input Alamat Pengiriman & Pembayaran</h3>
			<div class="box">
					<form action="<?php echo base_url(). 'index.php/dashboard/bayar';?>" method="POST" enctype="multipart/form-data">
					<input type="text" name="nama_user" placeholder="Nama Lengkap Anda"class="input-control" required style="border-color: blue;">
					<input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="input-control" required style="border-color: blue;">
					<input type="text" name="no_hp" placeholder="Nomor Telepon Anda" class="input-control" required style="border-color: blue;">
					<select style="border-color: blue" name="metode">
						<option>Metode Pembayaran</option>
						<option>COD</option>
						<option>Transfer Bank</option>
					</select>
					<br>
					<br>					
					<input type="text" name="rekening" placeholder="Rekening" class="input-control"  style="border-color: blue;">
					<input type="file" name="bukti" class="input-control"  style="border-color: blue;">
					<a href="pesan">
					<input type="submit" name="submit" value="submit" class="btn" style="background-color: magenta; color:white">
				</a>
				</form>
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

