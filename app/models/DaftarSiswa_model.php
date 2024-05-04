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
}