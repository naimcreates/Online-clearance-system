<?php
session_start();
include("../config/db.php");

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

/* SIMPLE LOGIN (PROJECT VERSION) */
if ($user && $password == "1234") {

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['role'] = $user['role'];
    $_SESSION['department'] = $user['department'];

    /* STUDENT */
    if ($user['role'] == "student") {
        header("Location: ../student/dashboard.php");
        exit;
    }

    /* OFFICER */
    if ($user['role'] == "officer") {
        header("Location: ../../modules/officers/".$user['department']."/index.html");
        exit;
    }

    /* ADMIN */
    if ($user['role'] == "admin") {
        header("Location: ../admin/dashboard.php");
        exit;
    }

} else {
    echo "Login Failed";
}
