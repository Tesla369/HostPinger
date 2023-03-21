<?php

session_start();

if(!isset($_SESSION['username'])) {
        header("Location: ..");
        exit();
}

/*
VALIDATING INPUTS
*/

function is_valid_domain_name($domain_name) //Validating Hosts
{
    $IpRegX =
        "/^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$/";

    $HostRegX =
        "/^(([a-zA-Z0-9]|[a-zA-Z0-9][a-zA-Z0-9\-]*[a-zA-Z0-9])\.)*([A-Za-z0-9]|[A-Za-z0-9][A-Za-z0-9\-]*[A-Za-z0-9])*$/";

    $IPcheck = preg_match($IpRegX, $domain_name); //valid IP check
    $Hostcheck = preg_match($HostRegX, $domain_name);
    if ($IPcheck == 1 || $Hostcheck == 1) {
        return 1;
    } else {
        return 0;
    }
}

function validport($portnum) //Validating Ports
{
    $c = 0;
    for ($i = 1; $i <= 65535; $i++) {
        if ($portnum == $i) {
            $c++;
        } else {
            continue;
        }
    }
    if ($c == 1) {
        return 1;
    } else {
        return 0;
    }
}

/*
Adding New Entry or Updating Existing Entry, This is decided by ID., If ID is not part of the table, then new entry added
else if ID. already exists then that entry is updated
*/

//if (isset($_POST["form0"])) {

require("../../common/db_connect.php");

//Initialization
    $id = $_POST["id"];
    $na = $_POST["na"];
    $ho = $_POST["ho"];
    $po = $_POST["po"];
    $ty = $_POST["ty"];

//Prevent XSS/HTMLi
    $id = trim(htmlspecialchars($id));
    $na = trim(htmlspecialchars($na));
    $ho = trim(htmlspecialchars($ho));
    $po = trim(htmlspecialchars($po));
    $ty = trim(htmlspecialchars($ty));

//Prevent SQLi
    $id = mysqli_real_escape_string($connection, $id);
    $na = mysqli_real_escape_string($connection, $na);
    $ho = mysqli_real_escape_string($connection, $ho);
    $po = mysqli_real_escape_string($connection, $po);
    $ty = mysqli_real_escape_string($connection, $ty);

//Validating Host, Port and ID
    $vdn = is_valid_domain_name($ho);
    $vp = validport($po);

    if ($vdn != 1 && ($vp != 1 || !is_numeric($po)) && ($id < 0 || !is_numeric($id))) {
        echo "Invalid Host & Port number & Id.";
    } elseif ($vdn != 1 && ($vp != 1 || !is_numeric($po))) {
        echo "Invalid Host & Port number";
    } elseif ($vdn != 1 && ($id < 0 || !is_numeric($id))) {
        echo "Invalid Host & Id.";
    } elseif (($vp != 1 || !is_numeric($po)) && ($id < 0 || !is_numeric($id))) {
        echo "Invalid Port number & Id.";
    } elseif ($vdn != 1) {
        echo "Invalid Hostname";
    } elseif ($vp != 1 || !is_numeric($po)) {
        echo "Invalid Port number";
    } elseif ($id < 0 || !is_numeric($id)) {
        echo "Invalid Id.";
    } else {
        $sql = "SELECT * FROM HostInfo WHERE id = '" . $id . "'";

        // Debugging
        //echo $sql;
        ($result = mysqli_query($connection, $sql)) or
            die(mysqli_error($connection));
        $count = mysqli_num_rows($result);
        //echo $count;
        if ($count == 1) {
            $sql =
                "UPDATE HostInfo
SET name='" .
                $na .
                "', host='" .
                $ho .
                "', port='" .
                $po .
                "', type='" .
                $ty .
                "'
WHERE id='" .
                $id .
                "'";

            if ($connection->query($sql) === true) {
                echo "Updated Existing Entry!";
                //echo "<script type='text/javascript'>window.location='./'</script>";
            } else {
                echo "Error updating record: " . $connection->error;
            }

        } else {
            $sql = "INSERT IGNORE INTO `HostInfo` (name, host, port, type, status) VALUES ('$na', '$ho', '$po', '$ty', '$status')";

            if ($connection->query($sql) === true) {
                echo "Added New Entry!";
                //echo "<script type='text/javascript'>window.location='./'</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $connection->error;
            }
        }
    }
//}
?>
