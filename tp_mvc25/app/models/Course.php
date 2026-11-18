<?php

class Course
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // READ, mengambil seluruh data mata kuliah
    public function getAll()
    {
        $sql = "SELECT * FROM course";
        $result = $this->conn->query($sql);

        $courses = [];

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $courses[] = $row;
            }
        }

        return $courses;
    }

    // CREATE
    public function create($course_code, $course_name, $credits)
    {
        $sql = "INSERT INTO course (course_code, course_name, credits)
                VALUES (?, ?, ?)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssi", $course_code, $course_name, $credits);

        return $stmt->execute();
    }

    // READ, mengambil mata kuliah berdasarkan ID
    public function getById($id)
    {
        $sql = "SELECT * FROM course WHERE id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }

    // UPDATE
    public function update($id, $course_code, $course_name, $credits)
    {
        $sql = "UPDATE course
                SET course_code = ?, course_name = ?, credits = ?
                WHERE id = ?";

        $stmt = $this->conn->prepare($sql);
        //bind_param ssii artinya dua parameter pertama string, selanjutnya integer
        $stmt->bind_param("ssii", $course_code, $course_name, $credits, $id);

        return $stmt->execute();
    }

    // DELETE
    public function delete($id)
    {
        $sql = "DELETE FROM course WHERE id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }
}
