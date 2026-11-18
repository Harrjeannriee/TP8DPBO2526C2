<?php

/** @var array $lecturers */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lecturer List</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <?php require __DIR__ . '/../layout/navbar.php'; ?>
    
    <div class="container py-5">

        <div class="card shadow-sm border-0">
            <div class="card-body p-4">

                <h2 class="mb-4">Lecturer List</h2>

                <a href="create.php?entity=lecturers"
                    class="btn btn-primary mb-3">
                    + Add New Lecturer
                </a>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover align-middle">

                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>NIDN</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Join Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($lecturers as $lecturer): ?>
                                <tr>
                                    <td><?= htmlspecialchars($lecturer['id']) ?></td>
                                    <td><?= htmlspecialchars($lecturer['nidn']) ?></td>
                                    <td><?= htmlspecialchars($lecturer['name']) ?></td>
                                    <td><?= htmlspecialchars($lecturer['phone'] ?? '') ?></td>
                                    <td><?= htmlspecialchars($lecturer['join_date'] ?? '') ?></td>

                                    <td>
                                        <a href="edit.php?entity=lecturers&id=<?= $lecturer['id'] ?>"
                                            class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <a href="delete.php?entity=lecturers&id=<?= $lecturer['id'] ?>"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this lecturer?')">
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