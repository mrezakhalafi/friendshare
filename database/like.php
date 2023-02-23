  <?php

  	class Like{

  		private $pdo;

  		function __construct(){
  			try{
  				$this->pdo = new PDO('mysql:host=localhost;dbname=friendshare','root','');
  			}catch(PDOException $e){
  				echo $e;
  			}
  		}

  		public function checkLike($nama,$post){
	    $sql="SELECT * FROM suka WHERE nama = ? AND post = ?";
     	$stmt = $this->pdo->prepare($sql);
   	    $stmt->execute([$nama,$post]);
   	    $count = $stmt->rowCount();
    	  if ($count >0) {
    	    return 1;
    	  }else {
     	   return 0;
     	 }

  		}

		public function tambahLike($nama,$post,$username){
			$sql="INSERT INTO suka (nama,post,username) VALUES(?,?,?)";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([
				$nama,$post,$username
			]);
		}

		public function tampilLikeById($id){
			$sql="SELECT * FROM suka WHERE post=?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$id]);
			$data = $stmt->fetch();
			return $data;
		}

      public function hitungLike($id){
          $sql="SELECT * FROM suka WHERE post=?";
          $stmt = $this->pdo->prepare($sql);
          $stmt->execute([$id]);
          $count = $stmt->rowCount();
          return $count-1;
      }
      
	}
 ?>
