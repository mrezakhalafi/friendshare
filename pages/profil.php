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
  $username = $_SESSION['username'];
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
    
    <a href="teman.php"><button id="tombol_navigasi_samping">Teman</button></a><br /><br />
    <a href="profil_foto.php"><button id="tombol_navigasi_samping">Foto</button><br /><br /></a>
  </div>

  <div id="tengah">
    <div id="buat_postingan">
      <div id="judul_postingan">
      Buat Postingan <br /></div>
      <img id="foto_postingan_awal" src="../<?= $row['foto'] ?>" >

      <form id="form3" action="../proses/postingan/insert.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="nama" value="<?php echo $row['nama']?>";>
        <input type="text" name="post" id="tulis_postingan" placeholder="Tulis Sesuatu..."><br />
        <label for="files">Tambahkan Foto</label>
        <input id="files" name="foto" style="visibility:hidden;" type="file">
        <label for="files2">Video</label>
        <input id="files2" name="video" style="visibility:hidden;" type="file"><br />
        <input type="hidden" name="profil" value="<?php echo $row['foto']?>">
        <input type="hidden" name="page" value="<?php echo basename($_SERVER['PHP_SELF'])?>">
        <input type="hidden" name="username" value="<?=$row['username']?>">
        <button id="button_kirim">Kirim</button><br /><br />
      </form>
    </div>

<?php
  include '../database/Like.php';

  $like = new Like;
    include '../database/komentar.php';
          $komentar = new Komentar;

 ?>

    <?php
    include '../database/postingan.php';
          $postingan = new Postingan;
          $id = $row['nama'];

          $data = $postingan->tampilPostinganById($id);
          $i = 1;
          foreach ($data as $row2) :
          ?>

    <div id="postingan">
      <img id="foto_profil_postingan" src="../<?= $row['foto'] ?>" >
      <a href="../proses/postingan/hapus.php?id=<?php echo $row2['id'];?>&page=<?php echo basename($_SERVER['PHP_SELF'])?>"><button id="hapus">X</button></a>
      <div id="nama"><a href="../pages/profil_teman.php?username=<?=$row2['username']?>&nama=<?= $row['username']?>"><?= $row2['nama'] ?></a></div><br/>
      <div id="tanggal"><?php $date = $row2['date'];?>
        <?php
         $tampilDate = new DateTime($date);
         $today = new DateTime();
         $diff = $today->diff($tampilDate);
         echo date('d M Y', strtotime($date));
                  $timemsg;
         if($diff->y > 0){
        $timemsg = $diff->y .' Tahun';

          }
          else if($diff->m > 0){
          $timemsg = $diff->m . ' Bulan';
         }
          else if($diff->d > 0){
           $timemsg = $diff->d .' Hari';
          }
          else if($diff->h > 0){
           $timemsg = $diff->h .' Jam';
         }
          else if($diff->i > 0){
           $timemsg = $diff->i .' Menit';
         }
          else if($diff->s > 0){
           $timemsg = $diff->s .' Detik';
          }

          if(isset($timemsg)) {
         $timemsg = ' - '. $timemsg.' yang lalu';
          echo $timemsg;
          }
          else { echo ' - Baru saja';
          } 
            
        ?>
      </div><br />
       <div id="p"><?= $row2['postingan'] ?></div><br /><br />
       <?php if(isset($row2['foto'][5])){ ?>
       <img id="foto_postingan" src="../<?= $row2['foto'] ?>"><br /><br />
       <?php } else if(isset($row2['video'][5])) { ?>

               <video controls>
  <source src="../<?=$row2['video']?>" type="video/mp4">
Your browser does not support the video tag.
</video><br />
       <?php  
       }else {    
             }
        ?>

        <form id="form2" action="../proses/postingan/like.php" method="post" enctype="multipart/form-data">

          <input type="hidden" name="nama" value="<?= $row['nama']?>">
          <input type="hidden" name="post" value="<?= $row2['id'] ?>">
          <input type="hidden" name="username" value="<?= $row['username']?>">
          <input type="hidden" name="page" value="<?php echo basename($_SERVER['PHP_SELF'])?>">
          <?php 
          $id = $row2['id'];
          $data2 = $like->tampilLikeById($id);?>
        <?php
          $nama=$row['nama'];
          $post=$row2['id'];
          if ($like->checkLike($nama,$post)== 0) : ?>
        <button id="button_kecil">Suka</button>

          <?php else: ?>
      <button id="button_kecil">Disukai</button>    
<?php endif; ?>
        <?php if(isset($data2['nama'])) :

        $data3 = $like->hitungLike($id);
?>

        <a href="../pages/profil_teman.php?username=<?=$data2['username']?>&nama=<?= $row['username']?>">     <?php echo $data2['nama']?> </a> menyukai ini
       <?php if($data3!==0) : ?> 

        dan <?php echo $data3; ?> lainnya
      <?php endif; ?>
      <?php endif; ?>
      </form>

           <form id="share" action="../proses/postingan/share.php" method="post" enctype="multipart/form-data">

          <input type="hidden" name="nama" value="<?= $row['nama']?>">
          <input type="hidden" name="post" value="<?= $row2['postingan'] ?>">
          <input type="hidden" name="foto" value="<?= $row2['foto'] ?>">
          <input type="hidden" name="video" value="<?= $row2['video']?>">
          <input type="hidden" name="profil" value="<?php echo $row['foto']?>">
          <input type="hidden" name="page" value="<?php echo basename($_SERVER['PHP_SELF'])?>">
            <input type="hidden" name="username" value="<?= $row['username']?>">
          <button id="button_kecil">Bagikan</button>
      </form>

      <form id="form2" action="../proses/komentar/insert.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="nama" value="<?= $row['nama']?>">
        <input type="text" id="komentar" name="komentar">
        <input type="hidden" name="post" value="<?= $row2['id']?>">
        <input type="hidden" name="profil" value="<?php echo $row['foto']?>">
        <input type="hidden" name="page" value="<?php echo basename($_SERVER['PHP_SELF'])?>">
                <input type="hidden" name="username" value="<?php echo $row['username']?>">
        <button id="button_kecil">Komentar</button>
      </form>
      <br />

 <?php
          $data4 = $komentar->tampilKomentarById($id);
          foreach ($data4 as $row4) : ?>

<img id="foto_chat" src="../<?= $row4['profil']?>">

 <?php if($row['nama']==$row4['nama']) :?>
      <a href="../proses/komentar/hapus.php?id=<?php echo $row4['id']; ?>"><button id="hapus_komen">X</button></a>
      <?php endif; ?>
<div id="nama_komen"><a href="../pages/profil_teman.php?username=<?=$row4['username']?>&nama=<?= $row['username']?>"><?php echo $row4['nama']; ?></a></div><br/>
<div id="komen"><?php echo $row4['komentar'];?></div><br />

<?php

endforeach;
?>

        </div>

        <div id="jeda"></div>
          
        <?php
         $i++;
        endforeach;
        ?>

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