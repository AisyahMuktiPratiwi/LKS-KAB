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
.box ul{
	float: right;
}
.box ul li {
	display: inline-block;
}
.box ul li a{
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

.container h3 {
	color: purple;
}
.footer {
	padding: 25px 0;
	background-color: plum;
	color:white;
	text-align: center;
	margin-top: 15rem;
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

		<div class="section">
			<div class="container">
				<h3 style="margin-top: 3rem;">Kategori</h3>
			<?php foreach($barang as $brg): ?>
				<table border="1" style="text-align: center;margin-top: 2rem;width: 80%; border-color: plum; color: blue">
        <tr>
            <td rowspan="6" width="30rem">
                <img src="<?php echo base_url().'/upload/'.$brg->gambar ?>" style="width: 30rem;"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td width="300rem"><strong><?php echo $brg->nama_brg ?></strong></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><?php echo $brg->keterangan ?></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td><?php echo $brg->kategori ?></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><?php echo $brg->stok ?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><strong><div class="btn" style="background-color: blue;color: white; width: 80px; margin-left: 5rem">
            	<?php echo number_format($brg->harga) ?></div></strong>
            </td>
        </tr>
    </table>
					<?php endforeach; ?>

				<?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm" style="background-color: green; width:85px; height: 20px; float: right; color:white; margin-top:1rem; margin-right:20rem">Keranjang</div>') ?>
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


