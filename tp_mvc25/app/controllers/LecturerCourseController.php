<?php

// Hubungkan model LecturerCourse
require_once __DIR__ . '/../models/LecturerCourse.php';
require_once __DIR__ . '/../models/Lecturer.php';
require_once __DIR__ . '/../models/Course.php';
class LecturerCourseController
{
    private $lecturerCourse;
    private $db;

    // Konstruktor untuk membuat objek model
    public function __construct($db)
    {
        $this->db = $db;
        $this->lecturerCourse = new LecturerCourse($db);
    }

    // Mengambil data relasi berdasarkan ID dosen dan mata kuliah
    public function edit($lecturer_id, $course_id)
    {
        $lecturerCourse = $this->lecturerCourse->getById(
            $lecturer_id,
            $course_id
        );

        $lecturerModel = new Lecturer($this->db);
        $courseModel = new Course($this->db);

        $lecturers = $lecturerModel->getAll();
        $courses = $courseModel->getAll();

        require __DIR__ . '/../view/lecturer_course/edit.php';
    }

    // Memperbarui data relasi dosen dan mata kuliah
    public function update(
        $old_lecturer_id,
        $old_course_id,
        $lecturer_id,
        $course_id
    ) {
        return $this->lecturerCourse->update(
            $old_lecturer_id,
            $old_course_id,
            $lecturer_id,
            $course_id
        );
    }

    // Membuat relasi dosen dan mata kuliah
    public function create($lecturer_id, $course_id)
    {
        return $this->lecturerCourse->create(
            $lecturer_id,
            $course_id
        );
    }

    // Menampilkan seluruh relasi dosen dan mata kuliah
    public function index()
    {
        $lecturerCourses = $this->lecturerCourse->getAll();

        require __DIR__ . '/../view/lecturer_course/index.php';
    }

    // Menghapus relasi dosen dan mata kuliah
    public function delete($lecturer_id, $course_id)
    {
        return $this->lecturerCourse->delete(
            $lecturer_id,
            $course_id
        );
    }

    public function createForm()
    {
        $lecturerModel = new Lecturer($this->db);
        $courseModel = new Course($this->db);

        $lecturers = $lecturerModel->getAll();
        $courses = $courseModel->getAll();

        require __DIR__ . '/../view/lecturer_course/create.php';
    }
}
