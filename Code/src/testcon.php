#!/usr/local/bin/php5

<?php
include("Connection.php");

$query = "SELECT * FROM foo";
$result = executeQuery($query);
while($row = $result->fetchRow())
{
echo "$row[0] - $row[1]\n";
}
// get and print number of rows in resultset
echo "\n[" . $result->numRows() . " rows returned]\n";
// close database connection

?>
