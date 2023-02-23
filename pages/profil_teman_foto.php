<!DOCTYPE html>
<html>
  <head>
    <title>FRIENDSHARE</title>
  </head>

<body>
<link rel="stylesheet" type="text/css" href="../style.css"> <br />

  <?php
  session_start();
  ?>

  <?php
  include '../database/user.php';
  $username = $_GET['username'];
  $user = new User();
  $row = $user->tampilUserById($username);
  date_default_timezone_set('Asia/Jakarta');
  $date = date("Y-m-d,h-i-s");
  ?>

  <div id="atas">
    <div id="logo"><a href="../main.php"><div id="fs"><b>FRIENDSHARE</b></div></a>

<div id="cari2">
  <form action="search.php">
  <input type="text" id="cari" name="keyword"><button id="pembesar">Cari</button></form>
</div>
    </div>

    <div id="halaman_navigasi">

      <a href="../main.php"><button id="tombol_navigasi">Beranda</button></a>
      <button id="tombol_navigasi">Profil</button>
      <a href="../proses/logout.php"><button id="tombol_navigasi">Logout</button></a>
    </div>
  </div>

  <div id="kiri">
    <?php
    if(isset($_SESSION['username'])):
    ?>
    <br />
    <img id="foto_profil" src="../<?= $row['foto'] ?>"><br />
    <div id="bungkus_nama_kiri"><div id="nama_kiri"><?= $row['nama']; ?></div></div><br /><br />
    <?= $row['alamatrumah']; ?><br /><br />
    <?= $row['email']; ?><br /><br />
    
    <button id="tombol_navigasi_samping">Teman</button><br /><br />
    <button id="tombol_navigasi_samping">Foto</button><br /><br />
  </div>

  <div id="tengah">

 <?php
    include '../database/postingan.php';
          $postingan = new Postingan;
          $id = $row['nama'];

          $data = $postingan->tampilPostinganById($id);
          $i = 1;
          foreach ($data as $row2) :
          
          if(isset($row2['foto'][5])) : ?>
          <img id ="gallery" src="../<?php echo $row2['foto']?>">
<?php
endif;
          endforeach;
          ?>

    </div>

   <?php else: ?>

    Anda belum login, silahkan Login.

    <?php endif; ?>
  </div>

  <div id="kanan">
  
<?php
include '../database/story.php';
          $story = new Story;
          $data = $story->tampilStory();
          ?>
          <label for="files3"><img id="story" src="../foto/plus-sign-emoji-png-4.png"></label> <?php
          foreach ($data as $row2) :
          
          if(isset($row2['foto'][5])) : ?>
          
          <a href="../pages/profil_teman.php?username=<?=$row2['username']?>&nama=<?= $row['username']?>">
          <img id ="story" src="../<?php echo $row2['foto']?>"></a>
<?php
endif;
          endforeach;
          ?><br />

<form id="form3" action="../proses/story/story.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="nama" value="<?php echo $row['nama']?>";>
        <input id="files3" style="visibility:hidden;" name="foto" type="file">
        <input type="hidden" name="profil" value="<?php echo $row['foto']?>">
                <input type="hidden" name="username" value="<?= $row['username']?>">

        <button id="button_kirim_story">Tambah Story</button>
        </form><br /><br />

        <?php
        
$datee = date('d');
$month = date('M');
$year = date('Y');


$row20 = $user->tampilUserUltah($datee,$month,$year);
foreach($row20 as $ultah):   

        if(isset($ultah['nama'])):
        echo $ultah['nama']; ?> berulang tahun hari ini 
          <?php endif; 

       endforeach;?>
<?php if(!isset($ultah['nama'])): echo "Tidak ada yang berulang tahun hari ini"?>
          <?php endif;?>
  </div>
<div id="kanan2">

<button id="tombol_navigasi_samping2">Music Today</button><br />

<?php

    include '../database/song.php';
          $music = new Music;

          $data7 = $music->tampilMusic();
          foreach ($data7 as $row7) :
          ?>

<?php endforeach; ?>

<audio controls>
  <source src="../musik/<?php echo $row7['song'];?>" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
  <img id="sponsor" src="../musik/cover/<?php echo $row7['cover']?>">

</div>

</body>
</html>