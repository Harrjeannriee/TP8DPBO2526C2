<?php

/** @var array $lecturers */
/** @var array $courses */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Lecturer Course</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body class="bg-light">

    <?php require __DIR__ . '/../layout/navbar.php'; ?>

    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-6">

                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">

                        <h2 class="mb-4">Add Lecturer Course</h2>

                        <form method="POST" action="create.php?entity=lecturer_course">

                            <div class="mb-3">
                                <label class="form-label">Lecturer</label>
                                <select name="lecturer_id" class="form-select" required>
                                    <?php foreach ($lecturers as $lecturer): ?>
                                        <option value="<?= $lecturer['id'] ?>">
                                            <?= htmlspecialchars($lecturer['name']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Course</label>
                                <select name="course_id" class="form-select" required>
                                    <?php foreach ($courses as $course): ?>
                                        <option value="<?= $course['id'] ?>">
                                            <?= htmlspecialchars($course['course_name']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    Save
                                </button>

                                <a href="index.php?entity=lecturer_course" class="btn btn-secondary">
                                    Cancel
                                </a>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>