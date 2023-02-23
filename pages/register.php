<!DOCTYPE html>
<html>
	<head>
		<title>FRIENDSHARE</title>
	</head>

<body>
	<link rel="stylesheet" type="text/css" href="../style.css"> <br />

	<div id="atas">
  
		<div id="logo">FRIENDSHARE</div>

	</div>

	<div id="register">

		<form id="form1" action="../proses/register.php" method="post" enctype="multipart/form-data">
		<input type="text" name="username" placeholder="Username" /><br />
		<input type="text" name="password" placeholder="Password" /><br /><br />
		<input type="text" name="nama" placeholder="Nama Lengkap" /><br />
		<input type="text" name="alamatrumah" placeholder="Alamat" /><br />
		<input type="text" name="email" placeholder="Email" /><br /><br />
		<div id="rb">Jenis Kelamin : <input type="radio"name="gender" value="Laki-Laki"> Laki-Laki
		<input type="radio"name="gender" value="Perempuan"> Perempuan <br /><br />
		
		Tanggal Lahir : <select name="date">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">5</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		</select>
		 <select name="month">
			<option value="Jan">Januari</option>
			<option value="Feb">Februari</option>
			<option value="Mar">Maret</option>
			<option value="Apr">April</option>
			<option value="May">Mei</option>
			<option value="Jun">Jeni</option>
			<option value="Jul">Juli</option>
			<option value="Aug">Agustus</option>
			<option value="Sept">September</option>
			<option value="Oct">Oktober</option>
			<option value="Nov">November</option>
			<option value="Dec">Desember</option>
					</select>
 		<select name="year">
			<option value="1990">1990</option>
			<option value="1991">1991</option>
			<option value="1992">1992</option>
			<option value="1993">1993</option>
			<option value="1994">1994</option>
			<option value="1995">1995</option>
			<option value="1996">1996</option>
			<option value="1997">1997</option>
			<option value="1998">1998</option>
			<option value="1999">1999</option>
			<option value="2000">2000</option>
			<option value="2001">2001</option>
			<option value="2002">2002</option>
			<option value="2003">2003</option>
			<option value="2004">2004</option>
			<option value="2005">2005</option>
		</select>
		<br /><br />
		Unggah Foto : 
		 <label for="files" id="upload_gambar">Upload</label>
         <input id="files" name="foto" style="visibility:hidden;" type="file"><br /><br />
		<button id="button_kecil">Register</button>
		<br />
		</form>

		Atau sudah punya akun? <a href="../index.php"><button id="button_kecil">Login</button></a>

	</div>

</body>
</html>