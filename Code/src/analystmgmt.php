#!/usr/local/bin/php5
<?php
$username=$_COOKIE["username"];
include("Connection.php");
$operationtype=$_POST["operationtype"];
if ($operationtype == "create_eval") {
$operationtype=$_POST["operationtype"];
$subject=$_POST["subject"];
$start=$_POST["start"];
$location=$_POST["location"];
$pid=explode("-", $subject);
$pid=$pid[1];
$query="select personID from Person where uname='". $username ."'";
$result = executeQuery($query);
$analystID = $result->fetchRow();
$date = new DateTime($start);
$query="insert into Evaluation (date, location, analystID, subjectID) values ('". $date->format('Y-m-d H:i:s') ."','". $location ."',". $analystID[0] .",'". $pid ."')";
$result = executeQuery($query);
if($result != "1") {
echo "<script> alert('" . $result ."')</script>";
}
} elseif($operationtype == "create_cp") {
$collector=$_POST["collector"];
$eid=$_POST["evalid"];
$start=$_POST["start"];
$therapist=$_POST["therapist"];
$behaviors=$_POST["behaviors"];
$tbehaviors=$_POST["tbehaviors"];
echo $behaviors;
$tid=explode("-", $therapist);
$tid=$tid[1];
$cid=explode("-", $collector);
$cid=$cid[1];
$date = new DateTime($start);
$query="insert into Collection_Period (start, collectorID, therapistID, evaluationID) values ('". $date->format('Y-m-d H:i:s') ."',". $cid .",". $tid .",'". $eid ."')";
$result = executeQuery($query);
if($result != "1") {
echo "<script> alert('" . $result ."')</script>";
}
$query="select collectionPeriodID from Collection_Period where therapistID = ". $tid ." and start= '". $start ."' and collectorID = ". $cid; 
$result = executeQuery($query);
$cp = $result->fetchRow();

for($i=0; $i < count($behaviors); $i++) {
   $query="insert into Collection_Period_Behavior values ('". $cp[0] ."', '". $behaviors[$i] ."','0')";
   $result = executeQuery($query);
   if($result != "1") {
	echo "<script> alert('" . $result ."')</script>";
   }
}

for($k=0; $k < count($tbehaviors); $k++) {
   $query="insert into Collection_Period_Behavior values ('". $cp[0] ."', '". $tbehaviors[$k] ."','1')";
   $result = executeQuery($query);
   if($result != "1") {
	echo "<script> alert('" . $result ."')</script>";
   }
}

echo $query;
} elseif($operationtype == "pat_record") {
$newcomments=$_POST["newcomments"];
$oldcomments=$_POST["comments"];
$sid=$_POST["subject"];
$sid=explode("-", $sid);
$sid=$sid[1];
$query="select description from Events where subjectID=". $sid; 
$result = executeQuery($query);
if($r = $result->fetchRow()) {
	$date = date('m/d/Y h:i:s', time());

	$desc = $r[0] . " ***** " . $date . " : " . $newcomments;
	$query = "update Events set description = '". $desc ."' where subjectID=". $sid;
	executeQuery($query);
       echo $query;
} else {
	$date = date('m/d/Y h:i:s', time());
	$desc = $date . $newcomments;
	$query="insert into Events (description, datetime, subjectID, personID) values ('". $desc ."','". $date ."', ". $sid .", ". $_COOKIE["personid"] .")";
	$r=executeQuery($query);
	if($r != "1") {
	echo "<script> alert('" . $result ."')</script>";
	}
	echo $query;
}
	
}
echo "<script>window.location='analyst.php'</script>";
?>
