<?php

/** @var array $schedules */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Schedule List</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body class="bg-light">

    <?php require __DIR__ . '/../layout/navbar.php'; ?>

    <div class="container py-5">

        <div class="card shadow-sm border-0">
            <div class="card-body p-4">

                <h2 class="mb-4">Schedule List</h2>

                <a href="create.php?entity=schedules" class="btn btn-primary mb-3">
                    + Add New Schedule
                </a>
              
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover align-middle">

                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Lecturer</th>
                                <th>Course</th>
                                <th>Day</th>
                                <th>Start Time</th>
                                <th>End Time</th>
                                <th>Room</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($schedules as $schedule): ?>
                                <tr>
                                    <td><?= htmlspecialchars($schedule['id']) ?></td>
                                    <td><?= htmlspecialchars($schedule['lecturer_name']) ?></td>
                                    <td><?= htmlspecialchars($schedule['course_name']) ?></td>
                                    <td><?= htmlspecialchars($schedule['day']) ?></td>
                                    <td><?= htmlspecialchars($schedule['start_time']) ?></td>
                                    <td><?= htmlspecialchars($schedule['end_time']) ?></td>
                                    <td><?= htmlspecialchars($schedule['room']) ?></td>

                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="edit.php?entity=schedules&id=<?= $schedule['id'] ?>"
                                                class="btn btn-warning btn-sm">
                                                Edit
                                            </a>

                                            <a href="delete.php?entity=schedules&id=<?= $schedule['id'] ?>"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this schedule?')">
                                                Delete
                                            </a>
                                        </div>
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