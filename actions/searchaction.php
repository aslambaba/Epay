<?php

include "connection.php";
$refID = $_GET['refid'];
$sql = "SELECT * FROM bills where refid = '$refID'";
$result = mysqli_query($conn, $sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        header("Location: ../singlebill.php?id=" . $row['id']);
    }
    else{
        header("Location: ../index.php?messege=wrongrecord");
    }
} else {
    echo mysqli_error($conn);
}
