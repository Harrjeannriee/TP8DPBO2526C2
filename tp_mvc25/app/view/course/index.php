<?php

/** @var array $courses */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Course List</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body class="bg-light">

    <?php require __DIR__ . '/../layout/navbar.php'; ?>
    <div class="container py-5">

        <div class="card shadow-sm border-0">
            <div class="card-body p-4">

                <h2 class="mb-4">Course List</h2>

                <a href="create.php?entity=courses"
                    class="btn btn-primary mb-3">
                    + Add New Course
                </a>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover align-middle">

                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Course Code</th>
                                <th>Course Name</th>
                                <th>Credits</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($courses as $course): ?>
                                <tr>
                                    <td><?= htmlspecialchars($course['id']) ?></td>
                                    <td><?= htmlspecialchars($course['course_code']) ?></td>
                                    <td><?= htmlspecialchars($course['course_name']) ?></td>
                                    <td><?= htmlspecialchars($course['credits']) ?></td>

                                    <td>
                                        <a href="edit.php?entity=courses&id=<?= $course['id'] ?>"
                                            class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <a href="delete.php?entity=courses&id=<?= $course['id'] ?>"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this course?')">
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