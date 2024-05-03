<?php

class DaftarSiswa extends Controller
{
    public function index()
    {
        $data['judul'] = "Daftar siswa";
        $data['DaftarSiswa'] = $this->model('DaftarSiswa_model')->getAllSiswa();
        $this->view('templates/header', $data);
        $this->view('daftarsiswa/index', $data);
        $this->view('templates/footer');
    }
}