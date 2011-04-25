#!/usr/local/bin/php5
<?php
$username=$_COOKIE["username"];
$usertype=$_COOKIE["usertype"];

if ($username==null || $usertype !='analyst')
{echo "<script language=javascript>window.location = 'index.php';</script>";exit;}
$id = $_POST["id"];
include("Connection.php");
if ($id=="report1")
{$select = "select * from Report1a order by name,collectionPeriodID";}
if ($id=="report2")
{$select = "select * from Report2a order by name,collID";}

require_once 'Writer.php';

// Creating a workbook
$workbook = new Spreadsheet_Excel_Writer();


$format_bold =& $workbook->addFormat();
$format_bold->setBold();
$format_bold->setFgColor('yellow');
$format_bold->setTextWrap();

// sending HTTP headers
$workbook->send('report.xls');

// Creating a worksheet
$worksheet =& $workbook->addWorksheet('Report');
$worksheet->setColumn(0,5,20.00);
if ($id=="report1")
{$worksheet->write(0, 0, "Behavior",$format_bold);
$worksheet->write(0, 1, "Collection Period",$format_bold);
$worksheet->write(0, 2, "Subject Name",$format_bold);}
if ($id=="report2")
{$worksheet->write(0, 0, "Behavior",$format_bold);
$worksheet->write(0, 1, "Average Duration(secs)",$format_bold);
$worksheet->write(0, 2, "Collection Period",$format_bold);
$worksheet->write(0, 3, "Subject",$format_bold);
}
$result=executeQuery($select);
$i=1;
while($row = $result->fetchRow()) {
// The actual data
$worksheet->write($i, 0, $row[0]);

$worksheet->write($i, 1, $row[1]);

if ($id=="report2")
{$worksheet->write($i, 2, $row[2]);$worksheet->write($i, 3, $row[3]);}
else
{$worksheet->write($i, 2, $row[3]);}
$i=$i+1;
}


// Let's send the file
$workbook->close();
?> 