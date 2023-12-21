<?php
session_start();
session_unset();
session_destroy();

if(!isset($_SESSION['id'])){
	echo '<script type="text/javascript">window.open("login.php", "_self")</script>';
}else{
  return false;
}
?>