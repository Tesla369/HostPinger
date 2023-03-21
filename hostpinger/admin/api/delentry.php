<?php

session_start();

if(!isset($_SESSION['username'])) {
        header("Location: ..");
        exit();
}

    require("../../common/db_connect.php");
    $delid = $_POST["delid"]; //Input From user
    $delid = trim(htmlspecialchars($delid)); //Prevent HTMLi/XSS
    $delid = mysqli_real_escape_string($connection, $delid); //Prevent SQLi

    if (is_numeric($delid) && $delid > 0) { //Validating Inputs
        $query = "SELECT * FROM HostInfo WHERE id='" . $delid . "'";
        $sql = "DELETE FROM HostInfo WHERE id='" . $delid . "'";
        ($result = mysqli_query($connection, $query)) or
            die(mysqli_error($connection));
        $count = mysqli_num_rows($result);

        if ($count == 1) { //If Id. existing in Table, It passes this condition
            if ($connection->query($sql) === true) { //Once Query is Executed, Refresh the page
                echo "Deleted Entry with ID: " . $delid;
                echo "<script type='text/javascript'>window.location='./index.php'</script>";
            } else {
                echo "Error deleting record: " . $connection->error;
            }
        } else { //If Id. does not exit in table
            echo "Invalid Id. No such Id. Found!";
        }
    } else { //If Id. doesn't pass Validation Cases
        echo "Invalid Id. Please specify a numeric value!";
    }
?>
