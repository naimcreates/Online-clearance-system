CREATE DATABASE clearance_system;
USE clearance_system;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(100),
    role ENUM('student','admin')
);

CREATE TABLE clearance_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    status ENUM('pending','approved','rejected') DEFAULT 'pending'
);
