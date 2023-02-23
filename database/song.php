  <?php

  	class Music{

  		private $pdo;

  		function __construct(){
  			try{
  				$this->pdo = new PDO('mysql:host=localhost;dbname=friendshare','root','');
  			}catch(PDOException $e){
  				echo $e;
  			}
  		}

		public function tampilMusic(){
			$sql="SELECT * FROM music ORDER BY RAND()";
			$stmt = $this->pdo->query($sql);
			return $stmt;
		}

	}
 ?>
