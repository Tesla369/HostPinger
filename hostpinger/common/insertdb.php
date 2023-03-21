<?php
require("db_connect.php");

$i=0;
$filePath = "file.txt";
$c = count(file($filePath));
//echo "$c";

if ($file = fopen("file.txt", "r")) {
    while($i<$c) {
        $line = fgets($file);
        list($id, $name, $host, $port, $type) = explode(":", $line);

$sql = "INSERT IGNORE INTO HostInfo (id, name, host, port, type, status)
VALUES ('$id', '$name', '$host', '$port', '$type', 'offline')";

if ($connection->query($sql) === TRUE) {
  echo ""; //New record created successfully #1";
} else {
  //echo "Error: " . $sq . "<br>" . $connection->error;
}

//$connection->close();

        $i++;
    }
}




?>
