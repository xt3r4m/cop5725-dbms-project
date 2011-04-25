#!/usr/local/bin/php
<?php

$conn  = mysql_connect('mysql.cise.ufl.edu', 'mallela', 'qwertyui') or 
   die ('Could not connect:' . mysql_error());

mysql_select_db('dbsp11') or die('Could not select database');

$query = 'insert into foo values("rajesh",23)';
$result = mysql_query($query) or die ("Query failed: " . mysql_error());

?>
