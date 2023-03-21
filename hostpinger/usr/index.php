<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#000000"/>
<center><h1><a href="./"><img src="../img/logo.png" width="50"></a> H<b style="color:#ff0000">0</b>stP<b style="color:#00ff00">1</b>nger</h1></center>
<link rel="icon" href="../img/logo.png  " type="image/icon type">
<title>
HostPinger
</title>

<!-- - <script>
function autoRefresh() {
window.location = window.location.href;
}
setInterval('autoRefresh()', 60000);
</script> - -->

<!-- - <script>
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("tableReload").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "api/reloaddb.php", true);
  xhttp.send();
</script> - -->

<!-- - <script>
window.setInterval(function() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("tableReload").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "api/reloaddb.php", true);
  xhttp.send();
}, 30000);
</script> - -->


<style>

@import url("https://fonts.googleapis.com/css2?family=Asap&family=Roboto:ital,wght@0,500;0,900;1,500&display=swap");

header {
  width: 100%;
  height: 40vh;
  display: inline-block;
  flex-direction: column;
  align-items: center;
}
header h1 {
  position: relative;
  left: 10%;
  width: 80%;
  font-size: 60px;
  font-weight: 600;
  color: transparent;
  -webkit-background-clip: text;
  background-clip: text;   
}

.preloader {
  background-image: url('../img/pikrepo.jpg');
  background-repeat: no-repeat;
  /*background-position: center;*/
  background-attachment: fixed;
  background-size: 100% 100%;
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 999999;
    -webkit-transition: 0.6s;
    -o-transition: 0.6s;
    transition: 0.6s;
    margin: 0 auto;
}
.preloader .preloader-circle {
    width: 100px;
    height: 100px;
    position: absolute;
    top: 50%;
    left:50%;
    margin: -76px 0 0 -76px;
    border-style: solid;
    border-width: 3px;
    border-top-color: #ff656a;
    border-bottom-color: transparent;
    border-left-color: transparent;
    border-right-color: transparent;
    z-index: 10;
    border-radius: 50%;
    -webkit-box-shadow: 0 1px 5px 0 rgba(35, 181, 185, 0.15);
    box-shadow: 0 1px 5px 0 rgba(35, 181, 185, 0.15);
    background-color: #ffffff;
    -webkit-animation: zoom 2000ms infinite ease;
    animation: zoom 2000ms infinite ease;
    -webkit-transition: 0.6s;
    -o-transition: 0.6s;
    transition: 0.6s;
}
.preloader .preloader-circle2 {
    border-top-color: #0078ff;
}
.preloader .preloader-img {
    position: absolute;
    top: 50%;
    z-index: 200;
    left: 0;
    right: 0;
    margin: 0 auto;
    text-align: center;
    display: inline-block;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    padding-top: 6px;
    -webkit-transition: 0.6s;
    -o-transition: 0.6s;
    transition: 0.6s;
}
.preloader .preloader-img img {
    max-width: 55px;
}
.preloader .pere-text strong {
    font-weight: 800;
    color: #dca73a;
    text-transform: uppercase;
}

@-webkit-keyframes zoom {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        -webkit-transition: 0.6s;
        -o-transition: 0.6s;
        transition: 0.6s;
    }
    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
        -webkit-transition: 0.6s;
        -o-transition: 0.6s;
        transition: 0.6s;
    }
}
@keyframes zoom {
    0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
        -webkit-transition: 0.6s;
        -o-transition: 0.6s;
        transition: 0.6s;
    }
    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
        -webkit-transition: 0.6s;
        -o-transition: 0.6s;
        transition: 0.6s;
    }
}

#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border: 16px solid #ff0000;
  border-radius: 50%;
  border-top: 16px solid #00ff00;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
  0%   {filter: blur(8px);}
  25%  {filter: blur(6px);}
  50% {filter: blur(4px);}
  75%  {filter: blur(2px);}
  100% {filter: blur(0px);}

}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
  0%   {filter: blur(8px);}
  25%  {filter: blur(6px);}
  50% {filter: blur(4px);}
  75%  {filter: blur(2px);}
  100% {filter: blur(0px);}
}

#myDiv {
  display: none;
  text-align: center;
}
th, td {
  text-align: center;
  padding-top: 5px;
  padding-bottom: 5px;
  padding-right: 15px;
  padding-left: 15px;
}

