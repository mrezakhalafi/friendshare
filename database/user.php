  <?php

  	class User{

  		private $pdo;

  		function __construct(){
  			try{
  				$this->pdo = new PDO('mysql:host=localhost;dbname=friendshare','root','');
  			}catch(PDOException $e){
  				echo $e;
  			}
  		}

  		public function checkEmail($email){
	    $sql="SELECT * FROM user WHERE  email=?";
     	$stmt = $this->pdo->prepare($sql);
   	    $stmt->execute([$email]);
   	    $count = $stmt->rowCount();
    	  if ($count >0) {
    	    return 1;
    	  }else {
     	   return 0;
     	 }

  		}

   		public function cariUser($keyword){
        	$sql="SELECT * FROM user WHERE nama LIKE '%$keyword%'";
       		$stmt = $this->pdo->query($sql);
        	return $stmt;
    	}

		public function tambahUser($username,$password,$nama,$alamatrumah,$email,$gender,$date,$month,$year,$foto){
   			 $sql="INSERT INTO user (username,password,nama,alamatrumah,email,gender,datee,month,year,foto) VALUES(?,?,?,?,?,?,?,?,?,?)";
  			  $stmt = $this->pdo->prepare($sql);
  			  $stmt->execute([
  			    $username,$password,$nama,$alamatrumah,$email,$gender,$date,$month,$year,$foto
  			  ]);
  				}

		public function tampilUser(){
			$sql="SELECT * FROM user";
			$stmt = $this->pdo->query($sql);
			return $stmt;
		}

		public function tampilUserTeman(){
			$sql="SELECT * FROM user WHERE status='teman'";
			$stmt = $this->pdo->query($sql);
			return $stmt;
		}

		public function tampilUserUltah($datee,$month,$year){
			$sql="SELECT * FROM user WHERE datee=? AND month=? AND year=?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$datee,$month,$year]);
			return $stmt;
		}

		public function tampilUserById($username){
			$sql="SELECT * FROM user WHERE username=?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$username]);
			$data = $stmt->fetch();
			return $data;
		}

		public function tampilUserById2($username){
			$sql="SELECT * FROM user WHERE username=?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$username]);
			$data = $stmt->fetch();
			return $data;
		}

	}
 ?>
