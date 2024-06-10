<?php
if (isset($_GET['id'])) {
    session_start();
    if ($_SESSION['role'] == 2) {
        $id = $_GET['id'];

        include "includes/connection.php";
        $sql = "DELETE FROM user_meta_data WHERE `id` = $id";

        $res = mysqli_query($conn, $sql);
        if ($res) {
            header("location: dashboard.php");
        }
    } else {
        $id = $_GET['id'];

        include "includes/connection.php";
        $sql = "DELETE FROM user WHERE `id` = $id";

        $res = mysqli_query($conn, $sql);
        if ($res) {
            header("location: admin/index.php");
        }
    }
}