@keyframes colorchange {
  0%   {background: red;filter: blur(8px);}
  25%  {background: green;filter: blur(6px);}
  50% {background: linear-gradient(to left, #800000 0%, #003300 100%);filter: blur(4px);}
  75%  {background: linear-gradient(to right, #800000 0%, #003300 100%);filter: blur(2px);}
  100% {background: linear-gradient(to left, #800000 0%, #003300 100%);filter: blur(0px);}
}

th {
  position: sticky;
  top: 0;
  border: 1px solid cyan;
  background: linear-gradient(to right, #00ffff 0%, #808080 2%, #5A5A5A 10%, #000000 30%, #000000 70%, #5A5A5A 90%, #808080 98%, #00ffff 100%);
  color: white;
  }

.tableContainer {
    height: 65%;
    width: 100%;
    overflow-y: scroll;
}
.table {
    position: sticky;
}

::-webkit-scrollbar {
    display: none;
}

.tableContainer {
    -ms-overflow-style: none;  /* Internet Explorer 10+ */
    scrollbar-width: none;  /* Firefox */
}
.tableContainer::-webkit-scrollbar { 
    display: none;  /* Safari and Chrome */
}

body {
font-family: "Asap", sans-serif;
color: white;
 /*background: radial-gradient(#e0ffff, #000000);*/
  background-image: url('../img/image.jpg');
  background-repeat: no-repeat;
  /*background-position: center;*/
  background-attachment: fixed;
  background-size: 100% 100%;
  /*height: 100%;
  filter: blur(8px);
    -webkit-filter: blur(8px);
  animation-name: colorchang;
  animation-duration: 4s;*/
}

tr {
color: black;
}

.panel { display: none; }
.show { display: block; }

/*
button { text-transform: uppercase; }
button:hover { cursor: pointer; background-color: #fffff0; }
*/


button{
  font-family: "Asap", sans-serif;
  color: cyan;
  background-color: inherit;
  border: 0;
  cursor: pointer;

}

.button1 {
	border: 0;
	border-color: #18bccc;
	border-radius: 100%;
        cursor: pointer;
        ///padding-top: 10;
	///padding-left: 10;
	///height: 30;
	width: 40;
	///z-index: 1;
        appearance: none;
        background-color: inherit;
	color: cyan;
	font-size: 30px;
        transition: transform .7s ease-in-out;
        margin-left:10px;
}

.button1:hover {
        transform: rotate(360deg);
}

.arot {
text-decoration:none;
    display:inline-block;
        transition: transform .7s ease-in-out;
}

.arot:hover {
        transform: rotate(360deg);

}

.button2:hover {
	color: white;
}

#q { 
  border: none;
  background: transparent;
  margin: 0;
  padding: 7px 8px;
  font-size: 14px;
  color: inherit;
  border: 1px solid transparent;
  border-radius: inherit;
   margin-left: 5%;
   /*padding: 5px; 
   font-size: 1em;  
   line-height: 20px; 
   background-color: inherit;
   color: white;
   border-color: #18bccc;
   border-radius: 12px;*/
}

#q::placeholder {
color: #bbb;
}

#b { 
   /* image replacement */
   /*text-indent: -99999px;*/
  text-indent: -999px;
  overflow: hidden;
  width: 40px;
  padding: 0;
  margin: 0;
  border: 1px solid transparent;
  border-radius: inherit;
  background: transparent url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='cyan' width='16' height='16' class='bi bi-search' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'%3E%3C/path%3E%3C/svg%3E") no-repeat center;
  cursor: pointer;
  opacity: 0.7;
  font-size: 20px;

   /* placing next to input using float or absolute positioning omitted ... */
}

#b::hover {
  opacity: 1;
}

#b1 { 
   /* image replacement */
   /*text-indent: -99999px;*/
  text-indent: -999px;
  overflow: hidden;
  width: 40px;
  padding: 0;
  margin: 0;
  border: 1px solid transparent;
  border-radius: inherit;
  background: transparent url("data:image/svg+xml;charset=UTF-8,%3csvg style='color: rgb(0, 255, 255);' xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor' class='bi bi-activity' viewBox='0 0 16 16'%3e%3cpath fill-rule='evenodd' d='M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z' fill='%2300ffff'%3e%3c/path%3e%3c/svg%3e") no-repeat center;
  cursor: pointer;
  opacity: 0.7;
  font-size: 20px;

   /* placing next to input using float or absolute positioning omitted ... */
}

#b1::hover {
  opacity: 1;
}

#q:focus {
  box-shadow: 0 0 3px 0 cyan;
  border-color: cyan;
  outline: none;
}

