<?php 
session_start();
// echo $_SESSION['technician'];
// echo $_SESSION['administrator'];

if (isset($_SESSION['technician'])) {
	unset($_SESSION['technician']);
	header("Location:index.php");
}else if(isset($_SESSION['administrator'])){
	unset($_SESSION['administrator']);
	header("Location:index.php");
}
// else{
// 	//header("Location:index.php");
// }

?>