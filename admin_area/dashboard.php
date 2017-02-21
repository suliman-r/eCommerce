<?php
session_start();
if(!isset($_SESSION['stayLogin'])){
	header('Location:index.php');
	exit();


}
//session_unset();




















?>