#ib { 
  border: none;
  background: transparent;
  margin: 0;
  padding: 7px 8px;
  font-size: 14px;
  color: inherit;
  border: 1px solid transparent;
  border-radius: inherit;
}

#ib::placeholder {
color: #bbb;
}

#ib:focus {
  box-shadow: 0 0 3px 0 cyan;
  border-color: cyan;
  outline: none;
}


#ibh { 
  border: none;
  background: transparent;
  margin: 0;
  padding: 7px 8px;
  font-size: 14px;
  color: inherit;
  border: 1px solid transparent;
  border-radius: inherit;
}

#ibh::placeholder {
color: #bbb;
}

#ibh:focus {
  box-shadow: 0 0 3px 0 cyan;
  border-color: cyan;
  outline: none;
}

#ibp { 
  border: none;
  background: transparent;
  margin: 0;
  padding: 7px 8px;
  font-size: 14px;
  color: inherit;
  border: 1px solid transparent;
  border-radius: inherit;
}

#ibp::placeholder {
color: #bbb;
}

#ibp:focus {
  box-shadow: 0 0 3px 0 cyan;
  border-color: cyan;
  outline: none;
}


.searchform{ margin-left: -100%; }

</style>
</head>
<center>


</center>
<div id="search">

<p style="color:cyan; margin-left:90%;">
<a class="profile" style="" href="../profile/"><svg style="color: rgb(0, 255, 255);" width="24" height="24" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M24 42C33.9411 42 42 33.9411 42 24C42 14.0589 33.9411 6 24 6C14.0589 6 6 14.0589 6 24C6 33.9411 14.0589 42 24 42ZM24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" fill="#00ffff"></path> <path d="M12 35.6309C12 34.5972 12.772 33.7241 13.7995 33.6103C21.515 32.7559 26.5206 32.8325 34.218 33.6287C35.2324 33.7337 36 34.5918 36 35.6116C36 36.1807 35.7551 36.7275 35.3262 37.1014C26.2414 45.0195 21.0488 44.9103 12.6402 37.1087C12.2306 36.7286 12 36.1897 12 35.6309Z" fill="#00ffff"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M34.1151 34.6234C26.4784 33.8334 21.5449 33.7587 13.9095 34.6042C13.3954 34.6612 13 35.1002 13 35.6309C13 35.9171 13.1187 36.1885 13.3204 36.3757C17.4879 40.2423 20.6461 41.9887 23.7333 41.9999C26.8309 42.0113 30.1592 40.2783 34.6691 36.3476C34.8767 36.1667 35 35.8964 35 35.6116C35 35.0998 34.6154 34.6752 34.1151 34.6234ZM13.6894 32.6164C21.4852 31.7531 26.5628 31.8315 34.3209 32.6341C35.8495 32.7922 37 34.0838 37 35.6116C37 36.465 36.6336 37.2884 35.9832 37.8553C31.4083 41.8426 27.598 44.0141 23.726 43.9999C19.8435 43.9857 16.2011 41.7767 11.9601 37.8418C11.3425 37.2688 11 36.4624 11 35.6309C11 34.0943 12.1487 32.787 13.6894 32.6164Z" fill="#00ffff"></path> <path d="M32 20C32 24.4183 28.4183 28 24 28C19.5817 28 16 24.4183 16 20C16 15.5817 19.5817 12 24 12C28.4183 12 32 15.5817 32 20Z" fill="#00ffff"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M24 26C27.3137 26 30 23.3137 30 20C30 16.6863 27.3137 14 24 14C20.6863 14 18 16.6863 18 20C18 23.3137 20.6863 26 24 26ZM24 28C28.4183 28 32 24.4183 32 20C32 15.5817 28.4183 12 24 12C19.5817 12 16 15.5817 16 20C16 24.4183 19.5817 28 24 28Z" fill="#00ffff"></path> </svg></a>
 USER </p>

<!-- - <form class="sform" id="sform" action="<?php echo($_SERVER["SCRIPT_NAME"]);?>" method="POST"> - -->
<input class="search search-input" data-table="host-list" type="text" name="q" placeholder="Search" id="q">
<input id="b" class="button1" type="submit" name="sform" value="🔎">
<!-- - </form> - -->
</div>
<br>
<center>


