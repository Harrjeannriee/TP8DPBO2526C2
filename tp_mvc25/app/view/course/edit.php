<?php

/** @var array $course */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Course</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <?php require __DIR__ . '/../layout/navbar.php'; ?>

    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-6">

                <div class="card shadow-sm border-0">

                    <div class="card-body p-4">

                        <h2 class="mb-4">Edit Course</h2>

                        <form method="POST"
                            action="edit.php?entity=courses&id=<?= urlencode($course['id']) ?>">

                            <input type="hidden" name="id"
                                value="<?= htmlspecialchars($course['id']) ?>">
                                
                            <div class="mb-3">
                                <label class="form-label">Course Code</label>
                                <input
                                    type="text"
                                    name="course_code"
                                    class="form-control"
                                    value="<?= htmlspecialchars($course['course_code']) ?>"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Course Name</label>
                                <input
                                    type="text"
                                    name="course_name"
                                    class="form-control"
                                    value="<?= htmlspecialchars($course['course_name']) ?>"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Credits</label>
                                <input
                                    type="number"
                                    name="credits"
                                    class="form-control"
                                    min="1"
                                    value="<?= htmlspecialchars($course['credits']) ?>"
                                    required>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" name="submit"
                                    class="btn btn-primary">
                                    Update
                                </button>

                                <a href="index.php?entity=courses"
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