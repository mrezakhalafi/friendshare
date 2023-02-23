<?php
	include '../../database/postingan.php';

	$nama = $_POST['nama'];
	$post = $_POST['post'];
	date_default_timezone_set('Asia/Jakarta');
	$date = date("Y-m-d,H-i-s");
	$profil = $_POST['profil'];	
	$username = $_POST['username'];

	$sumber = $_FILES['foto']['tmp_name'];
    $namafile = $_FILES['foto']['name'];
    $tujuan = "../../foto/".$namafile;  //untuk di upload
    $alamat ="foto/".$namafile;  //untuk di simpan

	$sumber2 = $_FILES['video']['tmp_name'];
    $namafile2 = $_FILES['video']['name'];
    $tujuan2 = "../../foto/".$namafile2;  //untuk di upload
    $alamat2 ="foto/".$namafile2;  //untuk di simpan

	$postingan = new Postingan;
	$postingan->tambahPostingan($nama,$post,$alamat,$alamat2,$date,$profil,$username);
	move_uploaded_file($sumber,$tujuan);
	move_uploaded_file($sumber2,$tujuan2);
	
	$page = $_POST['page'];

	if($page=="profil.php")
	header('Location: ../../pages/profil.php');
	else
	header('Location:../../main.php')

 ?>
