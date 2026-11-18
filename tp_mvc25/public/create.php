
<?php

require_once __DIR__ . '/../config/database.php';

$entity = $_GET['entity'] ?? '';

switch ($entity) {

    // CREATE LECTURER
    case 'lecturers':

        require_once __DIR__ . '/../app/controllers/LecturerController.php';

        $controller = new LecturerController($conn);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $name = $_POST['name'];
            $nidn = $_POST['nidn'];
            $phone = $_POST['phone'] ?: null;
            $join_date = $_POST['join_date'] ?: null;

            $result = $controller->create(
                $name,
                $nidn,
                $phone,
                $join_date
            );

            if ($result) {
                header("Location: index.php?entity=lecturers");
                exit;
            }

            echo "Gagal menambahkan lecturer.";
        } else {
            require __DIR__ . '/../app/view/lecturers/create.php';
        }

        break;


    // CREATE COURSE
    case 'courses':

        require_once __DIR__ . '/../app/controllers/CourseController.php';

        $controller = new CourseController($conn);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $course_code = $_POST['course_code'];
            $course_name = $_POST['course_name'];
            $credits = $_POST['credits'];

            $result = $controller->create(
                $course_code,
                $course_name,
                $credits
            );

            if ($result) {
                header("Location: index.php?entity=courses");
                exit;
            }

            echo "Gagal menambahkan course.";
        } else {
            require __DIR__ . '/../app/view/course/create.php';
        }

        break;


    // CREATE LECTURER COURSE
    case 'lecturer_course':

        require_once __DIR__ . '/../app/controllers/LecturerCourseController.php';

        $controller = new LecturerCourseController($conn);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $lecturer_id = $_POST['lecturer_id'];
            $course_id = $_POST['course_id'];

            $result = $controller->create(
                $lecturer_id,
                $course_id
            );

            if ($result) {
                header("Location: index.php?entity=lecturer_course");
                exit;
            }

            echo "Gagal menambahkan lecturer course.";
        } else {
            $controller->createForm();
        }

        break;

    // CREATE SCHEDULE
    case 'schedules':

        require_once __DIR__ . '/../app/controllers/ScheduleController.php';

        $controller = new ScheduleController($conn);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $lecturer_id = $_POST['lecturer_id'];
            $course_id = $_POST['course_id'];
            $day = $_POST['day'];
            $start_time = $_POST['start_time'];
            $end_time = $_POST['end_time'];
            $room = $_POST['room'];

            $result = $controller->create(
                $lecturer_id,
                $course_id,
                $day,
                $start_time,
                $end_time,
                $room
            );

            if ($result) {
                header("Location: index.php?entity=schedules");
                exit;
            }

            echo "Gagal menambahkan schedule.";
        } else {
            $controller->createForm();
        }

        break;
    default:
        echo "Entity tidak ditemukan.";
        break;
}
