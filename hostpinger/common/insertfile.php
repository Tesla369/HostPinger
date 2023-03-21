<?php

$txt = "";
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
fwrite($myfile, $txt);
fclose($myfile);

require("db_connect.php");

$result = mysqli_query($connection,"SELECT * FROM HostInfo");

while($row = mysqli_fetch_array($result))
{
$dbstatus = $row['status'];
$dbid = $row['id'];
$dbname = $row['name'];
$dbhost = $row['host'];
$dbport = $row['port'];
$dbtype = $row['type'];

$arr = [$dbid, $dbname, $dbhost, $dbport, $dbtype, $dbstatus];
$line = implode(":", $arr) . "\n";
// $line1 = mysql_real_escape_string($line);

$myfile = fopen("file.txt", "a") or die("Unable to open file!");
fwrite($myfile, $line);
fclose($myfile);


}
?>
