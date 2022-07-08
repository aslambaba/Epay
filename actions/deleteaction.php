<?php

include "connection.php";

$DeleteID = $_GET['id'];

$sql =  "delete from bills where id =$DeleteID";
if (mysqli_query($conn, $sql)) {
    header("location: /epay/viewbills.php");
} else {
    echo "Data Not Deleted, Check for Problem.";
}
