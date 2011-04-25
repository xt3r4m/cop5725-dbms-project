#!/usr/local/bin/php5
<?php
include("Connection.php");
$username=$_COOKIE["username"];
$usertype=$_COOKIE["usertype"];

if ($username==null || $usertype !='collector')
{echo "<script language=javascript>window.location = 'index.php';</script>";exit;}

	$collID=$_POST["collid"];
	$query="SELECT a.evaluationID,therapist.name FROM Collection_Period a, Person therapist, Collection_Period c WHERE a.evaluationID=c.evaluationID AND therapist.personID=c.therapistID AND c.collectionPeriodID=\"".$collID."\";";
	$result1=executeQuery($query);
	$row=$result1->fetchrow();
	$therapistName=$row[1];
	$evalID=$row[0];
	$query="SELECT b.name FROM Evaluation a, Person b WHERE a.subjectID=b.personID AND a.evaluationID=\"".$evalID."\";";
	$result2=executeQuery($query);
	$row=$result2->fetchrow();
	$subjectName=$row[0];
	$query="SELECT personID FROM Person WHERE name=\"".$subjectName."\";";
	$result3=executeQuery($query);
	$row=$result3->fetchrow();
	$subjectID=$row[0];
	
	$query="SELECT personID FROM Person WHERE name=\"".$therapistName."\";";
	$result4=executeQuery($query);
	$row=$result4->fetchrow();
	$therapistID=$row[0];
	
	
	
	//$subjectName="subjectName";
	//$therapistName="therapistName";
	
	$query1="select behavior from Collection_Period_Behavior where collection_period_id=".$collID." and switch=\"0\";";
	$subjectBehaviors = executeQuery($query1);
	
	$query2="select behavior from Collection_Period_Behavior where collection_period_id=".$collID." and switch=\"1\";";
	$therapistBehaviors = executeQuery($query2);
	
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>DBMS Spring 2011 Project</title>
<SCRIPT TYPE="text/javascript">

var start_time;

var t;
var flag=0;
var behname="default";


function down() {
    start_time = new Date();
}

function up(behname,personName,personID) {
var textArea1 = document.getElementById("eventdisplay");
var textArea2 = document.getElementById("querytxt");

    var now = new Date();
	
	var h=start_time.getHours();
	var m=start_time.getMinutes();
	var s=start_time.getSeconds();
	
	var eh=now.getHours();
	var em=now.getMinutes();
	var es=now.getSeconds();
	
    var time=(eh-h)*3600+(em-m)*60+(es-s);
	
	h=checkTime(h);
	//m=checkTIme(m);
	s=checkTime(s);
	
	if(flag == 1){
	textArea1.value = textArea1.value + behname+" by "+personName+" - "+h+":"+m+":"+s+" ("+time+" secs)\n";
	//textArea1.scrollTop=textArea1.scrollTop-textArea1.clientHeight;
	textArea1.scrollTop=99999999;
	
	//alert("<?php echo $collID;?>', '<?php echo $evalID;?>', '<?php echo $subjectID;?>");
	
	textArea2.value = textArea2.value + "("+time+", \'2011-04-19 20:54:23\', NULL, \'"+behname+"\', <?php echo $collID?>, <?php echo $evalID?>, "+personID+"), ";
	//textArea2.scrollTop=99999999;
	}
}


function startTime()
{
	flag = 1;
	
	
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
document.getElementById('time').value=h+":"+m+":"+s;
t=setTimeout('startTime()',500);
}

function stopTime(){

	clearTimeout(t);
	flag = 0;

}

function checkTime(i)
{
  if (i<10)
  {
  	i="0" + i;
  	return i;
  }
  else{
	return i;
  }
}


