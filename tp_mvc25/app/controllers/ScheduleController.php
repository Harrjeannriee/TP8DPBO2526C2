<?php

// Hubungkan model Schedule
require_once __DIR__ . '/../models/Schedule.php';
require_once __DIR__ . '/../models/Lecturer.php';
require_once __DIR__ . '/../models/Course.php';

class ScheduleController
{
    private $schedule;
    private $db;

    // Konstruktor untuk membuat objek model
    public function __construct($db)
    {
        $this->db = $db;
        $this->schedule = new Schedule($db);
    }

    // Mengambil data schedule berdasarkan ID
    public function edit($id)
    {
        $schedule = $this->schedule->getById($id);

        $lecturerModel = new Lecturer($this->db);
        $courseModel = new Course($this->db);

        $lecturers = $lecturerModel->getAll();
        $courses = $courseModel->getAll();

        require __DIR__ . '/../view/schedules/edit.php';
    }

    // Memperbarui data schedule
    public function update(
        $id,
        $lecturer_id,
        $course_id,
        $day,
        $start_time,
        $end_time,
        $room
    ) {
        return $this->schedule->update(
            $id,
            $lecturer_id,
            $course_id,
            $day,
            $start_time,
            $end_time,
            $room
        );
    }

    // Membuat data schedule
    public function create(
        $lecturer_id,
        $course_id,
        $day,
        $start_time,
        $end_time,
        $room
    ) {
        return $this->schedule->create(
            $lecturer_id,
            $course_id,
            $day,
            $start_time,
            $end_time,
            $room
        );
    }

    // Menampilkan seluruh data schedule
    public function index()
    {
        $schedules = $this->schedule->getAll();

        require __DIR__ . '/../view/schedules/index.php';
    }

    // Menghapus data schedule berdasarkan ID
    public function delete($id)
    {
        return $this->schedule->delete($id);
    }

    public function createForm()
    {
        $lecturerModel = new Lecturer($this->db);
        $courseModel = new Course($this->db);

        $lecturers = $lecturerModel->getAll();
        $courses = $courseModel->getAll();

        require __DIR__ . '/../view/schedules/create.php';
    }
}
