# IFT542 Secure Student Course Registration System

A simple PHP and MySQL web application developed for IFT542 security practical work.

The project demonstrates secure authentication, course viewing and registration, and basic web security controls.

## Features

* Student login
* Admin login
* View available courses
* Course registration
* Secure password hashing
* Prepared SQL statements
* Input validation
* XSS protection
* CSRF protection
* SSRF protection
* Security headers
* Security event logging
* Basic role-based authorization

## Technologies

* PHP
* MySQL
* Bootstrap
* HTML/CSS
* JavaScript
* PDO

## Project Structure

```text
MATNO_IFT542/
│
├── config/
│   └── database.php
│
├── database/
│   ├── migrate.sql
│   └── seed.sql
│
├── includes/
│   ├── auth.php
│   ├── csrf.php
│   ├── security.php
│   └── logger.php
│
├── tests/
│   └── security_tests.php
│
├── logs/
│   └── security.log
│
├── evidence/
│
├── index.php
├── login.php
├── authenticate.php
├── logout.php
├── profile.php
├── courses.php
├── register_course.php
│
├── .env.example
├── .gitignore
└── README.md
```

## Requirements

Before running the project, install:

* XAMPP
* PHP 8 or later
* MySQL
* Web browser

## Installation

### 1. Clone the repository

```bash
git clone https://github.com/YOUR-USERNAME/MATNO_IFT542.git
```

### 2. Move the project

Place the project inside the XAMPP `htdocs` folder.

Example:

```text
C:\xampp\htdocs\MATNO_IFT542
```

### 3. Start XAMPP

Start:

* Apache
* MySQL

### 4. Create the database

Open phpMyAdmin or MySQL and run:

```text
database/migrate.sql
```

This creates the `ift542` database and required tables.

### 5. Add test data

Run:

```text
database/seed.sql
```

This adds dummy students, an administrator and courses.

## Test Accounts

The application uses fictitious test accounts.

| Account       | Email                 | Role    |
| ------------- | --------------------- | ------- |
| Student       | `student@test.local`  | Student |
| Student 2     | `student2@test.local` | Student |
| Administrator | `admin@test.local`    | Admin   |

Passwords are stored in the database as secure password hashes and are not stored as plaintext.

## Running the Application

Open a browser and visit:

```text
http://localhost/MATNO_IFT542/
```

The homepage provides access to the login and course pages.

## Security Features

### Authentication

Passwords are stored using a slow password-hashing function such as Argon2id. Passwords are verified using PHP's `password_verify()` function.

### SQL Injection Protection

Database queries use PDO prepared statements so that user input is treated as data rather than SQL commands.

### XSS Protection

Displayed user-controlled information is encoded using:

```php
htmlspecialchars()
```

A Content Security Policy is also applied.

### CSRF Protection

Course registration requests require a valid CSRF token. Session cookies use an appropriate SameSite setting.

### SSRF Protection

The URL-preview feature validates destinations using an allowlist and rejects unsafe destinations such as loopback and private addresses.

### Security Configuration

Debug information is disabled, security headers are applied and application secrets are kept outside the source code.

### Security Logging

The application records security events such as:

* Failed login
* Denied authorization
* Rejected validation

Passwords, session tokens and other sensitive information are not stored in the security logs.

## Security Testing

Security tests are located in:

```text
tests/security_tests.php
```

Run the tests with:

```bash
php tests/security_tests.php
```

The tests verify that the implemented security controls behave as expected.

## Evidence

Security evidence is stored in:

```text
evidence/
```

The folder contains screenshots, test results and other evidence referenced in the technical report.

## Important Security Notice

This project is intended for educational and defensive security testing.

Only fictitious data and the local development environment should be used for testing.

Real passwords, API keys, database credentials and session tokens must not be committed to the repository.

## Author

**IFT542 Student Project**

Academic project for demonstrating secure web application development and security testing.
