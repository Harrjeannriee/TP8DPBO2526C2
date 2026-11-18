<?php

/** @var array $lecturer */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Lecturer</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <?php require __DIR__ . '/../layout/navbar.php'; ?>

    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-6">

                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">

                        <h2 class="mb-4">Edit Lecturer</h2>

                        <form method="POST"
                            action="edit.php?entity=lecturers&id=<?= urlencode($lecturer['id']) ?>">
                           
                            <input type="hidden" name="id"
                                value="<?= htmlspecialchars($lecturer['id']) ?>">
                           
                                <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name"
                                    class="form-control"
                                    value="<?= htmlspecialchars($lecturer['name']) ?>"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">NIDN</label>
                                <input type="text" name="nidn"
                                    class="form-control"
                                    value="<?= htmlspecialchars($lecturer['nidn']) ?>"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone"
                                    class="form-control"
                                    value="<?= htmlspecialchars($lecturer['phone'] ?? '') ?>">
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Join Date</label>
                                <input type="date" name="join_date"
                                    class="form-control"
                                    value="<?= htmlspecialchars($lecturer['join_date'] ?? '') ?>">
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" name="submit"
                                    class="btn btn-primary">
                                    Update
                                </button>

                                <a href="index.php?entity=lecturers"
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