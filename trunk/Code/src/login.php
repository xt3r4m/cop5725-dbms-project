#!/usr/local/bin/php5
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<SCRIPT TYPE="text/javascript">
function cleartxt()
{
document.getElementById('txtusername').value = '';
document.getElementById('txtpassword').value = '';
}
</SCRIPT>
</head>

<body>
<form id="form1" name="form1" method="post" action="loginredirect.php">
  <table width="297" border="0" align="center">
    <tr>
      <td width="142">Username        </td>
      <td width="143"><input type="text" name="username" id="txtusername" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="password"></label>
      <input type="password" name="password" id="txtpassword" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center">
      <input type="submit" name="Submit" id="btnSubmit" value="Submit" />
      &nbsp;<input type="button" onclick="cleartxt()" name="Submit" id="btnReset" value="Reset" />
      </td>
    </tr>
  </table>
</form>
<table><tr><td><a href="analyst.html">Login as Analyst</a></td></tr>
<tr><td><a href="therapist.html">Login as Therapist</a></td></tr>
<tr><td><a href="collector.html">Login as Collector</a></td></tr>
<tr><td><a href="admin.html">Login as Admin</a></td></tr></table>
</body>
</html>