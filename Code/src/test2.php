#!/usr/local/bin/php5
<html>
<head>
<script type="text/javascript">
var start_time;

var behname="default";
function down() {
    start_time = new Date();
}

function up(behname,person) {
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
	
	var textArea1 = document.getElementById("tsttxt");
	textArea1.value = textArea1.value + behname+" by "+person+" - "+h+":"+m+":"+s+" ("+time+" secs)\n";
	//textArea1.scrollTop=textArea1.scrollTop-textArea1.clientHeight;
	textArea1.scrollTop=99999999;
	
	var textArea2 = document.getElementById("querytxt");
	textArea2.value = textArea2.value + "<Query goes here>\n";
	textArea2.scrollTop=99999999;
}

function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
document.getElementById('timeDisp').value=h+":"+m+":"+s;
t=setTimeout('startTime()',500);
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


</script>
</head>
<body onLoad="startTime()">

<p>
  <input type="button" value="test" onMouseDown="down()" onMouseUp="up('crying','john')" />
  
</p>
<p>&nbsp;</p>
<p>
  <label for="tsttxt"></label>
  <textarea name="tsttxt" id="tsttxt" cols="45" rows="5"></textarea>
</p>
<p>&nbsp;</p>
<p>
  <textarea name="querytxt" id="querytxt" cols="45" rows="5"></textarea>
  </p>
  
  <input type="text" id="timeDisp"/>
  
</p>
</body>
</html>