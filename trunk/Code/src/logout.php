#!/usr/local/bin/php5
<?php
setcookie("username", "", $expire);
setcookie("usertype", "", $expire);
setcookie("personid", "", $expire);
echo "<script language=javascript>window.location = 'index.php';</script>";

?>