#!/usr/local/bin/php5
<?php
include("DB.php");
#$conn  = mysql_connect('mysql.cise.ufl.edu', 'mallela', 'qwertyui') or 
#   die ('Could not connect:' . mysql_error());

$dbh  =  DB::connect("mysql://mallela:qwertyui@mysql.cise.ufl.edu/dbsp11");

#mysql_select_db('dbsp11') or die('Could not select database');
$query = "SELECT * FROM foo";
$result = $dbh->query($query);
while($row = $result->fetchRow())
{
echo "$row[0] - $row[1]\n";
}
// get and print number of rows in resultset
echo "\n[" . $result->numRows() . " rows returned]\n";
// close database connection
$dbh->disconnect();

?>
