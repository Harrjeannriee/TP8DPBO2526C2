<?php

/** @var array $lecturerCourses */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lecturer Course List</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <?php require __DIR__ . '/../layout/navbar.php'; ?>
    
    <div class="container py-5">

        <div class="card shadow-sm border-0">
            <div class="card-body p-4">

                <h2 class="mb-4">Lecturer Course List</h2>

                <a href="create.php?entity=lecturer_course"
                    class="btn btn-primary mb-3">
                    + Add Lecturer Course
                </a>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover align-middle">

                        <thead class="table-dark">
                            <tr>
                                <th>Lecturer ID</th>
                                <th>Lecturer Name</th>
                                <th>Course ID</th>
                                <th>Course Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($lecturerCourses as $lecturerCourse): ?>
                                <tr>
                                    <td><?= htmlspecialchars($lecturerCourse['lecturer_id']) ?></td>
                                    <td><?= htmlspecialchars($lecturerCourse['lecturer_name']) ?></td>
                                    <td><?= htmlspecialchars($lecturerCourse['course_id']) ?></td>
                                    <td><?= htmlspecialchars($lecturerCourse['course_name']) ?></td>

                                    <td>
                                        <a href="edit.php?entity=lecturer_course&lecturer_id=<?= $lecturerCourse['lecturer_id'] ?>&course_id=<?= $lecturerCourse['course_id'] ?>"
                                            class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <a href="delete.php?entity=lecturer_course&lecturer_id=<?= $lecturerCourse['lecturer_id'] ?>&course_id=<?= $lecturerCourse['course_id'] ?>"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this relation?')">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                </div>

            </div>
        </div>

    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>