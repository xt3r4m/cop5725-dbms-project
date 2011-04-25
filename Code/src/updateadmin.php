#!/usr/local/bin/php5
<?php
include("Connection.php");
$operationtype=$_POST["operationtype"];
if($operationtype == "add_behavior") {
$behname=$_POST["behname"];
$behdesc=$_POST["behdesc"];
$category=$_POST["categories"];
$query="insert into Behaviors values ('". $behname ."', '". $behdesc ."')";
$result = executeQuery($query);
if($result != "1") {
echo "<script> alert('" . $result ."')</script>";
}
for($i=0; $i < count($category); $i++) {
   $query="insert into Behavior_Category values ('". $behname ."', '". $category[$i] ."')";
   $result = executeQuery($query);
}
} elseif ($operationtype == "add_category") {
$operationtype=$_POST["operationtype"];
$catname=$_POST["catname"];
$catdesc=$_POST["catdesc"];
$query="insert into Categories values ('". $catname ."', '". $catdesc ."')";
$result = executeQuery($query);
if($result != "1") {
echo "<script> alert('" . $result ."')</script>";
}
} else if ($operationtype == "add_user")
{
$usernm=$_POST["username"];
$name=$_POST["name"];
$passwd=$_POST["password"];
$passwd=crypt($passwd);
$usertype=$_POST["usertype"];
$ssn=$_POST["ssn"];
$query="insert into Person(name, uname, upassword, type, SSN) values ('". $name ."','". $usernm ."', '". $passwd ."','".$usertype."','". $ssn ."')";
echo $query;
$result = executeQuery($query);
if($result != "1") {
echo "<script> alert('" . $result ."')</script>";
}
} 
else if ($operationtype == "remove_user"){
$query="update Person set disabled=((disabled+1)%2) where personID IN (";
$usrs=$_POST["users"];
for($i=0; $i < count($usrs); $i++) {
   $query = $query . $usrs[$i];
   if($i != (count($usrs) - 1)) {
	$query = $query . ",";
   }
}
$query = $query .")";
echo $query;
$result = executeQuery($query);
echo "<script>window.location='toggleuser.php'</script>";
}



echo "<script>window.location='admin.php'</script>";
?>