<body onload="myFunction()">
<!-- Preloader Start -->
<div id="preloader-active">
<div class="preloader d-flex align-items-center justify-content-center">
<div class="preloader-inner position-relative">
<div class="preloader-circle">
<div class="preloader-img pere-text"><img src="../img/loaderimg.png" /></div></div>
</div>
</div>
</div>
<!-- Preloader Ends -->

<div style="display:none;" id="myDiv" class="animate-bottom">

<!-- - </center>
<div id="search">
<form class="sform" id="sform" action="<?php echo($_SERVER["SCRIPT_NAME"]);?>" method="POST">
<input class="search search-input" data-table="host-list" type="text" name="q" placeholder="Search" id="q">
<input id="b" class="button1" type="submit" name="sform" value="🔎">
</form></div>
<center> - -->

<div id="tableReload">
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

<!-- -
<?php
/*
require("db_connect.php");

$result = mysqli_query($connection,"SELECT * FROM HostInfo");
while($row = mysqli_fetch_array($result))
{

if($socket =@fsockopen($row['host'], $row['port'], $errno, $errstr, 0.5)) {

$sql="UPDATE HostInfo 
SET status='1' 
WHERE host='".$row['host']."' AND port='".$row['port']."'";

if ($connection->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error updating record: " . $connection->error;
}

fclose($socket);
}
else
{

$sql="UPDATE HostInfo
SET status='0'
WHERE host='".$row['host']."' AND port='".$row['port']."'";

if ($connection->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error updating record: " . $connection->error;
}


}

}
*/
?>
- -->

<?php

//require("db_connect.php");
require("../common/updatedb.php");

//session_start();

//$message = "";

$i=0;
$onc=0;
$offc=0;


/*
if(isset($_POST["sform"]) || $_POST["q"] != "")
{

$q = $_POST["q"];

$resql = mysqli_query($connection,"SELECT * FROM HostInfo WHERE id='".$q."' OR name='".$q."' OR host='".$q."' OR port='".$q."' OR status='".$q."'");
while($row = mysqli_fetch_array($resql))
{
$dbstatus = $row['status'];
$dbid = $row['id'];
$dbname = $row['name'];
$dbhost = $row['host'];
$dbport = $row['port'];

if ($dbstatus === "1"){
echo "<tr style=\"background-color:#00ff00;\"><td>".$dbid."</td>";
echo "<td>".$dbname."</td>";
echo "<td>".$dbhost."</td>";
echo "<td>".$dbport."</td>";
//if ($row['status'] === "1"){
echo "<td>online! <img src=\"https://www.freeiconspng.com/uploads/green-arrow-png-7.png\" width=\"20\" alt=\"dark green up arrow png\" /></td>";

if ($dbport === "80")
{
echo "<td><a target=\"_blank\" href=\"http://$dbhost:$dbport\">View</a></td></tr>";
}

elseif ($dbport === "443")
{
echo "<td><a target=\"_blank\" href=\"https://$dbhost:$dbport\">View</a></td></tr>";
}

else
{
echo "<td>N/A</td></tr>";
}

$onc++;
}
else
{
echo "<tr style=\"background-color:#ff0000;\"><td>".$dbid."</td>";
echo "<td>".$dbname."</td>";
echo "<td>".$dbhost."</td>";
echo "<td>".$dbport."</td>";
//if ($row['status'] === "0"){
echo "<td>offline! <img src=\"https://freepngimg.com/thumb/web_design/24744-4-down-arrow-transparent-background.png\" width=\"20\" /></td>";
if ($dbport === "80")
{
echo "<td>N/A</td></tr>";
}
else
{
echo "<td>N/A</td></tr>";
}

$offc++;
//}
//else{echo "<td>error off</td></tr>";}

}
$i++;
}
*/

