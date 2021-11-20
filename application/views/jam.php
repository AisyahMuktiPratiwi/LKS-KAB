
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
header ul{
	float: right;
}
header ul li {
	display: inline-block;
}
header ul li a{
	padding :20px 0 20px 15px;
	display: inline-block;
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
.section {
	padding: 25px 0;

}

.box {
	background-color: white;
	border:1px solid magenta;
	padding:15px;
	box-sizing: border-box;
	margin: 10px 0;
}
.box:after {
	content: "";
	display: block;
	clear :both;
}
.container h3 {
	color: purple;
}

.box h2{
	color :purple;
}
.col-5 {
	width:20%;
	height: 100%;
	text-align: center;
	float: left;
	box-sizing: border-box;
}
.col-4:hover {
	box-shadow: 0 0 15px #008080;
}


.col-4 {
	width: 25%;
	height: 320px;
	border: 1px solid #ccc;
	float: left;
	padding: 10px;
	box-sizing: border-box;
}
.col-4 img {
	width:100%;
}
.footer {
	padding: 25px 0;
	background-color: plum;
	color:white;
	text-align: center;
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
		<h1><a href="#">HappaiShop</a></h1>
		<p>
			<span style="margin-left: 300px; "><?php $keranjang ='Keranjang'.$this->cart->total_items(). 'items'?>
			<?php echo anchor('dashboard/detail_keranjang',$keranjang)?> </span>
		
		</p>
	</div>
	</header>



		<img src="<?php echo base_url();?>upload/benner.jpeg" style="width: 100%; margin-top:1rem; height: 40rem;">
		
		<header style="margin-top: 1rem;">
		<div class="container">
		<ul style="float:left; margin-left: 250px;">
			<li><h2 style="margin-left: 20px;"><a href="index.php/dashboard/checkout">Checkout</a></h2></li>
			<li>
			<form action="produk.php" style="margin-left: 200px;">
         <input type="text" class="form-control" name="keyword">
         <button class="btn" style="background-color:paleturquoise; color:mediumorchid">Cari</button>
       </form>
	</li>
</ul>
	</div>
	</header>


	
	<div class="section">
			<div class="container" style="color: white;">
				<h3>Kategori</h3>
				<div class="box" style="background-color: plum; ">
					<a href="<?php echo base_url('index.php/kategori/pakaianwanita')?>">
					<div class="col-5">
					<img src="<?php echo base_url();?>upload/kat wanita.png" width="90 px;" style="margin-bottom: 5px;">
					<p>Pakaian Wanita</p>
					</div>
				</a>
				<a href="<?php echo base_url('index.php/kategori/pakaianpria')?>">
					<div class="col-5">
					<img src="<?php echo base_url();?>upload/kat pria.png" width="70 px;" style="margin-bottom: 5px; margin-top:15px;">
					<p>Pakaian Pria</p>
					</div>
				</a>
				<a href="<?php echo base_url('index.php/kategori/sendal')?>">
					<div class="col-5">
					<img src="<?php echo base_url();?>upload/kat sendal.png" width="85 px;" style="margin-bottom: 5px;">
					<p>Sandal</p>
					</div>
				</a>
				<a href="<?php echo base_url('index.php/kategori/tas')?>">
					<div class="col-5">
					<img src="<?php echo base_url();?>upload/kat tas.png" width="120 px;" style="margin-bottom: 5px; margin-top: 15px;">
					<p>Tas</p>
					</div>
				</a>
					<a href="<?php echo base_url('index.php/kategori/jam')?>">
					<div class="col-5">
					<img src="<?php echo base_url();?>upload/kat jam.png" width="40 px;" style="margin-bottom: 5px; margin-top: 15px;">
					<p>Jam</p>
					</div>
				</a>
				
				</div>
			</div>
	</div>




		<div class="section">
			<div class="container" style="color: purple;">
				<h3>Produk </h3>
				<div class="box" style="background-color: plum; ">
					
					<?php foreach ($jam as $brg) : ?>
					
				
					<div class="col-4" style="background-color: lavender; margin-top: 2px;">
						<img src="<?php echo base_url().'/upload/'.$brg->gambar ?>" style="width: 15rem; height: 12rem;">
						<p class="nama" style="margin-top: 2px;"><?php echo $brg->nama_brg ?></p>
						<p class="harga" style="color: #008080; float:right; margin-right:8px"><b>Rp.<?php echo $brg->harga ?></b></p>
						<br><br><br>

					<?php echo anchor('dashboard/detail/'.$brg->id_brg,'<div class="btn btn-sm" style="background-color: skyblue; width:50px; height: 20px; float: left; margin-left: 5px;">Detail</div>') ?>
					<?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm" style="background-color: lightgreen; width:70px; height: 20px; float: left; margin-left: 5px;">Keranjang</div>') ?>
				</div>
			</ul>

					<?php endforeach; ?>
						
					
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