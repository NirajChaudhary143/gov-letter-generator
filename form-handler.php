<?php
include "includes/connection.php";
session_start();
if (isset($_POST['register'])) {
    $username   = $_POST['username'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    $c_password = $_POST['c_password'];

    if ($password === $c_password) {
        $sql = "INSERT INTO user (name, email, password) VALUES ('$username','$email','$password')";
        if (mysqli_query($conn, $sql)) {
            header("location: login.php");
        }
    }
}
if (isset($_POST['login'])) {
    $username   = $_POST['username'];
    $password   = $_POST['password'];

    $sql = "SELECT * FROM user WHERE `password`='$password' && `name`= '$username'";

    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['role']   = $row['role'];
        $_SESSION['id']     = $row['id'];
        header("location: index.php");
    } else {
        echo "pw wrong";
    }
}

if (isset($_POST['add_document'])) {
    $document_title = $_POST['document_title'];
    $document = $_FILES['document'];

    $file_name = basename($document['name']);
    $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);

    $unique_file_name = uniqid('document_') . '.' . $file_extension;

    $upload_directory = 'user_docs/';

    $upload_path = $upload_directory . $unique_file_name;

    if (move_uploaded_file($document['tmp_name'], $upload_path)) {
        $id = $_SESSION['id'];

        // Enclose string values in quotes in the SQL query
        $sql = "INSERT INTO user_meta_data (`user_id`,`docs_path`,`doc_type`) VALUES ('$id','$upload_path','$document_title')";

        mysqli_query($conn, $sql);
        header("location: dashboard.php");
        exit; // After header redirect, stop executing the script
    } else {
        echo "File upload failed.";
    }
}
