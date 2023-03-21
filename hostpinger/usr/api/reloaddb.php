<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <div class="table-responsive">
<center>
      <div class="tableContainer">
        <table class="table table-bordered host-list"; border-collapse: collapse; width: 100%;>

<!-- - </center>
<div class="searchform" id="search">
<form class="sform" id="sform" action="<?php echo($_SERVER["SCRIPT_NAME"]);?>" method="POST">
<input class="search search-input" data-table="host-list" type="text" name="q" placeholder="Search" id="q">
<input id="b" class="button1" type="submit" name="sform" value="🔎">
</form></div><br>
<center> - -->

<center>
       <thead>
        <tr>
         <th>Id</th>
         <th>Name</th>
         <th>Host</th>
         <th>Port</th>
         <th>Type</th>
         <th>Status</th>
         <th>Access</th>
    </thead>
    <tbody>


<?php

require("../../common/updatedb.php");

$i=0;
$onc=0;
$offc=0;

//if(isset($_POST['sform']))
//{
$q=$_POST['q'];
if ($q != "")
{
$q = trim(htmlspecialchars($q));
$q = mysqli_real_escape_string($connection, $q);
$query = "SELECT * FROM `HostInfo` WHERE CONCAT(`id`, `name`, `host`, `port`, `type`, `status`) LIKE '%".$q."%'";
$result = mysqli_query($connection,$query);
}
else
{
$result = mysqli_query($connection,"SELECT * FROM HostInfo ORDER BY status, id");
}
while($row = mysqli_fetch_array($result))
{
$dbstatus = $row['status'];
$dbid = $row['id'];
$dbname = $row['name'];
$dbhost = $row['host'];
$dbport = $row['port'];
$dbtype = $row['type'];

//if($socket =@fsockopen($row['host'], $row['port'], $errno, $errstr, 0.75)) {
if ($dbstatus === "online"){

echo "<tr style=\"background-color:#90EE90;\"><td>".$dbid."</td>";
echo "<td>".$dbname."</td>";
echo "<td>".$dbhost."</td>";
echo "<td>".$dbport."</td>";
echo "<td>".$dbtype."</td>";
//if ($row['status'] === "1"){
echo "<td>online! <img src=\"../img/onlineimg.png\" width=\"20\" alt=\"dark green up arrow png\" /></td>";

if ($dbport === "80")
{
echo "<td><a target=\"_blank\" href=\"http://$dbhost:$dbport\"><svg xmlns=\"http://www.w3.org/2000/svg\"  width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M18,10.82a1,1,0,0,0-1,1V19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V8A1,1,0,0,1,5,7h7.18a1,1,0,0,0,0-2H5A3,3,0,0,0,2,8V19a3,3,0,0,0,3,3H16a3,3,0,0,0,3-3V11.82A1,1,0,0,0,18,10.82Zm3.92-8.2a1,1,0,0,0-.54-.54A1,1,0,0,0,21,2H15a1,1,0,0,0,0,2h3.59L8.29,14.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L20,5.41V9a1,1,0,0,0,2,0V3A1,1,0,0,0,21.92,2.62Z\"/></svg></a></td></tr>";
}

elseif ($dbport === "443")
{
echo "<td><a target=\"_blank\" href=\"https://$dbhost:$dbport\"><svg xmlns=\"http://www.w3.org/2000/svg\"  width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path d=\"M18,10.82a1,1,0,0,0-1,1V19a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V8A1,1,0,0,1,5,7h7.18a1,1,0,0,0,0-2H5A3,3,0,0,0,2,8V19a3,3,0,0,0,3,3H16a3,3,0,0,0,3-3V11.82A1,1,0,0,0,18,10.82Zm3.92-8.2a1,1,0,0,0-.54-.54A1,1,0,0,0,21,2H15a1,1,0,0,0,0,2h3.59L8.29,14.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L20,5.41V9a1,1,0,0,0,2,0V3A1,1,0,0,0,21.92,2.62Z\"/></svg></a></td></tr>";
}

else
{
echo "<td><a href=\"#online\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"black\" class=\"bi bi-slash-circle\" viewBox=\"0 0 16 16\"> <path d=\"M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z\"/> <path d=\"M11.354 4.646a.5.5 0 0 0-.708 0l-6 6a.5.5 0 0 0 .708.708l6-6a.5.5 0 0 0 0-.708z\"/> </svg></a></td></tr>";
}

$onc++;
//}
//else{echo "<td>error on</td></tr>";}
//fclose($socket);
}

else {

echo "<tr style=\"background-color:#FFCCCB;\"><td>".$dbid."</td>";
echo "<td>".$dbname."</td>";
echo "<td>".$dbhost."</td>";
echo "<td>".$dbport."</td>";
echo "<td>".$dbtype."</td>";

//if ($row['status'] === "0"){
echo "<td>offline! <img src=\"../img/offlineimg.png\" width=\"20\" /></td>";
if ($dbport === "80")
{
echo "<td><a href=\"#offline\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"black\" class=\"bi bi-x-circle-fill\" viewBox=\"0 0 16 16\"> <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z\"/> </svg></a></td></tr>";
}
elseif ($dbport === "443")
{
echo "<td><a href=\"#offline\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"black\" class=\"bi bi-x-circle-fill\" viewBox=\"0 0 16 16\"> <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z\"/> </svg></a></td></tr>";
}
else
{
echo "<td><a href=\"#offline\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"black\" class=\"bi bi-x-circle-fill\" viewBox=\"0 0 16 16\"> <path d=\"M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z\"/> </svg></a></td></tr>";
}

$offc++;
//}
//else{echo "<td>error off</td></tr>";}

}
$i++;
}

echo "</tbody></table></div><center></div></div></div></div>";
echo "<br>$i Hosts Listed <a href='./'><img src=\"../img/reload.png\" width=\"15\" /></a>";
?>
