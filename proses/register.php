
<?php
    include '../database/user.php';
    $user = new User;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $alamatrumah = $_POST['alamatrumah'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    $password = password_hash($password, PASSWORD_BCRYPT);

    $sumber = $_FILES['foto']['tmp_name'];
    $namafile = $_FILES['foto']['name'];
    $tujuan = "../foto/".$namafile;  //untuk di upload
    $alamat ="foto/".$namafile;  //untuk di simpan

    $filesize = $_FILES['foto']['size']; //ambil size gambar
    $sizemax = 2*1024*1024;   //2mb

    if ($user->checkEmail($email)== 1) {         //check email
      echo "<script>
                alert('Email Sudah Tersedia !');
                window.location = '../index.php';
            </script>";
    }else{

      if ($filesize <= $sizemax) {
        $pecahfile = explode(".",$namafile);
        $ext = end($pecahfile);
        $ext = strtolower($ext);
        $extboleh = array("jpg","png","gif","jpeg");

        if (in_array($ext, $extboleh)) {

          $user->tambahUser($username,$password,$nama,$alamatrumah,$email,$gender,$date,$month,$year,$alamat);

          move_uploaded_file($sumber,$tujuan);

          echo "<script>
                    alert('Data berhasil tambah !');
                    window.location = '../index.php';
                </script>";
        }else {
          echo "<script>
                    alert('Data Gagal tambah !');
                    window.location = '../index.php';
                </script>";
        }

      }else{
        echo "<script>
                  alert('Data Gagal tambah !');
                  window.location = '../index.php';
              </script>";
      }
    }
 ?>
