<?php

require_once "../config/database.php";
require_once "../includes/security.php";

function test($name, $condition)
{
    echo ($condition ? "[PASS] " : "[FAIL] ") . $name . PHP_EOL;
}

test(
    "Valid email accepted",
    validateEmail("student@test.local")
);

test(
    "Invalid email rejected",
    !validateEmail("not-an-email")
);

test(
    "Short password rejected",
    !validatePasswordInput("123")
);

$hash = password_hash("Student123!", PASSWORD_ARGON2ID);

test(
    "Password is hashed",
    $hash !== "Student123!"
);

test(
    "Password verification works",
    password_verify("Student123!", $hash)
);

$stmt = $pdo->prepare(
    "SELECT id FROM users WHERE email = :email"
);

$stmt->execute([
    ':email' => "student@test.local"
]);

test(
    "Parameterized query executes",
    $stmt !== false
);