<?php

class Mahasiswa_model
{
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa 
        VALUES
        ('',:nama, :nisn, :email, :jurusan)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}





// [
// [
//             "nama" => "Muhammad Nasril Nufa",
//             "nisn" => "060123",
//             "email" => "nasril@gmail.com",
//             "jurusan" => "Teknik Informatika"
//         ],
//         [
//             "nama" => "Adam Raysa Rahman",
//             "nisn" => "060101",
//             "email" => "adam@gmail.com",
//             "jurusan" => "Teknik Informatika"
//         ],
//         [
//             "nama" => "Zaim",
//             "nisn" => "060136",
//             "email" => "zaim@gmail.com",
//             "jurusan" => "Teknik Informatika"
//         ]
//     ];






// $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        // $this->stmt->execute();
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);