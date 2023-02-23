  <?php

  	class Story{

  		private $pdo;

  		function __construct(){
  			try{
  				$this->pdo = new PDO('mysql:host=localhost;dbname=friendshare','root','');
  			}catch(PDOException $e){
  				echo $e;
  			}
  		}

		public function tambahStory($foto,$profil,$username){
			$sql="INSERT INTO story (foto,profil,username) VALUES(?,?,?)";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([
				$foto,$profil,$username
			]);
		}

		public function tampilStory(){
			$sql="SELECT * FROM story ORDER by id desc LIMIT 0,4";
			$stmt = $this->pdo->query($sql);
			return $stmt;
		}

	}
 ?>
