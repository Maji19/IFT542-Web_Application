<?php

session_start();

require_once "../config/database.php";
require_once "../includes/security.php";
require_once "../includes/logger.php";

$email = trim($_POST['email'] ?? '');
$password = $_POST['password'] ?? '';

if (!validateEmail($email) || !validatePasswordInput($password)) {
    logSecurityEvent("validation_failed", $email);
    die("Invalid email or password.");
}

$stmt = $pdo->prepare(
    "SELECT id, email, password_hash, role
     FROM users
     WHERE email = :email
     LIMIT 1"
);

$stmt->execute([':email' => $email]);

$user = $stmt->fetch();

if (!$user || !password_verify($password, $user['password_hash'])) {
    logSecurityEvent("login_failed", $email);
    die("Invalid email or password.");
}

session_regenerate_id(true);

$_SESSION['user_id'] = $user['id'];
$_SESSION['email'] = $user['email'];
$_SESSION['role'] = $user['role'];

logSecurityEvent("login_success", $email);

header("Location: profile.php");
exit;