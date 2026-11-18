
<?php
/** @var array $lecturers */
/** @var array $courses */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add New Schedule</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body class="bg-light">

    <?php require __DIR__ . '/../layout/navbar.php'; ?>

    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-6">

                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">

                        <h2 class="mb-4">Add New Schedule</h2>

                        <form method="POST" action="create.php?entity=schedules">

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

                            <div class="mb-3">
                                <label class="form-label">Course</label>
                                <select name="course_id" class="form-select" required>
                                    <?php foreach ($courses as $course): ?>
                                        <option value="<?= $course['id'] ?>">
                                            <?= htmlspecialchars($course['course_name']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Day</label>
                                <select name="day" class="form-select" required>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                    <option value="Saturday">Saturday</option>
                                    <option value="Sunday">Sunday</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Start Time</label>
                                <input type="time" name="start_time"
                                    class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">End Time</label>
                                <input type="time" name="end_time"
                                    class="form-control" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Room</label>
                                <input type="text" name="room"
                                    class="form-control"
                                    placeholder="Enter room"
                                    required>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" name="submit"
                                    class="btn btn-primary">
                                    Save
                                </button>

                                <a href="index.php?entity=schedules"
                                    class="btn btn-secondary">
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
