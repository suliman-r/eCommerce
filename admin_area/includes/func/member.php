<?php

//namespace admin\login {

/*require_once  "ini.php";
/**
 * @var  Member 
 */
class admin 
{        

	private $id;
	private $uname;
	private $upass;
	private $email;

	/**
 	 * @param  Member 
 	 */

	public function __construct ($id="",$uname, $upass, 
		$email)
	{

		$this->id = $id;
		$this->uname = $uname;
		$this->upass = $upass;
		$this->email = $email;

	}

   		public function session_start ()
   	{

		$session_name = "session_id";

		session_name($session_name);



	}


	public static function login ($uname, $upass) 
	{	  

	$upass = sha1($upass);
	global $conn;
	if ($uname == NULL || $upass == NULL){  
			return FALSE;
			//echo "string";
	}else{
		 $stmt_select = $conn->prepare("SELECT Username,Password	
		 								FROM  users
		    							WHERE Username = :user
		    							AND   Password = :pass
		    							AND   GroupID  = :value" );

   		 $stmt_select->execute(array('user'=>$uname, 'pass'=> $upass, 'value'=> 1));
   		 $results = $stmt_select->fetch(PDO::FETCH_ASSOC);
   		 	if ($stmt_select->rowCount() > 0) 
   		 	{
   		 			if ($results['Username'] === $uname && $results['Password'] === $upass){
   		 		    print_r($results);
   		 	}

   		 	}
   		}
	}
}



//}

?>