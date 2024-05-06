<?php

class DaftarSiswa_model
{
    // private $daftarSiswa = [
    //     [
    //         "nama" => "Moh. Fauzan",
    //         "no" => "082250228360",
    //         "email" => "fauzantakibang@gmail.com",
    //         "jurusan" => "RPL"
    //     ],
    //     [
    //         "nama" => "Abdul Gafur",
    //         "no" => "0812345678",
    //         "email" => "abdulgafur@gmail.com",
    //         "jurusan" => "RPL"
    //     ],
    //     [
    //         "nama" => "Alan A vera",
    //         "no" => "0812345678",
    //         "email" => "lann@gmail.com",
    //         "jurusan" => "RPL"
    //     ],
    // ];

    private $table = 'siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }




    public function getAllSiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);

        return $this->db->resultSet();

    }

    public function getSiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function tambahDataSiswa($data)
    {
        $query = "INSERT INTO siswa VALUES('', :nama, :telepon, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('telepon', $data['telepon']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataSiswa($id)
    {
        $query = "DELETE FROM siswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }
}