<?php
  session_start();
  if(isset($_SESSION["uid"])  && $_SESSION["uid"]!= null )
  {
  	unset($_SESSION["uid"]);
  	echo 'Đăng xuất thành công' .'<a href="login.php">Quay lai login tai day</a>' ;
  }
?>