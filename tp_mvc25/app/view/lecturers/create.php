<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add New Lecturer</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <?php require __DIR__ . '/../layout/navbar.php'; ?>
    
    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-6">

                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">

                        <h2 class="mb-4">Add New Lecturer</h2>

                        <form method="POST" action="create.php?entity=lecturers">

                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name"
                                    class="form-control"
                                    placeholder="Enter lecturer name"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">NIDN</label>
                                <input type="text" name="nidn"
                                    class="form-control"
                                    placeholder="Enter NIDN"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone"
                                    class="form-control"
                                    placeholder="Enter phone number">
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Join Date</label>
                                <input type="date" name="join_date"
                                    class="form-control">
                            </div>

                            <div class="d-flex gap-2">
                                <button type="submit" name="submit"
                                    class="btn btn-primary">
                                    Save
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