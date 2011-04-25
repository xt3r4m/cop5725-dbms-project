#!/usr/local/bin/php5
<?php
include("Connection.php");

$query=$_POST["querytxt"];

$query = str_replace("\\", "", $query);

$query = substr($query, 0,-2);


$query = "INSERT INTO Subject_Behavior_presents VALUES ".$query;
echo $query;

$r=executeQuery($query);
if($r != "1") {
echo "<script> alert('" . $r ."')</script>";
}


echo "<script language=javascript>window.location = 'collector.php';</script>";

?>