<?php

echo "Student: ";
echo password_hash("Student123!", PASSWORD_ARGON2ID);

echo PHP_EOL;

echo "Admin: ";
echo password_hash("Admin123!", PASSWORD_ARGON2ID);