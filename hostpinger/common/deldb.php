<?php
require("db_connect.php");

$sql = "DROP database HostDB";

if ($connection->query($sql) === TRUE) {
  echo ""; //record deleted";
} else {
  //echo "Error: " . $sq . "<br>" . $connection->error;
}

//$connection->close();



?>
