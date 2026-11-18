
<?php

require_once __DIR__ . '/../config/database.php';

$entity = $_GET['entity'] ?? '';

switch ($entity) {

    // EDIT LECTURER
    case 'lecturers':

        require_once __DIR__ . '/../app/controllers/LecturerController.php';

        $controller = new LecturerController($conn);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = $_POST['id'];
            $name = $_POST['name'];
            $nidn = $_POST['nidn'];
            $phone = $_POST['phone'] ?: null;
            $join_date = $_POST['join_date'] ?: null;

            $result = $controller->update(
                $id,
                $name,
                $nidn,
                $phone,
                $join_date
            );

            if ($result) {
                header("Location: index.php?entity=lecturers");
                exit;
            }

            echo "Gagal memperbarui lecturer.";
        } else {

            $id = $_GET['id'] ?? null;

            if ($id !== null) {
                $controller->edit($id);
            }
        }

        break;


    // EDIT COURSE
    case 'courses':

        require_once __DIR__ . '/../app/controllers/CourseController.php';

        $controller = new CourseController($conn);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = $_POST['id'];
            $course_code = $_POST['course_code'];
            $course_name = $_POST['course_name'];
            $credits = $_POST['credits'];

            $result = $controller->update(
                $id,
                $course_code,
                $course_name,
                $credits
            );

            if ($result) {
                header("Location: index.php?entity=courses");
                exit;
            }

            echo "Gagal memperbarui course.";
        } else {

            $id = $_GET['id'] ?? null;

            if ($id !== null) {
                $controller->edit($id);
            }
        }

        break;


    case 'lecturer_course':

        require_once __DIR__ . '/../app/controllers/LecturerCourseController.php';

        $controller = new LecturerCourseController($conn);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $old_lecturer_id = $_POST['old_lecturer_id'];
            $old_course_id = $_POST['old_course_id'];

            $lecturer_id = $_POST['lecturer_id'];
            $course_id = $_POST['course_id'];

            $result = $controller->update(
                $old_lecturer_id,
                $old_course_id,
                $lecturer_id,
                $course_id
            );

            if ($result) {
                header("Location: index.php?entity=lecturer_course");
                exit;
            }

            echo "Gagal memperbarui lecturer course.";
        } else {

            $lecturer_id = $_GET['lecturer_id'];
            $course_id = $_GET['course_id'];

            $controller->edit($lecturer_id, $course_id);
        }

        break;


    case 'schedules':

        require_once __DIR__ . '/../app/controllers/ScheduleController.php';

        $controller = new ScheduleController($conn);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = $_GET['id'];
            $lecturer_id = $_POST['lecturer_id'];
            $course_id = $_POST['course_id'];
            $day = $_POST['day'];
            $start_time = $_POST['start_time'];
            $end_time = $_POST['end_time'];
            $room = $_POST['room'];

            $result = $controller->update(
                $id,
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

            echo "Gagal memperbarui schedule.";
        } else {

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $controller->edit($id);
            } else {
                echo "ID schedule tidak ditemukan.";
            }
        }

        break;

    default:
        echo "Entity tidak ditemukan.";
        break;
}
