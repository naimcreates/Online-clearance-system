<?php
include("../config/db.php");

$id = $_GET['id'];

$query = "UPDATE clearance_requests SET status='approved' WHERE id=$id";
mysqli_query($conn, $query);

header("Location: dashboard.php");
INSERT INTO users (name,email,password,role)
VALUES
('Naim','student@test.com','1234','student'),
('Admin','admin@test.com','1234','admin');
?>