#!/usr/local/bin/php5
<? 
include("Connection.php");
$sid = $_GET["subid"];
if($sid == "...Select...") {
   echo "Please select subject";
}
$query="select description,datetime from Events where subjectID = ". $sid;
$result = executeQuery($query);
$row = $result->fetchRow();
echo $row[0];
?>