</SCRIPT>
<meta name="description" content="Medical website">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
<tr>
<td height="1" background="images/bg_1.jpg"><table height="60"  border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="15"><img src="images/spacer.gif" width="15" height="1"></td>
<td width="37"><img src="images/logo.jpg" width="37" height="59"></td>
<td width="6"><img src="images/spacer.gif" width="6" height="1"></td>
<td class="logo">DBMS Spring 2011 Project</td>
<td class="logo"><img src="images/spacer.gif" width="30" height="1"></td>
<td><img src="images/im_3.jpg" width="256" height="59"></td>
</tr>
<tr bgcolor="#FFFFFF">
<td height="1" colspan="6"><img src="images/spacer.gif" width="1" height="1"></td>
</tr>
</table></td>
</tr>
<tr>
<td height="100%" valign="top"><table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="207" height="100%" valign="top"><table width="100%"  border="0" cellpadding="0" cellspacing="0">
<tr>
<td height="143"><img src="images/im_1.jpg" width="207" height="143">
</td>
</tr>
<tr>
<td height="1"></td>
</tr>
<tr>
<td height="84" background="images/bg_2.jpg"><img src="images/spacer.gif" width="1" height="84"></td>
</tr>
<tr>
<td height="195" align="right"><img src="images/im_2.jpg" width="185" height="195"></td>
</tr>
</table></td>
<td height="100%" valign="top"><table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
<tr>
<td height="2" bgcolor="#A9ABB1"><img src="images/spacer.gif" width="1" height="2"></td>
</tr>
<tr>
<td height="43" background="images/bg_4.jpg"><table height="43"  border="0" cellpadding="0" cellspacing="0">
<tr>
<td height="6" colspan="20"><img src="images/spacer.gif" width="1" height="6"></td>
</tr>
<tr>
<td width="9"><img src="images/spacer.gif" width="9" height="1"></td>
<td width="17"><img src="images/btn_l.jpg" width="17" height="31"></td>
<td align="center" valign="middle" background="images/btn_bg.jpg"><a href="index.php" class="menu">HOME</a></td>
<td width="17"><img src="images/btn_r.jpg" width="17" height="31"></td>
<td width="1"><img src="images/spacer.gif" width="1" height="1"></td>
<td width="17"><img src="images/btn_l.jpg" width="17" height="31"></td>
<td align="center" valign="middle" background="images/btn_bg.jpg"><a href="documents.html" class="menu">DOCUMENTS</a></td>
<td width="17"><img src="images/btn_r.jpg" width="17" height="31"></td>
<td width="1"><img src="images/spacer.gif" width="1" height="1"></td>
<td width="17"><img src="images/btn_l.jpg" width="17" height="31"></td>
<td align="center" valign="middle" background="images/btn_bg.jpg"><a href="developers.php" class="menu">DEVELOPERS</a></td>
<td width="17"><img src="images/btn_r.jpg" width="17" height="31"></td>
<td width="1"><img src="images/spacer.gif" width="1" height="1"></td>
<td width="17"><img src="images/btn_l.jpg" width="17" height="31"></td>
<td align="center" valign="middle" background="images/btn_bg.jpg"><a href="http://www.cise.ufl.edu" class="menu">UFL CISE</a></td>
<td width="17"><img src="images/btn_r.jpg" width="17" height="31"></td>

</tr>
<tr>
<td height="6" colspan="20"><img src="images/spacer.gif" width="1" height="6"></td>
</tr>
</table></td>
</tr>
<tr>
<td height="2" bgcolor="#BFC0C4"><img src="images/spacer.gif" width="1" height="2"></td>
</tr>
<tr>
<td height="44" background="images/bg_5.jpg"><table width="100%" height="44"  border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="18"><img src="images/spacer.gif" width="18" height="1"></td>
<td>
      <p></p></td>
</tr>
</table><div align="right"><a href="./logout.php">Logout</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
</td>
</tr>
<tr>
<td height="1" background="images/bg_dotted.jpg"><img src="images/spacer.gif" width="1" height="1"></td>
</tr>
<tr>
<td valign="top" bgcolor="#D5D6D9"><table class="tdbgx" width="100%" height="181"  border="0" cellpadding="0" cellspacing="0" background="images/bg_6.jpg">
<tr>
<td height="16" colspan="3"><img src="images/spacer.gif" width="1" height="16"></td>
</tr>
<tr>
<td width="21"><img src="images/spacer.gif" width="21" height="1"></td>
<td valign="top">
<h1 style="color: #0479B0">&nbsp;</h1><p><p>

<table width="100%">
<form id="form1" name="form1" method="post" action="commitbehaviors.php">
    <td width="60%">
    <table width="100%" border="1">
    	<tr><td>
        Subject : <?php echo $subjectName;?>
        </td></tr>
        <tr><td>
        
        <?php while($row = $subjectBehaviors->fetchRow()) {
			echo "<input type=\"button\" value=".$row[0]." onMouseDown=\"down()\" onMouseUp=\"up('".$row[0]."','".$subjectName."','".$subjectID."')\" style=\"background: #F0F6D6; border:#0479B0 solid 1px;padding:4px 6px 2px 6px;font-size: 11px\"/>";
		}
		?>
        
        </td></tr>
        <tr><td>
        Therapist : <?php echo $therapistName;?>
        </td></tr>
        <tr><td>
        
        <?php while($row = $therapistBehaviors->fetchRow()) {
			echo "<input type=\"button\" value=".$row[0]." onMouseDown=\"down()\" onMouseUp=\"up('".$row[0]."','".$therapistName."','".$therapistID."')\" />";
		}
		?>
                
        </td></tr>
    		
    </table>
    </td><td width="40%"><p>
  <input type="text" name="time" id="time" align="right">
  <input type="button" name="timeStart" id="timeStart" value="Start" onMouseDown="startTime()">
    <input type="button" name="timeStop" id="timeStop" value="Stop" onMouseDown="stopTime()">
    </p>
      <p>
        <textarea name="eventdisplay" id="eventdisplay" cols="80" rows="10" disabled></textarea>
      </p>
      <input type="reset" name="reset" value="Clear All"/>
      <input type="submit" value="Commit Behaviors Data" />
      </td>
</table>
<div>
	<textarea name="querytxt" id="querytxt" cols="80" rows="10"></textarea>
</div>

</td>
<td width="42"><img src="images/spacer.gif" width="42" height="1"></td>
</tr>
<tr>
<td height="5" colspan="3"><img src="images/spacer.gif" width="1" height="5"></td>
</tr>
</form>
</table>

</td>
</tr>
<tr>
<td height="1"><img src="images/spacer.gif" width="1" height="1"></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
<tr>
<td height="1" background="images/bg_3.jpg"><table width="100%" height="74"  border="0" cellpadding="0" cellspacing="0">
<tr>
</tr>
</table></td>
</tr>
</table>

</body>
</html>
</html>
