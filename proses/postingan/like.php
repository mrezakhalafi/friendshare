<?php
	include '../../database/like.php';

	$nama = $_POST['nama'];
	$post = $_POST['post'];
	$username = $_POST['username'];
	$nama2 = $_POST['nama2'];

	$like = new Like();
	$like->tambahLike($nama,$post,$username);
	
	$page = $_POST['page'];

	if($page=="profil.php")
		header('Location: ../../pages/profil.php');
	else if($page=="main.php")
		header('Location: ../../main.php');
	else
		header("Location: ../../pages/profil_teman.php?username=".$_POST['nama2']."&nama=".$_POST['username']);
 ?>
