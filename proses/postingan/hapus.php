<?php
	include '../../database/postingan.php';

	$id = $_GET['id'];

	$postingan = new Postingan;
	$postingan->hapusPostingan($id);

	$page = $_GET['page'];

	if($page=="profil.php")
	header('Location: ../../pages/profil.php');
	else
	header('Location:../../main.php');
 ?>
