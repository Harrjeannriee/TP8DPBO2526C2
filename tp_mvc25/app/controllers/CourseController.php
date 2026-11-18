<?php

// Hubungkan ke model Course
require_once __DIR__ . '/../models/Course.php';

class CourseController
{
    private $course;

    // Konstruktor untuk membuat objek model
    public function __construct($db)
    {
        $this->course = new Course($db);
    }

    // Mengambil data course berdasarkan ID
    public function edit($id)
    {
        $course = $this->course->getById($id);

        require __DIR__ . '/../view/course/edit.php';
    }

    // UPDATE, memperbarui data course
    public function update($id, $course_code, $course_name, $credits)
    {
        return $this->course->update(
            $id,
            $course_code,
            $course_name,
            $credits
        );
    }

    // CREATE, membuat data course
    public function create($course_code, $course_name, $credits)
    {
        return $this->course->create(
            $course_code,
            $course_name,
            $credits
        );
    }

    // READ, menampilkan seluruh data course
    public function index()
    {
        $courses = $this->course->getAll();

        require __DIR__ . '/../view/course/index.php';
    }

    // DELETE, menghapus data course berdasarkan ID
    public function delete($id)
    {
        return $this->course->delete($id);
    }
}
