<?php

/** @var array $lecturerCourse */
/** @var array $lecturers */
/** @var array $courses */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Lecturer Course</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body class="bg-light">

    <?php require __DIR__ . '/../layout/navbar.php'; ?>

    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-6">

                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">

                        <h2 class="mb-4">Edit Lecturer Course</h2>

                        <form method="POST"
                            action="edit.php?entity=lecturer_course&lecturer_id=<?= urlencode($lecturerCourse['lecturer_id']) ?>&course_id=<?= urlencode($lecturerCourse['course_id']) ?>">

                            <input type="hidden" name="old_lecturer_id"
                                value="<?= htmlspecialchars($lecturerCourse['lecturer_id']) ?>">

                            <input type="hidden" name="old_course_id"
                                value="<?= htmlspecialchars($lecturerCourse['course_id']) ?>">

                            <div class="mb-3">
                                <label class="form-label">Lecturer</label>

                                <select name="lecturer_id" class="form-select" required>
                                    <?php foreach ($lecturers as $lecturer): ?>
                                        <option value="<?= $lecturer['id'] ?>"
                                            <?= $lecturer['id'] == $lecturerCourse['lecturer_id'] ? 'selected' : '' ?>>
                                            <?= htmlspecialchars($lecturer['name']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Course</label>

                                <select name="course_id" class="form-select" required>
                                    <?php foreach ($courses as $course): ?>
                                        <option value="<?= $course['id'] ?>"
                                            <?= $course['id'] == $lecturerCourse['course_id'] ? 'selected' : '' ?>>
                                            <?= htmlspecialchars($course['course_name']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" name="submit" class="btn btn-primary">
                                    Update
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