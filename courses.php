<?php
require_once "config/database.php";

$stmt = $pdo->query(
    "SELECT course_code, course_title, department
     FROM courses
     ORDER BY course_code"
);

$courses = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="d-flex justify-content-between mb-4">
        <h2>Available Courses</h2>

        <a href="index.php" class="btn btn-secondary">
            Home
        </a>
    </div>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-bordered table-hover">

                <thead class="table-dark">
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Department</th>
                    </tr>
                </thead>

                <tbody>

                <?php foreach ($courses as $course): ?>

                    <tr>
                        <td>
                            <?= htmlspecialchars($course['course_code']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($course['course_title']) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($course['department']) ?>
                        </td>
                    </tr>

                <?php endforeach; ?>

                </tbody>

            </table>

        </div>
    </div>

</div>

</body>
</html>