if(isset($_POST['sform']))
{
$q=$_POST['q'];
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

/*$sql="UPDATE HostInfo 
SET status='1' 
WHERE host='".$row['host']."' AND port='".$row['port']."'";

if ($connection->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error updating record: " . $connection->error;
}*/

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


/*$sql="UPDATE HostInfo
SET status='0'
WHERE host='".$row['host']."' AND port='".$row['port']."'";

if ($connection->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error updating record: " . $connection->error;
}*/

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

</div>


<!-- - /*
<div id="search">
<form id="sform" action="<?php echo($_SERVER["SCRIPT_NAME"]);?>" method="POST">
<label for="search">SEARCH:</label><br />
<input type="text" name="q" id="q">
<input id="button" type="submit" name="sform" value="🔎">
</form> */ - -->

<?php
/*
if(isset($_POST["sform"]))
{

$q = $_POST["q"];

$sql = "SELECT * FROM HostInfo WHERE id='".$q."' OR name='".$q."' OR host='".$q."' OR port='".$q."' OR status='".$q."'";

if ($connection->query($sql) === TRUE) {
  echo "<script type='text/javascript'>window.location='./'</script>";
} else {
  echo "Error deleting record: " . $connection->error;
}

}
?>

</div>

*/ ?>

<div class="buttons">
<a class="arot" id="profile" href="../admin/"><svg style="color: rgb(0, 255, 255);" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16"> <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z" fill="#00ffff"></path> </svg></a>
  <button data-id="check" class="button1">?</button><!-- - //<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="cyan" class="bi bi-check2-circle" viewBox="0 0 16 16"> <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/> <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/> </svg></button> <!-- - // <img src="https://png2.cleanpng.com/sh/2e052fb842bfe2d2a36b5ffa76da5625/L0KzQYm3UsA5N6F2fZH0aYP2gLBuTfNpbZRwRd9qcnuwc73wkL1ieqUye9puY3uwfbL5iCMuPZI8e6IENUC8cYq5hMgvPmY5S6o9OEm0RYKBUMc5Omk9TqU8MT7zfri=/kisspng-check-mark-clip-art-check-marks-5a7c09509a92d8.6543848915180782886331.png" style="transform: rotate(90deg);" width="30" border="0" /></button> - -->
  <button data-id="clear" class="button1" onclick="clearPingResult()">x</button>
</div>


<?php

function is_valid_domain_name($domain_name)
{

$IpRegX = "/^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$/";

$HostRegX ="/^(([a-zA-Z0-9]|[a-zA-Z0-9][a-zA-Z0-9\-]*[a-zA-Z0-9])\.)*([A-Za-z0-9]|[A-Za-z0-9][A-Za-z0-9\-]*[A-Za-z0-9])*$/";

$IPcheck = preg_match($IpRegX, $domain_name); //valid IP check
$Hostcheck = preg_match($HostRegX, $domain_name);
if ($IPcheck == 1 || $Hostcheck == 1)
{return 1;}
else { return 0; }
}

function validport($portnum)
{
$c=0;
for ($i=1; $i<=65535; $i++)
{
if($portnum == $i)
{
$c++;
}
else { continue; }
}
if ($c == 1)
{
return 1;
}
else { return 0; }
}

?>

<div class="panel" id="check">
<h3>QUICK PING:</h3>
<!-- -    <form action="" method="POST">  - -->

        <input type="text" id="ibh" name="h" size="20" placeholder="Host" autocomplete="off">

        <label for="port">:</label>
        <input type="text" id="ibp" name="p" size="5" placeholder="Port" autocomplete="off">

        <button class="button2" type="submit" name="form1" id="statuschk" value="submit">Ping</button>
	<label for="clearpingres">&nbsp &nbsp</label>
        <button class="button2" type="reset" id="reset" onclick="clearPingResult()">Clear</button>
<!-- -    </form> - -->

<?php
if(isset($_POST["form1"]))
{
$h = $_POST["h"];
$p = $_POST["p"];

$vdn = is_valid_domain_name($h);
//echo $vdn;
$vp = validport($p);
//echo $vp;
if($vdn!=1 && $vp!=1)
{
echo "Invalid Hostname & Port number";
}
elseif($vdn!=1)
{
echo "Invalid Hostname";
}
elseif($vp!=1)
{
echo "Invalid Port number";
}

else{

if($socket =@fsockopen($h, $p, $errno, $errstr, 1)) {
echo "🟢 $h:$p is online! 👍<br>";
fclose($socket);
}

else {
echo "🔴 $h:$p is offline! 👎<br>";
}

}

}
?>

<p id="stchkop"></p>

</div>

<div class="panel" id="clear">
</div>

<script>
window.setInterval(function() {   document.getElementById("b").click(); }, 40000);
</script>

<script>
var inputq = document.getElementById("q");
//ENTER WILL WORK AS PING IN INPUT BOX OF PORT
// Execute a function when the user presses a key on the keyboard
inputq.addEventListener("keypress", function(event) {
  // If the user presses the "Enter" key on the keyboard
  if (event.key === "Enter") {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("b").click();
  }
});
</script>

<script>
document.getElementById("b").addEventListener("click", function() {
//STATUS WILL BE CHECKED BY PASSING/SENDING HOST AND PORT AS PARAMETERS OF A POST REQUEST AND RESPONSE IS RECIEVED DYNAMICALLY
//USING XMLHTTPREQUESTS
// Get the input field
  var q = document.getElementById("q").value;

  var tableContainer = document.querySelector('.tableContainer');
  var scrollPos = tableContainer.scrollTop; // save current scroll position

  // Store the scroll position in a cookie
  document.cookie = "scrollPos=" + scrollPos + "; path=/";
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "api/reloaddb.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      document.getElementById("tableReload").innerHTML = this.responseText;
                // update the status in the table with the returned data

    // Restore the scroll position
    var tableContainer = document.querySelector('.tableContainer');
    var scrollPos = getCookie("scrollPos");
    if (scrollPos !== "") {
      tableContainer.scrollTop = scrollPos;
    }

    }
  };
  xhr.send("q=" + q);
});

