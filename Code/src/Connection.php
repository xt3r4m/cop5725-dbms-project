<?
include("DB.php");
function executeQuery($query)
{
$dsn="mysql://mallela:qwertyui@mysql.cise.ufl.edu/dbsp11";
$dbh =& DB::connect ($dsn);
   if (DB::isError ($conn))
     die ("Cannot connect: " . $conn->getMessage () . "\n");
$result = $dbh->query($query) or trigger_error("SQL", E_USER_ERROR);
$dbh->disconnect();
return $result;
}

?>