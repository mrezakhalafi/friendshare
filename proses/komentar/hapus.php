<?php
	include '../../database/komentar.php';

	$id = $_GET['id'];

	$komentar = new komentar;
	$komentar->hapusKomentar($id);

	$page = $_GET['page'];

	if($page=="profil.php")
	header('Location: ../../pages/profil.php');
	else
	header('Location:../../main.php');
 ?>
