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

    private $dbh; // data source handler
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=rpl3_web';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function getAllSiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM siswa');
        $this->stmt->execute();

        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

    }
}