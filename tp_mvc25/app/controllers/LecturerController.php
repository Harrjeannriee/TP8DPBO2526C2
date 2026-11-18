<?php

//hubungkan model. controller ini butuh class lecturer agar bisa manggil metode crud yg udh dibuat
require_once __DIR__ . '/../models/Lecturer.php';

class LecturerController
{
    private $lecturer;

    //construktor untuk membuat objek model
    public function __construct($db)
    {
        //controller membuat objek lecturer kemudian disimpan ke atribut $lecturer
        $this->lecturer = new Lecturer($db);
    }

    // Mengambil data lecturer berdasarkan ID
    public function edit($id)
    {
        //controller meminta model mengambil data berdasarkan id ke class lecturer
        //hasil dari model disimpan ke variabel lecturer
        $lecturer = $this->lecturer->getById($id);

        //controller memanggil file view
        require __DIR__ . '/../view/lecturers/edit.php';
    }

    // Memperbarui data lecturer
    //controller memanggil update yang ada di lecturer.php
    public function update($id, $name, $nidn, $phone, $join_date)
    {
        return $this->lecturer->update(
            $id,
            $name,
            $nidn,
            $phone,
            $join_date
        );
    }

    //Create data lecturer, meneruskan permintaan tambah data ke model
    public function create($name, $nidn, $phone, $join_date)
    {
        return $this->lecturer->create(
            $name,
            $nidn,
            $phone,
            $join_date
        );
    }

    // Menampilkan seluruh data lecturer dan memanggil view daftar
    public function index()
    {
        $lecturers = $this->lecturer->getAll();

        require __DIR__ . '/../view/lecturers/index.php';
    }

    // menghapus data lecturer berdasarkan id
    public function delete($id){
        return $this->lecturer->delete($id);
    }
}
