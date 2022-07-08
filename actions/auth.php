<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['Username'] == 'aslam' && $_POST['Password'] == 'baba') {
        $_SESSION["user"] = "yes";
        header('Location: ../viewbills.php');
    } else {
        $_SESSION["user"] = "no";
        header('Location: ../login.php?');
    }

    echo $_SESSION['user'];
}
if(isset($_GET['logout']) == 'yes'){
    session_unset();
    header('Location: ../login.php');
}