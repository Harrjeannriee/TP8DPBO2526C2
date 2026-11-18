
<?php

require_once __DIR__ . '/../config/database.php';

$entity = $_GET['entity'] ?? '';

switch ($entity) {

    // LECTURERS
    case 'lecturers':
        require_once __DIR__ . '/../app/controllers/LecturerController.php';

        $controller = new LecturerController($conn);

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = $controller->delete($id);

            if ($result) {
                header("Location: index.php?entity=lecturers");
                exit;
            } else {
                echo "Gagal menghapus data lecturer.";
            }
        } else {
            echo "ID lecturer tidak ditemukan.";
        }
        break;

    // COURSES
    case 'courses':
        require_once __DIR__ . '/../app/controllers/CourseController.php';

        $controller = new CourseController($conn);

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = $controller->delete($id);

            if ($result) {
                header("Location: index.php?entity=courses");
                exit;
            } else {
                echo "Gagal menghapus data course.";
            }
        } else {
            echo "ID course tidak ditemukan.";
        }
        break;

    // LECTURER_COURSES
    case 'lecturer_course':

        require_once __DIR__ . '/../app/controllers/LecturerCourseController.php';

        $controller = new LecturerCourseController($conn);

        if (isset($_GET['lecturer_id']) && isset($_GET['course_id'])) {

            $lecturer_id = $_GET['lecturer_id'];
            $course_id = $_GET['course_id'];

            $result = $controller->delete(
                $lecturer_id,
                $course_id
            );

            if ($result) {
                header("Location: index.php?entity=lecturer_course");
                exit;
            } else {
                echo "Gagal menghapus lecturer course.";
            }
        } else {
            echo "ID lecturer atau course tidak ditemukan.";
        }

        break;

    // SCHEDULE
    case 'schedules':

        require_once __DIR__ . '/../app/controllers/ScheduleController.php';

        $controller = new ScheduleController($conn);

        if (isset($_GET['id'])) {

            $id = $_GET['id'];

            $result = $controller->delete($id);

            if ($result) {
                header("Location: index.php?entity=schedules");
                exit;
            } else {
                echo "Gagal menghapus schedule.";
            }
        } else {
            echo "ID schedule tidak ditemukan.";
        }

        break;

    default:
        echo "Entity tidak ditemukan.";
        break;
}
