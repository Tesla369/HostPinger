<?php

// DB CREDS
$dbhost = 'localhost';
$dbuser = 'user';
$dbpasswd = 'password';

// ADMIN LOGIN CREDS
$admuser = 'admin';
$admpasswd = 'admin';

// CREATE USER 'user'@'%' IDENTIFIED WITH mysql_native_password BY 'password';
// GRANT ALL ON HostDB.* TO 'user'@'%';

$connection = mysqli_connect($dbhost, $dbuser, $dbpasswd);
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}

$sql = "CREATE DATABASE IF NOT EXISTS HostDB";
if ($connection->query($sql) === TRUE) {
  echo ""; //Database created successfully";
}
 else {
  //echo "Error creating database: " . $connection->error;
}

$select_db = mysqli_select_db($connection, 'HostDB');
if (!$select_db){
    //die("Database Selection Failed" . mysqli_error($connection));
}

$sql = "CREATE TABLE IF NOT EXISTS HostInfo (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL,
host VARCHAR(50) NOT NULL,
port INT(6) NOT NULL,
type VARCHAR(50) NULL,
status VARCHAR(10) NOT NULL)" ;

if (mysqli_query($connection, $sql)) {
  echo ""; //Table created successfully";
} else {
  //die ("Error creating table: " . mysqli_error($connection));
}

$sql2 = "CREATE TABLE IF NOT EXISTS AuthInfo (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) UNIQUE NOT NULL,
password VARCHAR(50) NOT NULL,
priv TINYINT(1) NOT NULL,
status VARCHAR(10) NOT NULL)" ;

if (mysqli_query($connection, $sql2)) {
  echo ""; //Table created successfully";
} else {
  die ("Error creating table: " . mysqli_error($connection));
}

$sq = "INSERT IGNORE INTO AuthInfo (id, username, password, priv, status)
VALUES ('1', '$admuser', '$admpasswd', '1', 'active')";

if ($connection->query($sq) === TRUE) {
  echo ""; //New record created successfully #1";
} else {
    //echo "Error: " . $sq . "<br>" . $connection->error;
}

//$connection->close();
