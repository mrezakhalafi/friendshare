  <?php

  	class Teman{

  		private $pdo;

  		function __construct(){
  			try{
  				$this->pdo = new PDO('mysql:host=localhost;dbname=friendshare','root','');
  			}catch(PDOException $e){
  				echo $e;
  			}
  		}

    public function tampilTeman(){
      $sql="SELECT * FROM user";
      $stmt = $this->pdo->query($sql);
      return $stmt;
    }  

		public function tampilTemanBenar($mainuser){
			$sql="SELECT * FROM teman WHERE mainuser = ? AND status ='teman'";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$mainuser]);
			return $stmt;
		}

	}
 ?>
