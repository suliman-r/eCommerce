<?php
session_start();
if(isset ($_SESSION['stayLogin'])){
	header('Location:dashboard.php');
	exit();
}
include "ini.php";
include $tpl . "header.php";
include $lang."english.php";
include $func."member.php";
//include $lang."arabic.php";
?>
	<div  class="log" >
	  <form align="center" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" />
	    <p class="for-log">Admin Login</p>
		<input type="text" placeholder="Username" name="text-uname">
		<input type="Password" placeholder="Password" name="text-upass">
		<input type="submit" value="Sign In" name="login">
		<span>
		  <a href="#"><i class="fa fa-question"></i>Forgotten Password</a>
		  <a href="#"><i class="fa fa-user"></i>Create an Account</a>
		</span>
     </form>
   </div> 

<?php
   echo 'Date: ' . Date('Y d  m   H:i:sa ');
	if (isset($_POST["login"])) {
		/*admin\login\*/admin::login(htmlspecialchars(trim($_POST['text-uname'])),trim($_POST['text-upass']));
	}
?>

<?php include $tpl."footer.php"; ?>

