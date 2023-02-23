  <?php

  	class Postingan{

  		private $pdo;

  		function __construct(){
  			try{
  				$this->pdo = new PDO('mysql:host=localhost;dbname=friendshare','root','');
  			}catch(PDOException $e){
  				echo $e;
  			}
  		}

		public function tambahPostingan($nama,$post,$foto,$video,$date,$profil,$username){
			$sql="INSERT INTO postingan (nama,postingan,foto,video,date,profil,username) VALUES(?,?,?,?,?,?,?)";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([
				$nama,$post,$foto,$video,$date,$profil,$username
			]);
		}

		public function tampilPostingan(){
			$sql="SELECT * FROM postingan ORDER by date desc";
			$stmt = $this->pdo->query($sql);
			return $stmt;
		}

		public function tampilPostingan2(){
			$sql="SELECT * FROM postingan ORDER by date desc LIMIT 0,6";
			$stmt = $this->pdo->query($sql);
			return $stmt;
		}

		public function tampilPostinganById($nama){
			$sql="SELECT * FROM postingan WHERE nama=? ORDER by date desc";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$nama]);
			return $stmt;
		}

		public function hapusPostingan($id){
			$sql = "DELETE FROM postingan WHERE id=?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$id]);
		}

	}
 ?>
