<?php
session_start();
include("../config/db.php");

$student_id = $_SESSION['user_id'];

mysqli_query($conn,
  "INSERT INTO clearance_requests (student_id) VALUES ($student_id)"
);

$request_id = mysqli_insert_id($conn);

$departments = ['bursary','library','hostel','dept_head','registrar'];

foreach ($departments as $dept) {
  mysqli_query($conn,
    "INSERT INTO clearance_steps (request_id, department)
     VALUES ($request_id, '$dept')"
  );
}

echo "REQUEST SUBMITTED";
