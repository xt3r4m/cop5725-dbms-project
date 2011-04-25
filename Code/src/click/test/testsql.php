#!/usr/local/bin/php5<?php

$conn  = mysql_connect('mysql.cise.ufl.edu', 'mallela', 'qwertyui') or 
   die ('Could not connect:' . mysql_error());

mysql_select_db('dbsp11') or die('Could not select database');

$query = 'select * from foo';
$result = mysql_query($query) or die ("Query failed: " . mysql_error());

$arr = mysql_fetch_array ($result) or die ("Fetch failed: " . mysql_error());
echo ($arr[0] . ' <- array\n');

$arr = mysql_fetch_array ($result);
echo $arr["bar"] . "\n";

?>