// Helper function to read cookie values
function getCookie(name) {
  var value = "; " + document.cookie;
  var parts = value.split("; " + name + "=");
  if (parts.length === 2) {
    return parts.pop().split(";").shift();
  }
  return "";
}
</script>

<script>
var input = document.getElementById("ibp");

// Execute a function when the user presses a key on the keyboard
input.addEventListener("keypress", function(event) {
  // If the user presses the "Enter" key on the keyboard
  if (event.key === "Enter") {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("statuschk").click();
  }
});
</script>

<script>
document.getElementById("statuschk").addEventListener("click", function() {
// Get the input field
  var h = document.getElementById("ibh").value;
  var p = document.getElementById("ibp").value;

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "api/statuschk.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
            document.getElementById("stchkop").innerHTML = this.responseText;
                // update the status in the table with the returned data
    }
  };
  xhr.send("h=" + h + "&p=" + p);
});
</script>

<script>
function clearPingResult()
{
document.getElementById("stchkop").innerHTML = '';
var valh= document.getElementById("ibh");
var valp= document.getElementById("ibp");

if (valh.value !="" || valp.value !="")
{
  valh.value = "";
  valp.value = "";
}

}

</script>

<script>

// Cache out buttons container, and all of the panels
const buttons = document.querySelector('.buttons');
const panels = document.querySelectorAll('.panel');

// Add an event listener to the buttons container
buttons.addEventListener('click', handleClick);

// When a child element of `buttons` is clicked
function handleClick(e) {
 
  // Check to see if its a button
  if (e.target.matches('button')) {

    // For every element in the `panels` node list use `classList`
    // to remove the show class
    panels.forEach(panel => panel.classList.remove('show'));

    // "Destructure" the `id` from the button's data set
    const { id } = e.target.dataset;

    // Create a selector that will match the corresponding
    // panel with that id. We're using a template string to
    // help form the selector. Basically it says find me an element
    // with a "panel" class which also has an id that matches the id of
    // the button's data attribute which we just retrieved.
    const selector = `.panel[id="${id}"]`;

    // Select the `div` and, using classList, again add the
    // show class
    document.querySelector(selector).classList.add('show');
  }
}

</script>

    <script>
        (function(document) {
            'use strict';

            var TableFilter = (function(myArray) {
                var search_input;

                function _onInputSearch(e) {
                    search_input = e.target;
                    var tables = document.getElementsByClassName(search_input.getAttribute('data-table'));
                    myArray.forEach.call(tables, function(table) {
                        myArray.forEach.call(table.tBodies, function(tbody) {
                            myArray.forEach.call(tbody.rows, function(row) {
                                var text_content = row.textContent.toLowerCase();
                                var search_val = search_input.value.toLowerCase();
                                row.style.display = text_content.indexOf(search_val) > -1 ? '' : 'none';
                            });
                        });
                    });
                }

                return {
                    init: function() {
                        var inputs = document.getElementsByClassName('search-input');
                        myArray.forEach.call(inputs, function(input) {
                            input.oninput = _onInputSearch;
                        });
                    }
                };
            })(Array.prototype);

            document.addEventListener('readystatechange', function() {
                if (document.readyState === 'complete') {
                    TableFilter.init();
                }
            });

        })(document);
    </script>

<script>

var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("preloader-active").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</body>
</center>
</html>
