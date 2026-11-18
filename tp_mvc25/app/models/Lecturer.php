<?php

class Lecturer
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // ambil seluruh data dosen dari tabel lecturers (READ)
    public function getAll()
    {
        $sql = "SELECT * FROM lecturers";
        $result = $this->conn->query($sql);

        $lecturers = [];

        if($result){
            while($row = $result->fetch_assoc()){
                $lecturers[] = $row;
            }
        }

        return $lecturers;
    }

    // CREATE
    public function create($name, $nidn, $phone, $join_date)
    {
        $sql = "INSERT INTO lecturers (name, nidn, phone, join_date)
            VALUES (?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $nidn, $phone, $join_date);

        return $stmt->execute();
    }

    // mengambil satu data lecturer berdasarkan id
    public function getById($id)
    {
        $sql = "SELECT * FROM lecturers WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();

        return $result->fetch_assoc();
    }

    // UPDATE
    public function update($id, $name, $nidn, $phone, $join_date)
    {
        $sql = "UPDATE lecturers
            SET name = ?, nidn = ?, phone = ?, join_date = ?
            WHERE id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssi", $name, $nidn, $phone, $join_date, $id);

        return $stmt->execute();
    }

    // DELETE
    public function delete($id) //delete parameter id yang mau dihapus
    {
        //perintah untuk menghapus data dari tabel lecturers
        $sql = "DELETE FROM lecturers WHERE id = ?";    //berdasarkan id 

        $stmt = $this->conn->prepare($sql);

        //menghubungkan nilai parameter dengan placeholder ?. "i" menunjukkan bahwa parameter bertipe integer
        $stmt->bind_param("i", $id);

        //jalankan query dan kembalikan hasil eksekusi kepada pemanggil
        return $stmt->execute();
    }
}
