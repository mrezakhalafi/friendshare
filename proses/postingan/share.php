<?php
	include '../../database/postingan.php';

	$nama = $_POST['nama'];
	$post = $_POST['post'];
	date_default_timezone_set('Asia/Jakarta');
	$date = date("Y-m-d,H-i-s");
	$profil = $_POST['profil'];	
	$foto = $_POST['foto'];
	$username = $_POST['username'];
	$video = $_POST['video'];

	$postingan = new Postingan;
	$postingan->tambahPostingan($nama,$post,$foto,$video,$date,$profil,$username);
	
	$page = $_POST['page'];

	if($page=="profil.php")
	header('Location: ../../pages/profil.php');
	else
	header('Location:../../main.php')

 ?>
