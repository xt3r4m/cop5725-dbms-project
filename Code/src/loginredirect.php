#!/usr/local/bin/php5
<?php
include("Connection.php");
$uname = $_POST["username"];
$password = $_POST["password"];

$found = false;
$query = "SELECT * FROM Person where uname = '". $uname ."'  and disabled='0'";

$result = executeQuery($query);
if($row = $result->fetchRow())
{
if(crypt($password, $row[3]) != $row[3]) {
echo "<script language=javascript>alert('Invalid login'); window.location = 'index.php';</script>";
}

$found = true;
$expire=time()+60*60*24*30;

echo "<script language=javascript>document.cookie='personid=" . $row[0] . "';document.cookie='username=" . $row[2] . "';document.cookie='usertype=" . $row[4] . "';</script>";
if($row[4] == "analyst") {
setcookie("username", $row[1], $expire);
$_COOKIE["username"]="1234";
setcookie("usertype", $row[4], $expire);
echo "<script language=javascript> window.location = 'analyst.php';</script>";
} elseif ($row[4] == "therapist") {
echo "<script language=javascript>window.location = 'therapist.php';</script>";
} elseif ($row[4] == "subject") {
echo "<script language=javascript>window.location = 'subject.php';</script>";
} elseif ($row[4] == "collector") {
echo "<script language=javascript>window.location = 'collector.php';</script>";
} elseif ($row[4] == "admin") {
echo "<script language=javascript>window.location = 'admin.php';</script>";
} 

} else {
echo "<script language=javascript>alert('Invalid login'); window.location = 'index.php';</script>";
}
?>

<script>
function setCookie(c_name,value)
{
document.cookie='username=' + value;
alert(getCookie(c_name));
}

function getCookie(c_name)
{
var i,x,y,ARRcookies=document.cookie.split(";");
for (i=0;i<ARRcookies.length;i++)
  {
  x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
  y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
  x=x.replace(/^\s+|\s+$/g,"");
  if (x==c_name)
    {
    return unescape(y);
    }
  }
}
</script>




echo "value is"+$value