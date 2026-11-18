
<?php

require_once __DIR__ . '/../config/database.php';

$entity = $_GET['entity'] ?? null;

switch ($entity) {
    case 'lecturers':
        require_once __DIR__ . '/../app/controllers/LecturerController.php';
        $controller = new LecturerController($conn);
        $controller->index();
        break;

    case 'courses':
        require_once __DIR__ . '/../app/controllers/CourseController.php';
        $controller = new CourseController($conn);
        $controller->index();
        break;

    case 'lecturer_course':
        require_once __DIR__ . '/../app/controllers/LecturerCourseController.php';
        $controller = new LecturerCourseController($conn);
        $controller->index();
        break;

    case 'schedules':
        require_once __DIR__ . '/../app/controllers/ScheduleController.php';
        $controller = new ScheduleController($conn);
        $controller->index();
        break;

   
default:
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Academic Management System</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body class="bg-light">

    <?php require __DIR__ . '/../app/view/layout/navbar.php'; ?>

    <div class="container py-5">

        <h2 class="mb-4">Academic Management System</h2>

        <div class="list-group shadow-sm">
            <a href="index.php?entity=lecturers"
                class="list-group-item list-group-item-action">
                Lecturers
            </a>

            <a href="index.php?entity=courses"
                class="list-group-item list-group-item-action">
                Courses
            </a>

            <a href="index.php?entity=lecturer_course"
                class="list-group-item list-group-item-action">
                Lecturer Courses
            </a>

            <a href="index.php?entity=schedules"
                class="list-group-item list-group-item-action">
                Schedules
            </a>
        </div>

    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
    break;
}
