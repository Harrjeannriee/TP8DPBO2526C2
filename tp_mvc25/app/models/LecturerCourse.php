<?php

class LecturerCourse
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // READ, mengambil seluruh relasi dosen dan mata kuliah
    public function getAll()
    {
        $sql = "SELECT
                    lecturers_course.lecturer_id,
                    lecturers_course.course_id,
                    lecturers.name AS lecturer_name,
                    course.course_name
                FROM lecturers_course
                JOIN lecturers
                    ON lecturers_course.lecturer_id = lecturers.id
                JOIN course
                    ON lecturers_course.course_id = course.id";

        $result = $this->conn->query($sql);

        $lecturerCourses = [];

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $lecturerCourses[] = $row;
            }
        }

        return $lecturerCourses;
    }

    // CREATE
    public function create($lecturer_id, $course_id)
    {
        $sql = "INSERT INTO lecturers_course (lecturer_id, course_id)
                VALUES (?, ?)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ii", $lecturer_id, $course_id);

        return $stmt->execute();
    }

    // READ, mengambil satu relasi berdasarkan kedua ID
    public function getById($lecturer_id, $course_id)
    {
        $sql = "SELECT * FROM lecturers_course
                WHERE lecturer_id = ? AND course_id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ii", $lecturer_id, $course_id);
        $stmt->execute();

        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }

    // UPDATE
    public function update($old_lecturer_id, $old_course_id,
                           $lecturer_id, $course_id)
    {
        $sql = "UPDATE lecturers_course
                SET lecturer_id = ?, course_id = ?
                WHERE lecturer_id = ? AND course_id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param(
            "iiii",
            $lecturer_id,
            $course_id,
            $old_lecturer_id,
            $old_course_id
        );

        return $stmt->execute();
    }

    // DELETE
    public function delete($lecturer_id, $course_id)
    {
        $sql = "DELETE FROM lecturers_course
                WHERE lecturer_id = ? AND course_id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ii", $lecturer_id, $course_id);

        return $stmt->execute();
    }
}
