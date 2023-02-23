<!DOCTYPE html>
<html>
	<head>
		<title>FRIENDSHARE</title>
	</head>

<body>
	<link rel="stylesheet" type="text/css" href="style.css"> <br />

	<div id="atas">
  
		<div id="logo">FRIENDSHARE</div>

	</div>

	<div id="login">
		<div id="nama0"><b>SELAMAT DATANG</b></div>
			<form id="form1" action="proses/login.php" method="post">
				<input type="text" name="username" placeholder="Username" /><br />
				<input type="password" name="password" placeholder="Password" /><br />
				<button id="button_kecil">Login</button><br />
			</form>

		<br /><br />
		Belum punya akun? <a href="pages/register.php"><button id="button_kecil">Register</button></a>
	</div>

</body>
</html>