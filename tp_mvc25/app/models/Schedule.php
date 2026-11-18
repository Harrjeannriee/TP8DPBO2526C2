<?php

class Schedule
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // READ, mengambil seluruh data jadwal
    public function getAll()
    {
        $sql = "SELECT
                    schedule.*,
                    lecturers.name AS lecturer_name,
                    course.course_name
                FROM schedule
                JOIN lecturers
                    ON schedule.lecturer_id = lecturers.id
                JOIN course
                    ON schedule.course_id = course.id";

        $result = $this->conn->query($sql);

        $schedules = [];

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $schedules[] = $row;
            }
        }

        return $schedules;
    }

    // CREATE
    public function create(
        $lecturer_id,
        $course_id,
        $day,
        $start_time,
        $end_time,
        $room
    ) {
        $sql = "INSERT INTO schedule
                (lecturer_id, course_id, day, start_time, end_time, room)
                VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param(
            "iissss",
            $lecturer_id,
            $course_id,
            $day,
            $start_time,
            $end_time,
            $room
        );

        return $stmt->execute();
    }

    // READ, mengambil jadwal berdasarkan ID
    public function getById($id)
    {
        $sql = "SELECT * FROM schedule WHERE id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }

    // UPDATE
    public function update(
        $id,
        $lecturer_id,
        $course_id,
        $day,
        $start_time,
        $end_time,
        $room
    ) {
        $sql = "UPDATE schedule
                SET lecturer_id = ?,
                    course_id = ?,
                    day = ?,
                    start_time = ?,
                    end_time = ?,
                    room = ?
                WHERE id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param(
            "iissssi",
            $lecturer_id,
            $course_id,
            $day,
            $start_time,
            $end_time,
            $room,
            $id
        );

        return $stmt->execute();
    }

    // DELETE
    public function delete($id)
    {
        $sql = "DELETE FROM schedule WHERE id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }
}
