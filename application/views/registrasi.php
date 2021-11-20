
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="vieport" content="width-device-widh, intial-scale=1">
	<title>Login | Happaishopp</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		* {
 padding: 0;
 margin: 0;
}
body {
	background-color: plum;
}
a{
	color: inherit;
	text-decoration: none;
}
#bg-login {
	display: flex;
	height: 100vh;
	justify-content: center;
	align-items: center;
}
.box-login {
	width: 300px;
	height: 280px;
	border:1px solid magenta;
	background-color: skyblue;
	padding: 15px;
	box-sizing: border-box;
}
.box-login h2 {
	text-align: center;
	margin-bottom: 15px;
	color: purple;
}
.input-control {
	width: 100%;
	padding: 10px;
	margin-bottom:  15px;
	box-sizing: border-box;
}
.btn {
	padding: 8px 15px;
	background-color: magenta;
	color: white;
	border :none;
	cursor: pointer;
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
<body id="bg-login" style="background-image: url(upload/login.jpeg); background-size: cover;  ">
	<div class="box-login">
	<h2>login</h2>
	<form action="register" method="POST">
		<input type="text" name="nama" placeholder="Nama Anda"class="input-control" required>
		<input type="text" name="user" placeholder="Username Anda" class="input-control" required>
		<input type="password" name="pass" placeholder="password"class="input-control" required>
		<input type="submit" name="submit" placeholder="login"class="btn">
		
	</form>
	
</div>


</body>
</html>