<?php

require("db_connect.php");

$result = mysqli_query($connection,"SELECT * FROM HostInfo");
while($row = mysqli_fetch_array($result))
{

if($socket =@fsockopen($row['host'], $row['port'], $errno, $errstr, 0.5)) {

$sql="UPDATE HostInfo 
SET status='online' 
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
SET status='offline'
WHERE host='".$row['host']."' AND port='".$row['port']."'";

if ($connection->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error updating record: " . $connection->error;
}


}

}

?>
