<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add New Course</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <?php require __DIR__ . '/../layout/navbar.php'; ?>
    
    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-6">

                <div class="card shadow-sm border-0">

                    <div class="card-body p-4">

                        <h2 class="mb-4">Add New Course</h2>

                        <form method="POST" action="create.php?entity=courses">

                            <div class="mb-3">
                                <label class="form-label">Course Code</label>
                                <input
                                    type="text"
                                    name="course_code"
                                    class="form-control"
                                    placeholder="Example: IF109"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Course Name</label>
                                <input
                                    type="text"
                                    name="course_name"
                                    class="form-control"
                                    placeholder="Enter course name"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Credits</label>
                                <input
                                    type="number"
                                    name="credits"
                                    class="form-control"
                                    min="1"
                                    required>
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" name="submit"
                                    class="btn btn-primary">
                                    Save
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