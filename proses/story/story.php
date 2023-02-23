<?php
	include '../../database/story.php';

	$profil = $_POST['profil'];	
	$username = $_POST['username'];

	$sumber = $_FILES['foto']['tmp_name'];
    $namafile = $_FILES['foto']['name'];
    $tujuan = "../../foto/".$namafile;  //untuk di upload
    $alamat ="foto/".$namafile;  //untuk di simpan

	$story = new Story;
	$story->tambahStory($alamat,$profil,$username);
	move_uploaded_file($sumber,$tujuan);
	
	$page = $_POST['page'];

	if($page=="profil.php")
	header('Location: ../../pages/profil.php');
	else
	header('Location:../../main.php')

 ?>
