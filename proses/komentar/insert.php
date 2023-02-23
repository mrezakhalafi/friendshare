<?php
	include '../../database/komentar.php';

	$nama = $_POST['nama'];
	$komen = $_POST['komentar'];
	$post = $_POST['post'];
	$profil = $_POST['profil'];
	$username = $_POST['username'];
	$nama2 = $_POST['nama2'];

	$komentar = new Komentar();
	$komentar->tambahKomentar($nama,$komen,$post,$profil,$username);
	
	$page = $_POST['page'];

	if($page=="profil.php")
		header('Location: ../../pages/profil.php');
	else if($page=="main.php")
		header('Location: ../../main.php');
	else
		header("Location: ../../pages/profil_teman.php?username=".$_POST['nama2']."&nama=".$_POST['username']);

 ?>
