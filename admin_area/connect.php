<!--
$selectDB = 'mysql:host=localhost;dbname=shop';
$user = 'root';
$pass = '';
$option = array(
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
	);

 {

	$conn = new PDO($selectDB, $user, $pass, $option);
	$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

	echo "Faild to Connect ".$e->getMessage();
}

--><?php
define("HOST", "mysql:host=localhost;dbname=shop");
define("USER", "root");
define("PASSWORD", "");
define("DATABASE", "shop");
$option = array(
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
	);

try {


	$conn = new \PDO(HOST, USER , PASSWORD,$option);
	$conn->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
	$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

	echo "Faild to Connect ".$e->getMessage();

	
}


?>
