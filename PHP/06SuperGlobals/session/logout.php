<?php

session_start();
session_destroy();
setcookie("userid","",time()+3600);
// setcookie("userid","",time()-3600);

header("location:login.php");

?>