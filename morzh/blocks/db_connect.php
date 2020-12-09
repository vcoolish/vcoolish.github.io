<?php
$connection = mysql_connect("localhost","admin","admin");
$db = mysql_select_db("new");
if(!$connection || !$db){
	exit(mysql_error());
}
$result = mysql_query ("SELECT * FROM rand");
$myrow = mysql_fetch_array($result);
do
$spec[] = $myrow[‘url’];
while ($myrow = mysql_fetch_array ($result));
srand ((double) microtime() * 1000000);
$random_number = rand(0,count($spec) – 1);
$db = mysql_select_db("info");
mysql_query("SET NAMES 'utfs' ");
?>