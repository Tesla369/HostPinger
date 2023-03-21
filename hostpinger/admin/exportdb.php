<?php 

session_start();

if(!isset($_SESSION['username'])) {
        header("Location: .");
        exit();
}

 
// Load the database configuration file 
include_once '../common/db_connect.php'; 
 
// Fetch records from database 
$query = $connection->query("SELECT * FROM HostInfo ORDER BY id ASC"); 
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "status-data_" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('id', 'name', 'host', 'port', 'type', 'status'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
        $status = ($row['status'] == online)?'Online':'Offline'; 
        $lineData = array($row['id'], $row['name'], $row['host'], $row['port'], $row['type'], $status); 
        fputcsv($f, $lineData, $delimiter); 
    } 
     
    // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit; 
 
?>
