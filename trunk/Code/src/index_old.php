#!/usr/local/bin/php5
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>DBMS Spring 2011 Project</title>
<meta name="description" content="Medical website">
<link href="css/style.css" rel="stylesheet" type="text/css">
<SCRIPT TYPE="text/javascript">
function cleartxt()
{
document.getElementById('txtusername').value = '';
document.getElementById('txtpassword').value = '';
}
</SCRIPT>
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
<td height="143"><img src="images/dbms.gif" width="207" height="143">
</td>
</tr>
<tr>
<td height="1"></td>
</tr>
<tr>
<td height="84" background="images/bg_2.jpg"><img src="images/spacer.gif" width="1" height="84"></td>
</tr>
<tr>
<td height="195" align="right"><img src="images/img_1001.jpg" width="185" height="195"></td>
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
<td align="center" valign="middle" background="images/btn_bg.jpg"><a href="#" class="menu">HOME</a></td>
<td width="17"><img src="images/btn_r.jpg" width="17" height="31"></td>
<td width="1"><img src="images/spacer.gif" width="1" height="1"></td>
<td width="17"><img src="images/btn_l.jpg" width="17" height="31"></td>
<td align="center" valign="middle" background="images/btn_bg.jpg"><a href="#" class="menu">DOCUMENTS</a></td>
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
<td><h1>WELCOME TO DBMS COP5725 SPRING 2011 PROJECT WEBSITE...</h1>
      <p></p></td>
</tr>
</table></td>
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
<p>This is a demo website created for DBMS Spring 2011 Project. To login into the website, please read the Project report in the Documents section. </p>

<div style="border:#0479B0 solid 1px;padding:4px 6px 2px 6px">Please Login<br>
<form id="form1" name="form1" method="post" action="loginredirect.php">
  <table width="297" border="0">
    <tr>
      <td width="142">Username        </td>
      <td width="143"><input type="text" name="username" id="txtusername" style="font-size: 10px;background: #F0F6D6"/></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="password"></label>
      <input type="password" name="password" id="txtpassword" style="font-size: 10px;background: #F0F6D6" /></td>
    </tr>
    <tr>
      <td colspan="2">
      <input type="submit" name="Submit" id="btnSubmit" value="Submit" style="font-size: 10px;background: #D5D6D9"/>
      &nbsp;<input type="button" onclick="cleartxt()" name="Submit" id="btnReset" value="Reset"  style="font-size: 10px;background: #D5D6D9"/>
      </td>
    </tr>
  </table>
</form>
</div>
</td>
<td width="42"><img src="images/spacer.gif" width="42" height="1"></td>
</tr>
<tr>
<td height="5" colspan="3"><img src="images/spacer.gif" width="1" height="5"></td>
</tr>
</table></td>
</tr>
<tr>
<td height="1"><img src="images/spacer.gif" width="1" height="1"></td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
<tr>
<tr>
</tr>
</table></td>
</tr>
</table>

</body>
</html>
