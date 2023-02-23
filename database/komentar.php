  <?php

  	class Komentar{

  		private $pdo;

  		function __construct(){
  			try{
  				$this->pdo = new PDO('mysql:host=localhost;dbname=friendshare','root','');
  			}catch(PDOException $e){
  				echo $e;
  			}
  		}

		public function tambahKomentar($nama,$komen,$post,$profil,$username){
			$sql="INSERT INTO komentar (nama,komentar,post,profil,username) VALUES(?,?,?,?,?)";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([
				$nama,$komen,$post,$profil,$username
			]);
		}

		public function tampilKomentar(){
			$sql="SELECT * FROM komentar ORDER by id";
			$stmt = $this->pdo->query($sql);
			return $stmt;
		}

		public function tampilKomentarById($id){
			$sql="SELECT * FROM komentar WHERE post=?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$id]);
			return $stmt;
		}

		public function hapusKomentar($id){
			$sql = "DELETE FROM komentar WHERE id=?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$id]);
		}
	}

 ?>
